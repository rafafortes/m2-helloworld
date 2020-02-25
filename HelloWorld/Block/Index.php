<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Rafaf\HelloWorld\Helper\Data;

class Index extends Template
{
    /**
     *  Disabled message
     */
    const DISABLED_MSG = 'The module is disabled, sorry about that =/';

    /**
     * @var Data
     */
    protected $helper;

    /**
     * Index constructor.
     * @param Context $context
     * @param Data $helper
     */
    public function __construct(
        Context $context,
        Data $helper)
    {
        $this->helper = $helper;
        return parent::__construct($context);
    }

    /**
     * @return mixed|string
     */
    public function getDisplayText()
    {
        $customerId = $this->helper->someMethod();

        if($customerId) {
            return 'The customer ID is: '.$customerId;
        }

        if($this->helper->getGeneralConfig('enable'))
        {
            return $this->helper->getGeneralConfig('display_text');
        }

        return self::DISABLED_MSG;
    }
}
