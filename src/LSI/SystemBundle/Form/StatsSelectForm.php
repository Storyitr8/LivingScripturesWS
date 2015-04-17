<?php
namespace LSI\SystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class StatsSelectForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('week', 'entity',array(
                'class'=> 'LSISystemBundle:SummerSalesWeek',
                'query_builder' => function(EntityRepository $er) use($options){
                    return $er->createQueryBuilder('s')
                        ->where('s.salesProgramType = :program')
                        ->orderBy('s.summerSalesWeekStartDate', 'DESC')
                        ->setParameter('program',$options['program']);
                },
                'property'=>'summerSalesWeekDesc',
                'data'=>$options['week']?$options['week']->getSummerSalesWeekId():''
            ))
            ->add('user', 'entity', array(
                'class'=> 'LSISystemBundle:UserMain',
                'query_builder' => function(EntityRepository $er) use($options){
                    if($options['only_show_team']){
                        return $er->createQueryBuilder('u')
                            ->join('u.userTeam','t')
                            ->where('u.salesProgramType = :program')
                            ->andWhere('t.userTeamId = :team')
                            ->orderBy('u.firstName', 'ASC')
                            ->setParameter('program',$options['program'])
                            ->setParameter('team',$options['team']);
                    }
                    return $er->createQueryBuilder('u')
                        ->where('u.salesProgramType = :program')
                        ->orderBy('u.firstName', 'ASC')
                        ->setParameter('program',$options['program']);
                },
                'group_by'=>'statusString',
                'property'=>'fullName',
                'data'=>$options['user']?:''
            ))
            ->add('update','submit',array('attr'=>array('class'=>'btn btn-primary btn-xs'),'label'=>'Change User'));
    }

    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array(
            'program'=>null,
            'show_inactive' => false,
            'only_show_team'=>false,
            'team'=>null,
            'user'=>null,
            'week'=>null
        ));
    }

    public function getName()
    {
        return 'lsi_system_statsselect';
    }

}