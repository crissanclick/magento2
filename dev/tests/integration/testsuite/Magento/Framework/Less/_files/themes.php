<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
use Magento\Framework\App\Bootstrap;
use Magento\Framework\App\Filesystem\DirectoryList;

\Magento\TestFramework\Helper\Bootstrap::getInstance()->reinitialize(
    array(
        Bootstrap::INIT_PARAM_FILESYSTEM_DIR_PATHS => array(
            DirectoryList::THEMES => array('path' => __DIR__ . '/design')
        )
    )
);
$objectManger = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
$objectManger->get('Magento\Framework\App\State')
    ->setAreaCode(\Magento\Framework\View\DesignInterface::DEFAULT_AREA);

/** @var $registration \Magento\Core\Model\Theme\Registration */
$registration = $objectManger->create('Magento\Core\Model\Theme\Registration');
$registration->register('*/*/theme.xml');
