<?php

namespace Tienda\ProductoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProveedorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('nif')
            ->add('poblacion')
            ->add('estado')
            ->add('provincia')
            ->add('pais')
            ->add('email')
            ->add('fax')
            ->add('telefono')
            ->add('cp')
            ->add('logo')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tienda\ProductoBundle\Entity\Proveedor'
        ));
    }

    public function getName()
    {
        return 'tienda_productobundle_proveedortype';
    }
}
