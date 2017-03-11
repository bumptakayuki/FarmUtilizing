<?php

namespace FarmUtilizing\CommonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PostType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('body')
            ->add('image_path')
            ->add('image_path2')
            ->add('image_path3')
            ->add('area_map')
            ->add('money')
            ->add('pref_area', 'choice', array(
                'choices' => array(
                    '東京都' => '東京都',
                    '神奈川県' => '神奈川県',
                    '石川県' => '石川県',
                    '埼玉県' => '埼玉県',
                    '群馬県' => '群馬県',
                    '栃木県' => '栃木県',
                )
            ))
            ->add('tags', 'entity', array(
                'class' => 'CommonBundle:Tag',
                'property' => 'tag_name',
                'multiple'=>'multiple'

            ))
            ->add('category', 'entity', array(
                    'class' => 'CommonBundle:Category',
                    'property' => 'category_name'
                )
            )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
//        $resolver->setDefaults(array(
//            'data_class' => 'My\BlogBundle\Entity\Post'
//        ));

        $resolver->setDefaults(array(
            'data_class'      => 'FarmUtilizing\CommonBundle\Entity\Post',
            'csrf_protection' => false,
            'csrf_field_name' => '_token'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'my_blogbundle_post';
    }
}
