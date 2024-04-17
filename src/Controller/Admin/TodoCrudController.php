<?php

namespace App\Controller\Admin;

use App\Entity\Todo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TodoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Todo::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextEditorField::new('description'),
            AssociationField::new('status')->setFormTypeOption('choice_label', function ($choice) {
                return $choice->getName();
            })

        ];
    }
}
