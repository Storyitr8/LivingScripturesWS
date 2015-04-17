<?php
namespace LSI\SystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use LSI\SystemBundle\Form\DailyStatsForm;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WeeklyStatsForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('repDailyReports', 'collection',array(
                'type'=>new DailyStatsForm(),
                'options'  => array(
                    'required'  => false
                ),
                'label'=>false,
            ))
            ->add('ward','text')
            ->add('stake','text')
            ->add('stateProv','entity',array(
                'empty_value'=>'Select One',
                'class'=>'LSISystemBundle:StateProv',
                'property'=>'stateProvDesc'
            ))
            ->add('save','submit',array('attr'=>array('class'=>'btn btn-primary')));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LSI\SystemBundle\Entity\RepReportWeek',
            'userid' => null,
            'summer_sales_week_id'=>null
        ));
    }

    public function getName()
    {
        return 'lsi_stats_recordstats';
    }

}