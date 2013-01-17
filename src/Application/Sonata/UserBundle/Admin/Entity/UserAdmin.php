<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Admin\Entity;

use Sonata\UserBundle\Admin\Entity\UserAdmin as BaseUserAdmin;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends BaseUserAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
            ->add('username')
            ->add('email')
            ->add('plainPassword', 'text', array('required' => false))
            ->end()
            ->with('Groups')
            ->add('groups', 'sonata_type_model', array('required' => false, 'expanded' => true, 'multiple' => true))
            ->end()
            ->with('Profile')
            ->add('dateOfBirth', 'birthday', array('required' => false))
            ->add('firstname', null, array('required' => false))
            ->add('lastname', null, array('required' => false))
            ->add('website', 'url', array('required' => false))
            ->add('biography', 'text', array('required' => false))
            ->add('gender', 'choice', array(
                    'required' => false,
                    'choices'=> array('Male'=>'Male', 'Female'=>'Female')
            ))
//            ->add('locale', 'locale', array('required' => false))
            ->add('timezone', 'timezone', array('required' => false))
            ->add('phone', null, array('required' => false))
            ->end()
            ->with('Social')
            ->add('facebookUid', null, array('required' => false))
            ->add('facebookName', null, array('required' => false))
            ->add('twitterUid', null, array('required' => false))
            ->add('twitterName', null, array('required' => false))
            ->add('gplusUid', null, array('required' => false))
            ->add('gplusName', null, array('required' => false))
            ->end()
        ;

        if (!$this->getSubject()->hasRole('ROLE_SUPER_ADMIN')) {
            $formMapper->with('Management')
                ->add('roles', 'sonata_security_roles', array(
                'expanded' => true,
                'multiple' => true,
                'required' => false
            ))
                ->add('locked', null, array('required' => false))
                ->add('expired', null, array('required' => false))
                ->add('enabled', null, array('required' => false))
                ->add('credentialsExpired', null, array('required' => false))
                ->end();
        }

        $formMapper
            ->with('Security')
            ->add('token', null, array('required' => false))
            ->add('twoStepVerificationCode', null, array('required' => false))
            ->end();
    }

}
