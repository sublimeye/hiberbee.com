<?php
/**
 * This file is part of the Hiberbee web application.
 *
 * (c) Vladyslav Volkov <vlad@hiberbee.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity;

use Doctrine\ORM\Mapping\{
    Column, CustomIdGenerator, Entity, GeneratedValue, Id
};
use Ramsey\Uuid\Uuid;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Entity
 */
final class Account implements UserInterface, \Serializable
{

    /**
     * @var Uuid
     *
     * @Id
     * @Column(type="uuid", unique=true)
     * @GeneratedValue(strategy="CUSTOM")
     * @CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidOrderedTimeGenerator")
     */
    private $id;

    /**
     * @var string
     * @Column(nullable=true)
     */
    private $facebookId;

    /**
     * @var string
     * @Column(nullable=true)
     */
    private $linkedinId;

    /**
     * @Column(type="string", length=60, unique=true)
     */
    private $email;

    public function getUsername()
    {
        return $this->getEmail();
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getSalt()
    {
    }

    public function getPassword()
    {
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /** @inheritdoc */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->facebookId,
        ));
    }

    /** @inheritdoc */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->facebookId,
            ) = unserialize($serialized);
    }

    /**
     * @return null|string
     */
    public function getFacebookId(): ?string
    {
        return $this->facebookId;
    }

    /**
     * @param string $facebookId
     */
    public function setFacebookId(string $facebookId): void
    {
        $this->facebookId = $facebookId;
    }

    /**
     * @return null|string
     */
    public function getLinkedinId(): ?string
    {
        return $this->linkedinId;
    }

    /**
     * @param string $linkedinId
     */
    public function setLinkedinId(string $linkedinId): void
    {
        $this->linkedinId = $linkedinId;
    }


}