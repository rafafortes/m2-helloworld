<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Block\Adminhtml\Post;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;

class GenericButton
{
    protected $context;
    protected $registry;

    public function __construct(
        Context $context,
        Registry $registry
    ) {
        $this->context = $context;
        $this->registry = $registry;
    }

    /**
     * Return post id
     *
     * @return int|null
     */
    public function getPostId()
    {
        $post = $this->registry->registry('current_post');

        if (method_exists($post, 'getId')) {
            return $post->getId();
        }

        return null;
    }

    /**
     * Generate url by route and parameters
     *
     * @param   string $route
     * @param   array $params
     * @return  string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
