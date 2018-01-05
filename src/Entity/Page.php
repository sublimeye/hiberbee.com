<?php

/**
 *
 * This file is part of the Hiberbee web application.
 *
 * (c) Vladyslav Volkov <vlad@hiberbee.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace App\Entity;

use Doctrine\ORM\Mapping\{
    Column, CustomIdGenerator, Entity, GeneratedValue, Id, ManyToOne, Table, UniqueConstraint
};
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Entity
 * @Table(uniqueConstraints={@UniqueConstraint(name="locale_role_slug", columns={"locale", "role", "slug"})})
 */
class Page
{

    /**
     * @var Uuid
     *
     * @Id
     * @Column(type="uuid", unique=true)
     * @GeneratedValue(strategy="CUSTOM")
     * @CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidOrderedTimeGenerator")
     */
    protected $id;

    /**
     * @var string
     *
     * @Column(type="locale_type", nullable=false)
     * @DoctrineAssert\Enum(entity="App\DBAL\Types\LocaleEnumType")
     */
    private $locale;

    /**
     * @var string
     *
     * @Column(type="role_type", nullable=false)
     * @DoctrineAssert\Enum(entity="App\DBAL\Types\RoleEnumType")
     */
    private $role;

    /**
     * @var string
     *
     * @Column()
     * @Assert\NotBlank()
     */
    private $slug;
    /**
     * @Column()
     */
    private $title;
    /**
     * @Column(type="text")
     */
    private $content;
    /**
     * @ManyToOne(targetEntity="App\Entity\Category", inversedBy="pages")
     */
    private $category;


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }


    /**
     * @return null|Category
     */
    public function getCategory(): ?Category
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    /**
     * @return null|Uuid
     */
    public function getId(): ?Uuid
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @return null|string
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function __toString()
    {
        return $this->title;
    }


}