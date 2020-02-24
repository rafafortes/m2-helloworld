<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Rafaf\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Rafaf\HelloWorld\Helper\Data;

class Index extends Action
{
    protected $_pageFactory;
    protected $helper;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        Data $helper)
    {
        $this->_pageFactory = $pageFactory;
        $this->helper       = $helper;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
