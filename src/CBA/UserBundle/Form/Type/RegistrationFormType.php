<?php

namespace CBA\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('type', 'choice', array(
            'choices' => array('S' => 'Single user', 'G' => 'Groupe'),
            'required' => true,
        ));  
        $builder->add('groupename');
        $builder->add('title', 'choice', array(
            'choices' => array('M' => 'Monsieur', 'F' => 'Madame'),
            'required' => true,
        ));
        $builder->add('firstname');
        $builder->add('lastname');
        $builder->add('birthDate');
        $builder->add('postaladress');
        $builder->add('phone');
        $builder->add('profession');
    }

    public function getName() {
        return 'cba_user_registration';
    }

}
