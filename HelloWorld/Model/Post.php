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
    /**
     * Post Name
     */
    const NAME = 'name';

    /**
     * Post URL Key
     */
    const URL_KEY = 'url_key';

    /**
     * Post Content
     */
    const POST_CONTENT = 'post_content';

    /**
     * Post Tags
     */
    const TAGS = 'tags';

    /**
     * Post Status
     */
    const STATUS = 'status';

    /**
     * Post Featured Image
     */
    const FEATURED_IMAGE = 'featured_image';

    /**
     * Post Created At
     */
    const CREATED_AT = 'created_at';

    /**
     * Post Updated At
     */
    const UPDATED_AT = 'updated_at';

    /**
     *  Post constructor
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\Post::class);
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->_getData(self::NAME);
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->setData(self::NAME, $name);
    }

    /**
     * @return mixed|string
     */
    public function getUrlKey()
    {
        return $this->_getData(self::URL_KEY);
    }

    /**
     * @param string $url_key
     */
    public function setUrlKey($url_key)
    {
        $this->setData(self::URL_KEY, $url_key);
    }

    /**
     * @return mixed|string
     */
    public function getPostContent()
    {
        return $this->_getData(self::POST_CONTENT);
    }

    /**
     * @param string $post_content
     */
    public function setPostContent($post_content)
    {
        $this->setData(self::POST_CONTENT, $post_content);
    }

    /**
     * @return mixed|string
     */
    public function getTags()
    {
        return $this->_getData(self::TAGS);
    }

    /**
     * @param string $tags
     */
    public function setTags($tags)
    {
        $this->setData(self::TAGS, $tags);
    }

    /**
     * @return mixed|string
     */
    public function getStatus()
    {
        return $this->_getData(self::STATUS);
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->setData(self::STATUS, $status);
    }

    /**
     * @return mixed|string
     */
    public function getFeaturedImage()
    {
        return $this->_getData(self::FEATURED_IMAGE);
    }

    /**
     * @param string $featured_image
     */
    public function setFeaturedImage($featured_image)
    {
        $this->setData(self::FEATURED_IMAGE, $featured_image);
    }

    /**
     * @return mixed|string
     */
    public function getCreatedAt()
    {
        return $this->_getData(self::CREATED_AT);
    }

    /**
     * @param string $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->setData(self::CREATED_AT, $created_at);
    }

    /**
     * @return mixed|string
     */
    public function getUpdatedAt()
    {
        return $this->_getData(self::UPDATED_AT);
    }

    /**
     * @param string $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->setData(self::UPDATED_AT, $updated_at);
    }

    /**
     * @return \Magento\Framework\Api\ExtensionAttributesInterface|PostExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @param PostExtensionInterface $extensionAttributes
     */
    public function setExtensionAttributes(PostExtensionInterface $extensionAttributes)
    {
        $this->_setExtensionAttributes($extensionAttributes);
    }
}
