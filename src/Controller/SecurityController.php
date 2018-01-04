<?php
/**
 * This file is part of the Hiberbee web application.
 *
 * (c) Vladyslav Volkov <vlad@hiberbee.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use Symfony\{
    Bundle\FrameworkBundle\Controller\Controller, Component\HttpFoundation\Request, Component\Routing\Annotation\Route
};

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request)
    {
    }
}