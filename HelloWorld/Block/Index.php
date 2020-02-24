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
    const DISABLED_MSG = 'The module is disabled, sorry about that =/';

    protected $helper;

    public function __construct(
        Context $context,
        Data $helper)
    {
        $this->helper = $helper;
        return parent::__construct($context);
    }

    public function getDisplayText()
    {
        if($this->helper->getGeneralConfig('enable'))
        {
            return $this->helper->getGeneralConfig('display_text');
        }

        return self::DISABLED_MSG;
    }
}
