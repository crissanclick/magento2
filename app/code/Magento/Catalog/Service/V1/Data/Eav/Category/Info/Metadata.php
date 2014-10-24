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
namespace Magento\Catalog\Service\V1\Data\Eav\Category\Info;

use Magento\Framework\Service\Data\AbstractExtensibleObject;

/**
 * Class Metadata
 * @codeCoverageIgnore
 */
class Metadata extends AbstractExtensibleObject
{
    const ID = 'category_id';

    const POSITION = 'position';

    const LEVEL = 'level';

    const PARENT_ID = 'parent_id';

    const CHILDREN = 'children';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    const NAME = 'name';

    const URL_KEY = 'url_key';

    const PATH = 'path';

    const DISPLAY_MODE = 'display_mode';

    const AVAILABLE_SORT_BY = 'available_sort_by';

    const INCLUDE_IN_MENU = 'include_in_menu';

    const ACTIVE = 'active';

    /**
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->_get(self::ID);
    }

    /**
     * @return int|null
     */
    public function getPosition()
    {
        return $this->_get(self::POSITION);
    }

    /**
     * @return int|null
     */
    public function getLevel()
    {
        return $this->_get(self::LEVEL);
    }

    /**
     * @return int|null
     */
    public function getParentId()
    {
        return $this->_get(self::PARENT_ID);
    }

    /**
     * @return int[]|null
     */
    public function getChildren()
    {
        return $this->_get(self::CHILDREN);
    }

    /**
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->_get(self::CREATED_AT);
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->_get(self::UPDATED_AT);
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->_get(self::NAME);
    }

    /**
     * @return string|null
     */
    public function getUrlKey()
    {
        return $this->_get(self::URL_KEY);
    }

    /**
     * @return string|null
     */
    public function getPath()
    {
        return $this->_get(self::PATH);
    }

    /**
     * @return string|null
     */
    public function getDisplayMode()
    {
        return $this->_get(self::DISPLAY_MODE);
    }

    /**
     * @return string[]|null
     */
    public function getAvailableSortBy()
    {
        return $this->_get(self::AVAILABLE_SORT_BY);
    }

    /**
     * @return bool|null
     */
    public function isIncludeInMenu()
    {
        return (bool)$this->_get(self::INCLUDE_IN_MENU);
    }

    /**
     * @return bool|null
     */
    public function isActive()
    {
        return (bool)$this->_get(self::ACTIVE);
    }
}
