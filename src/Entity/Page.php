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

use Doctrine\ORM\Mapping as ORM,
    Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert,
    Symfony\Component\Validator\Constraints as Assert,
    Ramsey\Uuid\Uuid;

/**
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="locale_role_slug", columns={"locale", "role", "slug"})})
 */
class Page
{

    /**
     * @var Uuid
     *
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidOrderedTimeGenerator")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="locale_type", nullable=false)
     * @DoctrineAssert\Enum(entity="App\DBAL\Types\LocaleEnumType")
     */
    private $locale;

    /**
     * @var string
     *
     * @ORM\Column(type="role_type", nullable=false)
     * @DoctrineAssert\Enum(entity="App\DBAL\Types\RoleEnumType")
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column()
     * @Assert\NotBlank()
     */
    private $slug;
    /**
     * @ORM\Column()
     */
    private $title;
    /**
     * @ORM\Column(type="text")
     */
    private $content;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="pages")
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