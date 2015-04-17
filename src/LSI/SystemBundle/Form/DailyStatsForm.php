<?php
namespace LSI\SystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DailyStatsForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('day_of_week', 'hidden')
            ->add('hours_worked', 'text',array('label'=>false,'attr'=>array('class'=>'col-xs-6')))
            ->add('doors_knocked', 'text',array('label'=>false,'attr'=>array('class'=>'col-xs-6')))
            ->add('contacts_made', 'text',array('label'=>false,'attr'=>array('class'=>'col-xs-6')))
            ->add('demos_given', 'text',array('label'=>false,'attr'=>array('class'=>'col-xs-6')))
            ->add('referrals_received', 'text',array('label'=>false,'attr'=>array('class'=>'col-xs-6')))
            ->add('customers', 'text',array('label'=>false,'attr'=>array('class'=>'col-xs-6','disabled'=>'disabled')))
            ->add('sets_sold', 'text',array('label'=>false,'attr'=>array('class'=>'col-xs-6','disabled'=>'disabled')));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LSI\SystemBundle\Entity\RepDailyReport',
        ));
    }

    public function getName()
    {
        return 'lsi_system_dailystats';
    }

}