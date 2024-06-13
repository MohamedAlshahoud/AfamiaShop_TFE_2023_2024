// cartDisplay.js

document.addEventListener('DOMContentLoaded', () => {
    updateCartDisplay();
});

function addToCart(productId, count = 1) {
    cartService.addToCart(productId, count);
    updateCartDisplay();
}

function removeFromCart(productId, count = 1) {
    cartService.removeFromCart(productId, count);
    updateCartDisplay();
}

function updateCartDisplay() {
    const cartDetails = cartService.getCartDetails(products, siteInformation);
    renderCart(cartDetails);
}

function renderCart(cartDetails) {
    const cartContainer = document.querySelector('.shop_cart_table tbody');
    cartContainer.innerHTML = '';

    cartDetails.items.forEach(item => {
        const row = document.createElement('tr');

        row.innerHTML = `
            <td class="product-thumbnail">
                <a><img width="50" alt="${item.product.name}" src="/assets/images/products/${item.product.imageUrls[0]}"></a>
            </td>
            <td data-title="Product" class="product-name"><a>${item.product.name}</a></td>
            <td data-title="Price" class="product-price">${(item.product.price / 100).toFixed(2)} €</td>
            <td data-title="Quantity" class="product-quantity">
                <div class="quantity">
                    <button onclick="removeFromCart(${item.product.id}, 1)" class="minus">-</button>
                    <input type="text" name="quantity" value="${item.quantity}" title="Qty" size="4" class="qty">
                    <button onclick="addToCart(${item.product.id}, 1)" class="plus">+</button>
                </div>
            </td>
            <td data-title="Total" class="product-subtotal">${(item.sub_total / 100).toFixed(2)} €</td>
            <td data-title="Remove" class="product-remove"><button onclick="removeFromCart(${item.product.id}, ${item.quantity})"><i class="fa fa-trash"></i></button></td>
        `;

        cartContainer.appendChild(row);
    });

    document.querySelector('.cart_sub_total_amount_htva').textContent = (cartDetails.sub_total_htva / 100).toFixed(2) + ' €';
    document.querySelector('.cart_tva').textContent = (cartDetails.tva / 100).toFixed(2) + ' €';
    document.querySelector('.cart_sub_total_amount').textContent = (cartDetails.sub_total / 100).toFixed(2) + ' €';
}
