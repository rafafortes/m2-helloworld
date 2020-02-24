<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Controller\Adminhtml\Post;

use Magento\Framework\Controller\ResultFactory;

class MassDelete extends \Magento\Backend\App\Action
{
    protected $filter;
    protected $collectionFactory;
    protected $postRepositoryFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Ui\Component\MassAction\Filter $filter,
        \Rafaf\HelloWorld\Model\ResourceModel\Post\CollectionFactory $collectionFactory,
        \Rafaf\HelloWorld\Model\PostRepositoryFactory $postRepositoryFactory
    ) {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->postRepositoryFactory = $postRepositoryFactory;
        parent::__construct($context);
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Redstage_HelloWorld::post');
    }

    /**
     * Mass delete action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     * @throws \Magento\Framework\Exception\LocalizedException|\Exception
     */
    public function execute()
    {
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        try {
            $collection = $this->filter->getCollection($this->collectionFactory->create());

            $collectionSize = $collection->getSize();

            foreach ($collection as $post) {
                $this->postRepositoryFactory->create()->delete($post);
            }

            $this->messageManager->addSuccessMessage(__('A total of %1 record(s) have been deleted.', $collectionSize));

        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Something wrong deleting items'));
        }

        return $resultRedirect->setPath('*/*/');
    }
}
