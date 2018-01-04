<?php
/**
 * This file is part of the Hiberbee web application.
 *
 * (c) Vladyslav Volkov <vlad@hiberbee.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class LocaleEnumType extends AbstractEnumType
{
    public const RUSSIAN = 'ru';
    public const ENGLISH = 'en';

    protected static $choices = [
        self::RUSSIAN => 'Russian',
        self::ENGLISH => 'English',
    ];

}
