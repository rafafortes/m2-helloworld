<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Model\Post;

use Magento\Store\Model\StoreManagerInterface;
use Magento\Ui\DataProvider\AbstractDataProvider;
use Rafaf\HelloWorld\Model\ResourceModel\Post\CollectionFactory;

class DataProvider extends AbstractDataProvider
{
    protected $collection;
    protected $storeManager;
    protected $loadedData;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $postCollectionFactory,
        StoreManagerInterface $storeManager,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $postCollectionFactory->create();
        $this->storeManager = $storeManager;
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        foreach ($this->collection->getItems() as $item) {
            $this->loadedData[$item->getId()] = $item->getData();
        }

        return $this->loadedData;
    }
}
