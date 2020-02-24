<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Controller\Adminhtml\Post;

class Save extends \Magento\Backend\App\Action
{
    protected $scopeConfig;
    protected $postRepositoryFactory;
    protected $postFactory;
    protected $searchCriteriaFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Rafaf\HelloWorld\Model\PostFactory $postFactory,
        \Rafaf\HelloWorld\Model\PostRepositoryFactory $postRepositoryFactory
    ) {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
        $this->postFactory = $postFactory;
        $this->postRepositoryFactory = $postRepositoryFactory;
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Rafaf_HelloWorld::post');
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create()->setPath('*/*/');

        if ($data = $this->getRequest()->getPostValue()) {
            try {
                $post = $this->postFactory->create();

                if ($id = $this->getRequest()->getParam('id')) {
                    $post = $this->postRepositoryFactory->create()->getById($id);
                }

                $post->setName($data['name']);
                $post->setUrlKey($data['url_key']);
                $post->setPostContent($data['post_content']);
                $post->setTags($data['tags']);
                $post->setStatus($data['status']);
                $post->setFeaturedImage($data['featured_image']);

                $this->postRepositoryFactory->create()->save($post);
                $this->messageManager->addSuccessMessage(__('Post Saved successfully'));

                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['id' => $post->getId()]);
                }

                return $resultRedirect->setPath('*/*/');

            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e,
                    __('Something went wrong while saving the post.' . $e->getMessage()));
            }

            return $resultRedirect->setPath('*/*/edit', ['entity_id' => $this->getRequest()->getParam('entity_id')]);
        }

        return $resultRedirect;
    }
}
