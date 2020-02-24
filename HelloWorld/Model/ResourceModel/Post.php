<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Rafaf\HelloWorld\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init('rafaf_helloworld_post','id');
    }
}
