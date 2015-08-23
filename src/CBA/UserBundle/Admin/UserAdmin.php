<?php

namespace CBA\UserBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin {

    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper) {

        $container = $this->getConfigurationPool()->getContainer();
        $roles = $container->getParameter('security.role_hierarchy.roles');

        $rolesChoices = self::flattenRoles($roles);

        $formMapper
                ->add('username', 'text', array('label' => 'Username'))
                ->add('password', 'text', array('label' => 'Mot de passe'))
                ->add('firstname', 'text', array('label' => 'Firs Name'))
                ->add('lastname', 'text', array('label' => 'Last Name'))
                ->add('birthdate', 'date', array('widget' => 'single_text', 'required' => false,  'attr' => array('class' => 'datepicker')))
                ->add('email', 'text', array('label' => 'Email'))
                ->add('roles', 'choice', array(
                    'choices' => $rolesChoices,
                    'multiple' => true
                ))
                ->add('enabled', 'checkbox', array('label' => 'Enabled', 'required' => true))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $container = $this->getConfigurationPool()->getContainer();
        $roles = $container->getParameter('security.role_hierarchy.roles');

        $rolesChoices = self::flattenRoles($roles);        
        $datagridMapper
                ->add('username')
                ->add('firstname')
                ->add('lastname')            
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('username')
                ->add('firstname')
                ->add('lastname')
                ->add('birthdate','date')
                ->add('email')
                ->add('phone')
        ;
    }

    protected static function flattenRoles($rolesHierarchy) {
        $flatRoles = array();
        foreach ($rolesHierarchy as $roles) {

            if (empty($roles)) {
                continue;
            }

            foreach ($roles as $role) {
                if (!isset($flatRoles[$role])) {
                    $flatRoles[$role] = $role;
                }
            }
        }

        return $flatRoles;
    }

}
