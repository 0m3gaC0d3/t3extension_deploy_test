<?php
/**
 * This file is part of the "t3extension_deploy_test" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2019 Wolf Utz
 */

declare(strict_types=1);

namespace Omegacode\T3extensionDeployTest\Tests\Unit;

use Nimut\TestingFramework\TestCase\UnitTestCase;
use Omegacode\T3extensionDeployTest\TestClass;

/**
 * Class Constants.
 */
class TestClassTest extends UnitTestCase
{
    /**
     * @test
     */
    public function return123Returns123()
    {
        $this->assertEquals(123, TestClass::return123());
    }
}
