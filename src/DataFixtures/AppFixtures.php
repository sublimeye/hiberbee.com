<?php
/**
 * This file is part of the Hiberbee web application.
 *
 * (c) Vladyslav Volkov <vlad@hiberbee.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\DataFixtures;

use App\Entity\Page;
use Doctrine\Bundle\FixturesBundle\Fixture;

use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $this->loadPages($manager);
    }

    private function loadPages(ObjectManager $manager)
    {
        foreach ($this->getPageData() as [$locale, $role, $slug, $title, $content]) {
            $page = new Page($locale, $role, $slug);
            $page->setTitle($title);
            $page->setContent($content);
            $manager->persist($page);
        }
        $manager->flush();
    }

    private function getPageData(): array
    {
        return [
            // $pageData = [$locale, $role, $slug,  $title, $content];
            ['en', 'ROLE_DEVELOPER', 'project_management', 'Project management for developers', 'Project management is blabla'],
            ['en', 'ROLE_USER', 'project_management', 'Project management for users', 'Project management is blabla'],
            ['ru', 'ROLE_DEVELOPER', 'project_management', 'Проектный менеджмент для разработчиков', 'Проектный менеджмент это блабла'],
            ['ru', 'ROLE_USER', 'project_management', 'Проектный менеджмент для пользователей', 'Проектный менеджмент это блабла'],
        ];
    }
}
