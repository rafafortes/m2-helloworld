<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Block;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class ViewModel implements ArgumentInterface
{
    /**
     * @return string
     */
    public function getSomeThing()
    {
        return "This is a View Model!";
    }
}
