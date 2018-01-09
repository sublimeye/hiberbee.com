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

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\{
    Column, CustomIdGenerator, Entity, GeneratedValue, Id, OneToMany
};
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;
use Ramsey\Uuid\Uuid;

/**
 * @Entity()
 */
class Category
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
     * @Column()
     */
    private $slug;

    /**
     * @Column()
     */
    private $name;

    /**
     * @var string
     *
     * @Column(type="locale_type", nullable=false)
     * @DoctrineAssert\Enum(entity="App\DBAL\Types\LocaleEnumType")
     */
    private $locale;

    /**
     * @var Collection
     *
     * @OneToMany(targetEntity="App\Entity\Page", mappedBy="category")
     */
    private $pages;

    /**
     * @return null|Uuid
     */
    public function getId(): ?Uuid
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getSlug(): ?string
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
     * @return null|Collection
     */
    public function getPages(): ?Collection
    {
        return $this->pages;
    }

    /**
     * @param Collection $pages
     */
    public function setPages($pages): void
    {
        $this->pages = $pages;
    }

    /**
     * @return null|string
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
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

}