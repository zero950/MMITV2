<?php
/**
 * Created by PhpStorm.
 * User: anff
 * Date: 30/10/2015
 * Time: 20:52
 */
namespace MMITVBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UrlFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('url', 'text', array('label' => 'url'));
    }

    public function getName()
    {
        return 'mmitv_video';
    }
}