<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     *  Collection constructor
     */
    protected function _construct()
    {
        $this->_init('Rafaf\HelloWorld\Model\Post', 'Rafaf\HelloWorld\Model\ResourceModel\Post');
    }
}
