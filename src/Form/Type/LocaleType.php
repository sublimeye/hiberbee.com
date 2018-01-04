<?php
/**
 * This file is part of the Hiberbee web application.
 *
 * (c) Vladyslav Volkov <vlad@hiberbee.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Created by IntelliJ IDEA.
 * User: Vlad Volkov
 * Date: 1/4/2018
 * Time: 12:44 PM
 */

namespace App\Form\Type;


use Symfony\Component\Form\AbstractType,
    Symfony\Component\OptionsResolver\OptionsResolver,
    Symfony\Component\Form\Extension\Core\Type\ChoiceType,
    App\DBAL\Types\LocaleEnumType;


class LocaleType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => LocaleEnumType::getChoices()
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }



}