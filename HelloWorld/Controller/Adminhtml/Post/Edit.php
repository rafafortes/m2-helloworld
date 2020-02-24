<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Controller\Adminhtml\Post;

use Exception;
use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Rafaf\HelloWorld\Model\PostRepositoryFactory;

class Edit extends Action
{
    protected $resultPageFactory;
    protected $postRepositoryFactory;
    protected $registry;

    public function __construct(
        Action\Context $context,
        PageFactory $resultPageFactory,
        PostRepositoryFactory $postRepositoryFactory,
        Registry $registry
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
     * @return Page
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
     * @return ResultInterface
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
        } catch (Exception $e) {
            $this->messageManager->addExceptionMessage($e, __('Something went wrong: ' . $e->getMessage()));
        }

        return $resultPage;
    }
}
