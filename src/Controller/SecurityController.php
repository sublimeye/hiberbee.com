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

use App\Entity\Account;
use Symfony\{
    Bundle\FrameworkBundle\Controller\Controller, Component\HttpFoundation\JsonResponse, Component\HttpFoundation\Request, Component\Routing\Annotation\Route
};

class SecurityController extends Controller
{

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route("/sync-with-facebook", name="sync-with-facebook")
     */
    public function syncWithFacebook(Request $request)
    {
        $account = $this->getDoctrine()->getRepository(Account::class)->findOneByEmail($request->request->get('email'));
        if (null == $account) {
            $account = new Account();
            $account->setEmail($request->request->get('email'));
            $account->setFacebookId($request->request->get('id'));
            $this->getDoctrine()->getManager()->persist($account);
            $this->getDoctrine()->getManager()->flush();
            return new JsonResponse(null, 201);

        }
        return new JsonResponse();

    }
}