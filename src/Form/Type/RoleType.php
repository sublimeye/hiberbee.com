<?php
/**
 * This file is part of the Hiberbee web application.
 *
 * (c) Vladyslav Volkov <vlad@hiberbee.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Form\Type;


use App\DBAL\Types\RoleEnumType;
use Symfony\Component\Form\AbstractType,
    Symfony\Component\OptionsResolver\OptionsResolver,
    Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class RoleType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => RoleEnumType::getChoices()
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }

}