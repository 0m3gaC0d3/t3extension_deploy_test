<?php
/*
 * This file is part of the "t3extension_deploy_test" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2019 Wolf Utz
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Some test extension',
    'description' => '',
    'version' => '0.0.1',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'state' => 'alpha',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'author' => 'Wolf Utz',
    'author_email' => 'wpu@hotmail.de',
    'autoload' => [
        'psr-4' => [
            'Omegacode\\T3extensionDeployTest\\' => 'Classes',
        ]
    ],
];
