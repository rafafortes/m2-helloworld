<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface PostInterface extends ExtensibleDataInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return void
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return void
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getUrlKey();

    /**
     * @param string $url_key
     * @return void
     */
    public function setUrlKey($url_key);

    /**
     * @return string
     */
    public function getPostContent();

    /**
     * @param string $post_content
     * @return void
     */
    public function setPostContent($post_content);

    /**
     * @return string
     */
    public function getTags();

    /**
     * @param string $tags
     * @return void
     */
    public function setTags($tags);

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @param string $status
     * @return void
     */
    public function setStatus($status);

    /**
     * @return string
     */
    public function getFeaturedImage();

    /**
     * @param string $featured_image
     * @return void
     */
    public function setFeaturedImage($featured_image);

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @param string $created_at
     * @return void
     */
    public function setCreatedAt($created_at);

    /**
     * @return string
     */
    public function getUpdatedAt();

    /**
     * @param string $updated_at
     * @return void
     */
    public function setUpdatedAt($updated_at);

    /**
     * @return \Rafaf\HelloWorld\Api\Data\PostExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * @param \Rafaf\HelloWorld\Api\Data\PostExtensionInterface $extensionAttributes
     * @return void
     */
    public function setExtensionAttributes(PostExtensionInterface $extensionAttributes);
}
