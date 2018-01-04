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

use Doctrine\{
    ORM\Mapping as ORM, Common\Collections\Collection
};
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert,
    Ramsey\Uuid\Uuid;

/**
 * @ORM\Entity()
 */
class Category
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
     * @ORM\Column()
     */
    private $slug;

    /**
     * @ORM\Column()
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="locale_type", nullable=false)
     * @DoctrineAssert\Enum(entity="App\DBAL\Types\LocaleEnumType")
     */
    private $locale;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Page", mappedBy="category")
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