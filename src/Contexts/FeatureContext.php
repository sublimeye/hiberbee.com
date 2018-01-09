<?php
/**
 * This file is part of the Hiberbee web application.
 *
 * (c) Vladyslav Volkov <vlad@hiberbee.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Contexts;

use Behat\MinkExtension\Context\MinkContext;

/**
 * This context class contains the definitions of the steps used by the demo
 * feature file. Learn how to get started with Behat and BDD on Behat's website.
 *
 * @see http://behat.org/en/latest/quick_start.html
 */
class FeatureContext extends MinkContext
{
    /**
     * @BeforeSuite
     */
    public static function beforeSuite()
    {
        // TODO: Crappy solution, refactor this
        exec('php bin/console server:start 127.0.0.1:8000 > /dev/null 2>&1 &');
        sleep(1);
    }

    /**
     * @AfterSuite
     */
    public static function afterSuite()
    {
        exec('php bin/console server:stop');
    }
}
