<?php

namespace App\Controller\Admin;

use App\Entity\SiteInformation;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SiteInformationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SiteInformation::class;
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
            TextField::new('name'),
            IntegerField::new('tva'),
            TextField::new('description'),
            TextField::new('hours'),
            TextField::new('nameCategory'),
            TextField::new('nameAddress'),
            TextField::new('street'),
            TextField::new('city'),
            TextField::new('codePostal'),
            TextField::new('email'),
            TelephoneField::new('phone'),
            TextField::new('question'),
            TextField::new('descrrptionQuestion'),
            TextField::new('termsConditions'),
            TextField::new('nameSubscribe'),
            TextField::new('descriptionSubscribe'),
            TextField::new('copyright'),
        ];
    }
}
