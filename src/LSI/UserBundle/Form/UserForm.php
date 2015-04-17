<?php
namespace LSI\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class UserForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('slsm_no')
            ->add('first_name')
            ->add('last_name')
            ->add('email')
            ->add('address')
            ->add('address2')
            ->add('city')
            ->add('state')
            ->add('zip')
            ->add('team')
            ->add('department')
            ->add('role','choice',array(
                'choices'=>array(
                    'ROLE_USER'=>'User',
                    'ROLE_MANAGER'=>'Manager',
                    'ROLE_ADMIN'=>'Admin'
                )
            ))
            ->add('save', 'submit');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
        ));
    }

    public function getName()
    {
        return 'LSI_UserBundle_UserForm';
    }
}