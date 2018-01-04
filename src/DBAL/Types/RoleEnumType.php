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

final class RoleEnumType extends AbstractEnumType
{
    public const ROLE_DEVELOPER = 'it';
    public const ROLE_USER = 'user';

    protected static $choices = [
        self::ROLE_DEVELOPER => 'Developer',
        self::ROLE_USER => 'User',
    ];
}
