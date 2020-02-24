<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;

class Edit extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    protected $postRepositoryFactory;
    protected $registry;

    public function __construct(
        Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Rafaf\HelloWorld\Model\PostRepositoryFactory $postRepositoryFactory,
        \Magento\Framework\Registry $registry
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->postRepositoryFactory = $postRepositoryFactory;
        $this->registry = $registry;
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Rafaf_HelloWorld::post');
    }

    /**
     * Initialize page
     *
     * @param $post
     * @return \Magento\Framework\View\Result\Page
     */
    protected function init($post)
    {
        $resultPage = $this->resultPageFactory->create();

        $resultPage->getConfig()->getTitle()->prepend(__('Post'));

        if (method_exists($post, 'getId')) {
            $resultPage->getConfig()->getTitle()->prepend(__('Edit "%1"', $post->getName()));

            $resultPage->addBreadcrumb($post->getId() ? __('Edit Post') : __('New Post'),
                $post->getId() ? __('Edit Post') : __('New Post'));
        } else {
            $resultPage->getConfig()->getTitle()->prepend(__('New Post'));
        }

        $resultPage->setActiveMenu('Rafaf_HelloWorld::post')
            ->addBreadcrumb(__('Post'), __('Post'))
            ->addBreadcrumb(__('Manage Post'), __('Manage Post'));

        return $resultPage;
    }

    /**
     * Edit action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();

        try {
            $post = $this->postRepositoryFactory->create();

            if ($id = $this->getRequest()->getParam('id')) {
                $post = $post->getById($id);
            }

            $this->registry->register('current_post', $post);

            $resultPage = $this->init($post);
        } catch (\Exception $e) {
            $this->messageManager->addExceptionMessage($e, __('Something went wrong: ' . $e->getMessage()));
        }

        return $resultPage;
    }
}
