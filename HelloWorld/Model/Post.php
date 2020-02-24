<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Rafaf\HelloWorld\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use Rafaf\HelloWorld\Api\Data\PostExtensionInterface;
use Rafaf\HelloWorld\Api\Data\PostInterface;

class Post extends AbstractExtensibleModel implements PostInterface
{
    const NAME              = 'name';
    const URL_KEY           = 'url_key';
    const POST_CONTENT      = 'post_content';
    const TAGS              = 'tags';
    const STATUS            = 'status';
    const FEATURED_IMAGE    = 'featured_image';
    const CREATED_AT        = 'created_at';
    const UPDATED_AT        = 'updated_at';

    protected function _construct()
    {
        $this->_init(ResourceModel\Post::class);
    }

    public function getName()
    {
        return $this->_getData(self::NAME);
    }

    public function setName($name)
    {
        $this->setData(self::NAME, $name);
    }

    public function getUrlKey()
    {
        return $this->_getData(self::URL_KEY);
    }

    public function setUrlKey($url_key)
    {
        $this->setData(self::URL_KEY, $url_key);
    }

    public function getPostContent()
    {
        return $this->_getData(self::POST_CONTENT);
    }

    public function setPostContent($post_content)
    {
        $this->setData(self::POST_CONTENT, $post_content);
    }

    public function getTags()
    {
        return $this->_getData(self::TAGS);
    }

    public function setTags($tags)
    {
        $this->setData(self::TAGS, $tags);
    }

    public function getStatus()
    {
        return $this->_getData(self::STATUS);
    }

    public function setStatus($status)
    {
        $this->setData(self::STATUS, $status);
    }

    public function getFeaturedImage()
    {
        return $this->_getData(self::FEATURED_IMAGE);
    }

    public function setFeaturedImage($featured_image)
    {
        $this->setData(self::FEATURED_IMAGE, $featured_image);
    }

    public function getCreatedAt()
    {
        return $this->_getData(self::CREATED_AT);
    }

    public function setCreatedAt($created_at)
    {
        $this->setData(self::CREATED_AT, $created_at);
    }

    public function getUpdatedAt()
    {
        return $this->_getData(self::UPDATED_AT);
    }

    public function setUpdatedAt($updated_at)
    {
        $this->setData(self::UPDATED_AT, $updated_at);
    }
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    public function setExtensionAttributes(PostExtensionInterface $extensionAttributes)
    {
        $this->_setExtensionAttributes($extensionAttributes);
    }
}
