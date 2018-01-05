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

use App\Entity\Page;
use Symfony\{
    Bundle\FrameworkBundle\Controller\Controller, Component\HttpFoundation\Response, Component\Routing\Annotation\Route
};

/**
 * @Route("/{_locale}/{_role}")
 */
class PageController extends Controller
{
    /**
     * @Route("/{slug}", name="page")
     * @param $_locale
     * @param $_role
     * @param $slug
     * @return Response
     */
    public function indexAction($_locale, $_role, $slug)
    {
        $page = $this->getDoctrine()->getRepository(Page::class)->findOneBy(
            ['locale' => $_locale, 'role' => $_role, 'slug' => $slug]
        );

        return $this->render(
            'default/page.html.twig',
            [
                'page' => $page,
            ]
        );
    }

}