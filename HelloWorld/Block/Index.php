<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Block;

class Index extends \Magento\Framework\View\Element\Template
{
    const DISABLED_MSG = 'The module is disabled, sorry about that =/';

    protected $helper;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Rafaf\HelloWorld\Helper\Data $helper)
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
