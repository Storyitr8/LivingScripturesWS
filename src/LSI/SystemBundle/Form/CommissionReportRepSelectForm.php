<?php
namespace LSI\SystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class CommissionReportRepSelectForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        for($i=2008;$i<=$options['year'];$i++){
            $years[$i] = $i;
        }

        $builder->add('year', 'choice',array(
            'choices'=>$years,
            'data'=>$options['year']?:date('Y')
        ))
        ->add('user', 'entity', array(
            'class'=> 'LSISystemBundle:UserMain',
            'query_builder' => function(EntityRepository $er) use($options){
                if($options['only_show_team']){
                    return $er->createQueryBuilder('u')
                        ->join('u.userTeam','t')
                        ->join('u.userStatus','us')
                        ->join('u.salesProgramType','spt')
                        ->where('spt.salesProgramType = :program')
                        ->andWhere('t.userTeamId = :team')
                        ->orderBy('us.userStatusDesc','ASC')
                        ->addOrderBy('u.firstName', 'ASC')
                        ->setParameter('program',$options['program'])
                        ->setParameter('team',$options['team']);
                }
                return $er->createQueryBuilder('u')
                    ->join('u.salesProgramType','spt')
                    ->join('u.userStatus','us')
                    ->where('spt.salesProgramType = :program')
                    ->orderBy('us.userStatusDesc','ASC')
                    ->addOrderBy('u.firstName', 'ASC')
                    ->setParameter('program',$options['program']);
            },
            'group_by'=>'userStatus.userStatusDesc',
            'property'=>'fullName',
            'data'=>$options['user']?:''
        ))
        ->add('select','submit',array('attr'=>array('class'=>'btn btn-primary btn-xs')));
    }

    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array(
            'program'=>null,
            'only_show_team'=>false,
            'team'=>null,
            'user'=>null,
            'year'=>null
        ));
    }

    public function getName()
    {
        return 'lsi_system_commissionreportrepselect';
    }

}