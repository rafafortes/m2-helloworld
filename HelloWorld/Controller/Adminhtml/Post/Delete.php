<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;

class Delete extends \Magento\Backend\App\Action
{
    protected $postRepositoryFactory;

    public function __construct(
        Action\Context $context,
        \Rafaf\HelloWorld\Model\PostRepositoryFactory $postRepositoryFactory
    ) {
        parent::__construct($context);
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
     * Delete action
     *
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');

        $resultRedirect = $this->resultRedirectFactory->create();

        if (!empty($id)) {

            try {
                $post = $this->postRepositoryFactory->create()->getById($id);

                $this->postRepositoryFactory->create()->delete($post);

                $this->messageManager->addSuccessMessage(__('The post has been deleted.'));

                return $resultRedirect->setPath('*/*/');

            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());

                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }

        $this->messageManager->addErrorMessage(__('We can\'t find a post to delete.'));

        return $resultRedirect->setPath('*/*/');
    }
}
