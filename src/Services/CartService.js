// cartService.js

class CartService {
    constructor() {
        this.cartKey = 'cart';
        this.transporterKey = 'transporter';
    }

    get(key) {
        const data = localStorage.getItem(key);
        return data ? JSON.parse(data) : {};
    }

    update(key, data) {
        localStorage.setItem(key, JSON.stringify(data));
    }

    addToCart(productId, count = 1) {
        const cart = this.get(this.cartKey);
        if (cart[productId]) {
            cart[productId] += count;
        } else {
            cart[productId] = count;
        }
        this.update(this.cartKey, cart);
    }

    removeFromCart(productId, count = 1) {
        const cart = this.get(this.cartKey);
        if (cart[productId]) {
            if (cart[productId] <= count) {
                delete cart[productId];
            } else {
                cart[productId] -= count;
            }
            this.update(this.cartKey, cart);
        }
    }

    clearCart() {
        this.update(this.cartKey, {});
    }

    updateCartTransporter(transporter) {
        this.update(this.transporterKey, transporter);
    }

    getCartDetails(products, siteInformation) {
        const cart = this.get(this.cartKey);
        const result = {
            items: [],
            sub_total: 0,
            cart_count: 0,
            quantity: 0
        };

        let sub_total = 0;
        let tva = 0;
        const info = siteInformation.find(info => info.name === 'AfamiaShop');

        if (info) {
            tva = info.tva / 100;
        }

        for (const [productId, quantity] of Object.entries(cart)) {
            const product = products.find(p => p.id == productId);
            if (product) {
                const current_sub_total = product.price * quantity;
                sub_total += current_sub_total;
                result.items.push({
                    product: {
                        id: product.id,
                        name: product.name,
                        description: product.description,
                        imageUrls: product.imageUrls,
                        price: product.price
                    },
                    quantity,
                    sub_total_htva: Math.round(current_sub_total / (1 + tva)),
                    tva: Math.round(tva * current_sub_total / (1 + tva)),
                    sub_total: current_sub_total
                });
                result.sub_total = sub_total;
                result.sub_total_htva = Math.round(sub_total / (1 + tva));
                result.tva = Math.round(tva * result.sub_total_htva);
                result.cart_count += quantity;
                result.quantity += quantity;
            } else {
                delete cart[productId];
                this.update(this.cartKey, cart);
            }
        }

        const transporter = this.get(this.transporterKey);
        if (transporter) {
            result.transporter = transporter;
            result.sub_total_with_transporter = result.sub_total + transporter.price;
        }

        return result;
    }

    
}

// Example usage
const cartService = new CartService();

// Sample products and site information
const products = [
    {id: 1, name: 'Product 1', description: 'Description 1', imageUrls: ['url1'], price: 10},
    {id: 2, name: 'Product 2', description: 'Description 2', imageUrls: ['url2'], price: 20}
];

const siteInformation = [
    {name: 'AfamiaShop', tva: 20}
];
