<?php

namespace App\Controller\Admin;

use App\Controller\CheckoutController;
use App\Entity\Address;
use App\Entity\Transporter;
use App\Entity\Category;
use App\Entity\Color;
use App\Entity\Comments;
use App\Entity\Contact;
use App\Entity\Newsletters\Categories;
use App\Entity\Newsletters\Newsletters;
use App\Entity\Newsletters\Users;
use App\Entity\Orders;
use App\Entity\Pages;
use App\Entity\Payment;
use App\Entity\Product;
use App\Entity\Settings;
use App\Entity\Gender;
use App\Entity\Order;
use App\Entity\OrderDetail;
use App\Entity\SiteInformation;
use App\Entity\Slider;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        //return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(ProductCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('AFAMIASHOP');
    }


    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToUrl('Site', 'fas fa-home', '/');
        yield MenuItem::linkToCrud('Products', 'fas fa-list', Product::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-tag', Category::class);
        yield MenuItem::linkToCrud('GenderProducts', 'fas fa-ruler', Gender::class);
        yield MenuItem::linkToCrud('ColorProducts', 'fas fa-ruler', Color::class);
        yield MenuItem::linkToCrud('Addresses', 'fas fa-address-card', Address::class);
        yield MenuItem::linkToCrud('Users', 'fas fa-users', User::class);
        yield MenuItem::linkToCrud('Slider', 'fas fa-image', Slider::class);
        yield MenuItem::linkToCrud('Comments', 'fas fa-comment', Comments::class);
        yield MenuItem::linkToCrud('Contact', 'fas fa-envelope', Contact::class);
        yield MenuItem::linkToCrud('NewslettersCategories', 'fas fa-newspaper', Categories::class);
        yield MenuItem::linkToCrud('NewslettersUsers', 'fas fa-newspaper', Users::class);
        yield MenuItem::linkToCrud('Newsletters', 'fas fa-newspaper', Newsletters::class);
        yield MenuItem::linkToCrud('Order', 'fas fa-shopping-cart', Order::class);
        yield MenuItem::linkToCrud('OrdersDetails', 'fas fa-shopping-cart', OrderDetail::class);
        yield MenuItem::linkToCrud('Site Information', 'fas fa-info-circle', SiteInformation::class);
        yield MenuItem::linkToCrud('Payment', 'fas fa-landmark', Payment::class);
        yield MenuItem::linkToCrud('Transporter', 'fas fa-truck', Transporter::class);

    }
}
