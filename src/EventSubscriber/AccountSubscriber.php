<?php
/**
 * This file is part of the Hiberbee web application.
 *
 * (c) Vladyslav Volkov <vlad@hiberbee.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\EventSubscriber;


use App\Entity\Account;
use App\Events;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountSubscriber implements EventSubscriberInterface
{
    private $mailer;
    private $templateEngine;
    private $encoder;
    private $tokenStorage;
    private $authenticationManager;
    private $sender;

    /**
     * PasswordEmailSubscriber constructor.
     * @param \Swift_Mailer $mailer
     * @param \Twig_Environment $templateEngine
     * @param UserPasswordEncoderInterface $encoder
     * @param TokenStorageInterface $tokenStorage
     * @param AuthenticationManagerInterface $authenticationManager
     * @param $sender
     */
    public function __construct(
        \Swift_Mailer $mailer,
        \Twig_Environment $templateEngine,
        UserPasswordEncoderInterface $encoder,
        TokenStorageInterface $tokenStorage,
        AuthenticationManagerInterface $authenticationManager,
        $sender
    ) {
        $this->mailer = $mailer;
        $this->templateEngine = $templateEngine;
        $this->encoder = $encoder;
        $this->tokenStorage = $tokenStorage;
        $this->authenticationManager = $authenticationManager;
        $this->sender = $sender;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            Events::ACCOUNT_CREATED => [
                ['generatePassword', 10],
                ['encodePassword', 0],
                ['sendMail', -10],
                ['authenticate', -20],
            ],
        ];
    }

    /**
     * @param GenericEvent $event
     */
    public function generatePassword(GenericEvent $event)
    {
        /** @var Account $account */
        $account = $event->getSubject();
        $account->setPlainPassword(uniqid());
    }

    /**
     * @param GenericEvent $event
     */
    public function encodePassword(GenericEvent $event)
    {
        /** @var Account $account */
        $account = $event->getSubject();
        $encodedPassword = $this->encoder->encodePassword($account, $account->getPlainPassword());
        $account->setPassword($encodedPassword);
    }

    /**
     * @param GenericEvent $event
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function sendMail(GenericEvent $event): void
    {
        /** @var Account $account */
        $account = $event->getSubject();
        $message = (new \Swift_Message())
            ->setSubject('New password request')
            ->setTo($account->getEmail())
            ->setFrom($this->sender)
            ->setBody(
                $this->templateEngine->render(
                    'email/password-request.html.twig',
                    [
                        'password' => $account->getPlainPassword(),
                    ]
                ),
                'text/html'
            );

        $this->mailer->send($message);
    }

    /**
     * @param GenericEvent $event
     */
    public function authenticate(GenericEvent $event)
    {
        /** @var Account $account */
        $account = $event->getSubject();
        $token = new UsernamePasswordToken($account, $account->getPassword(), 'main', $account->getRoles());
        $this->authenticationManager->authenticate($token);
        $this->tokenStorage->setToken($token);
    }
}