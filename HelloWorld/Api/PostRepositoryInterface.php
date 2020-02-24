<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Rafaf\HelloWorld\Api\Data\PostInterface;

interface PostRepositoryInterface
{
    /**
     * @param int $id
     * @return \Rafaf\HelloWorld\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($id);

    /**
     * @param \Rafaf\HelloWorld\Api\Data\PostInterface $post
     * @return \Rafaf\HelloWorld\Api\Data\PostInterface
     */
    public function save(PostInterface $post);

    /**
     * @param \Rafaf\HelloWorld\Api\Data\PostInterface $post
     * @return void
     */
    public function delete(PostInterface $post);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Rafaf\HelloWorld\Api\Data\PostSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}
