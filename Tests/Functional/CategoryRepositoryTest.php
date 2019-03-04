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

namespace Omegacode\T3extensionDeployTest\Tests\Functional;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Object\ObjectManagerInterface;
use Nimut\TestingFramework\TestCase\FunctionalTestCase;

/**
 * Class CategoryRepositoryTest.
 */
class CategoryRepositoryTest extends FunctionalTestCase
{
    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @var array
     */
    protected $testExtensionsToLoad = [
        'typo3conf/ext/t3extension_deploy_test',
    ];

    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * Sets up this test case.
     *
     * @throws \Nimut\TestingFramework\Exception\Exception
     */
    protected function setUp()
    {
        parent::setUp();
        $_GET['id'] = 1;
        $this->objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $this->categoryRepository = $this->objectManager->get(CategoryRepository::class);
        $this->importDataSet(__DIR__.'/Fixtures/sys_category.xml');
    }

    /**
     * @test
     */
    public function repositoryFindsCategories()
    {
        $categories = $this->categoryRepository->findAll();
        $this->assertCount(3, $categories);
    }
}
