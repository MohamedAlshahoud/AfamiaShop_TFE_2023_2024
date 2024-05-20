<?php

namespace App\Controller\Admin;

use App\Entity\Order;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OrderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Order::class;
    }

   
    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_EDIT, Action::INDEX)
                        ->add(Crud::PAGE_INDEX, Action::DETAIL)
                        ->add(Crud::PAGE_EDIT, Action::DETAIL);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('reference'),
            TextField::new('user'),
            TextField::new('transporterName'),
            MoneyField::new('transporterPrice')->setCurrency("EUR"),
            TextField::new('deliveryAddress')->hideOnIndex(),
            IntegerField::new('quantity'),
            BooleanField::new('isPaid'),
            MoneyField::new('order_cost')->setCurrency("EUR"),
            MoneyField::new('tva')->setCurrency("EUR"),
            MoneyField::new('order_cost_ttc')->setCurrency("EUR"),
        ];
    }
    
}
