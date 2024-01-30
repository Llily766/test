<?php

namespace App\Controller\Admin;

use App\Entity\Cars;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class CarsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cars::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
           
            TextField::new('title'),
            IntegerField::new('price'),
            TextField::new('carburant'),
            IntegerField::new('yearOfCirculation'),
            IntegerField::new('mileage'),
            TextField::new('model'),
           ImageField::new('picture')
           ->setBasePath('upload/cars')
                ->setUploadDir('public/upload/cars')
                ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]'),
        ];
    }
    
}
