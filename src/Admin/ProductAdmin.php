<?php


namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class ProductAdmin extends AbstractAdmin
{
    protected function configureListFields(ListMapper $list)

    {
        $list
            ->add('name')
            ->add('description')
            ->add('price')
            ->add('count')
            ->add('IsTop');
    }

    protected function configureListFilter(DatagridMapper $filter)
    {
        $filter
            ->add('name')
            ->add('description')
            ->add('price')
            ->add('count')
            ->add('IsTop');
    }
}
