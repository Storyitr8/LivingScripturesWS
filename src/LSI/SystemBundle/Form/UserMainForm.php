<?php
namespace LSI\SystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserMainForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', 'text')
            ->add('password', 'text')
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('address', 'text')
            ->add('city', 'text')
            ->add('state', 'text')
            ->add('zip', 'text')
            ->add('prefPhone', 'text')
            ->add('altPhone', 'text')
            ->add('email', 'text')
            ->add('picture', 'text')
            ->add('school', 'text');
    }


    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array());
    }

    public function getName()
    {
        return 'lsi_system_usermain';
    }

}