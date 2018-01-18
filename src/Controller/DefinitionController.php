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

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/definitions")
 */
class DefinitionController extends Controller
{
    /**
     * @Route("/{slug}")
     * @param string $slug
     */
    public function getAction(string $slug)
    {
        die($slug);
    }
}