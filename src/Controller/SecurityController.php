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
use App\Events;
use Symfony\{
    Bundle\FrameworkBundle\Controller\Controller, Component\EventDispatcher\GenericEvent, Component\HttpFoundation\JsonResponse, Component\HttpFoundation\Request, Component\HttpFoundation\Response, Component\Routing\Annotation\Route, Component\Security\Http\Authentication\AuthenticationUtils
};

class SecurityController extends Controller
{

    /**
     * @param Request $request
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'security/login.html.twig',
            array(
                'last_username' => $lastUsername,
                'error' => $error,
            )
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route("/sync-with-facebook", name="sync-with-facebook")
     */
    public function syncWithFacebook(Request $request)
    {
        $postParameters = $request->request;
        $email = $postParameters->get('email');
        $doctrine = $this->getDoctrine();
        $account = $doctrine
            ->getRepository(Account::class)
            ->findOneBy(['email' => $email]);

        if (null === $account) {
            $account = new Account();
            $account->setEmail($email);
            $doctrine->getManager()->persist($account);
            $this->get('event_dispatcher')->dispatch(Events::ACCOUNT_CREATED, new GenericEvent($account));
        }
        $account->setFacebookId($postParameters->get('id'));

        $doctrine->getManager()->flush();

        return new JsonResponse();
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/sync-with-linkedin", name="sync-with-linkedin")
     */
    public function syncWithLinkedin(Request $request)
    {
        $postParameters = $request->request;
        $email = $postParameters->get('emailAddress');
        $doctrine = $this->getDoctrine();
        $account = $doctrine
            ->getRepository(Account::class)
            ->findOneBy(['email' => $email]);

        if (null === $account) {
            $account = new Account();
            $account->setEmail($email);
            $this->getDoctrine()->getManager()->persist($account);
            $this->get('event_dispatcher')->dispatch(Events::ACCOUNT_CREATED, new GenericEvent($account));
        }
        $account->setLinkedinId($postParameters->get('id'));

        $this->getDoctrine()->getManager()->flush();

        return new JsonResponse();
    }

}