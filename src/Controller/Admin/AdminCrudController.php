<?php

namespace App\Controller\Admin;

use App\Entity\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * Class AdminCrudController
 * @package App\Controller\Admin
 * @IsGranted("ROLE_ADMIN")
 */

class AdminCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Admin::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            //TextField::new('title'),
            //TextEditorField::new('description'),
            TextField::new('email')->setLabel('admin.email'),
     /*       TextField::new('first_name')->setLabel('admin.first_name'),
            TextField::new('last_name')->setLabel('admin.last_name'),
            */
        ];
    }
}
