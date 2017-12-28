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

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Page
{

    /**
     * @ORM\Id
     * @ORM\Column()
     */
    private $locale;
    /**
     * @ORM\Id()
     * @ORM\Column()
     */
    private $role;
    /**
     * @ORM\Id()
     * @ORM\Column()
     */
    private $slug;
    /**
     * @ORM\Column()
     */
    private $title;
    /**
     * @ORM\Column()
     */
    private $content;

    public function __construct($locale, $role, $slug)
    {
        $this->locale = $locale;
        $this->role = $role;
        $this->slug = $slug;
    }

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
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->slug = $slug;
    }


}