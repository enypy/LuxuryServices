<?php

namespace App\Controller\Admin;

use App\Entity\ApplicationStatus;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ApplicationStatusCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ApplicationStatus::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setTimezone('Europe/Paris')
            ->setEntityLabelInSingular('Application status')
            ->setEntityLabelInPlural('Application status')
            ->setDefaultSort(['id' => 'DESC']);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('statusValue', 'Status'),
        ];
    }
}
