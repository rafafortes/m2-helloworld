<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Test extends Action
{
    protected $_pageFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $this->_redirect('*/*/index');

        /**
         * This is commented out by purpose to show some of the different functions that can be used in a controller
         */

//        $this->_forward('index', 'index', 'helloworld');

//        echo "Hello World";
//        exit;
    }
}
