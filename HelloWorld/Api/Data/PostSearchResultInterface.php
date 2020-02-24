<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface PostSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return \Rafaf\HelloWorld\Api\Data\PostInterface[]
     */
    public function getItems();

    /**
     * @param \Rafaf\HelloWorld\Api\Data\PostInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}
