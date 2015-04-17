<?php
namespace LSI\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class UserRegistrationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('slsm_no','text',array(
                'label'=>'SLSM Number'
            ))
            ->add('first_name')
            ->add('last_name')
            ->add('email')
            ->add('password', 'repeated', array(
                'type'=>'password',
                'first_options' => array(
                    'label' => 'New Password'
                ),
                'second_options' => array(
                    'label' => 'Confirm New Password'
                )
            ))
            ->add('register', 'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array());
    }

    public function getName()
    {
        return 'LSI_UserBundle_UserRegistrationForm';
    }
}