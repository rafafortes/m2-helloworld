<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;
use Magento\Customer\Model\Session;

class Data extends AbstractHelper
{
    /**
     * XML Path to HelloWorld
     */
    const XML_PATH_HELLOWORLD = 'helloworld/';

    /**
     * @var Session
     */
    private $customerSesion;

    /**
     * Data constructor.
     * @param Context $context
     */
    public function __construct(
        Context $context,
        Session $customerSesion)
    {
        $this->scopeConfig = $context->getScopeConfig();
        $this->customerSesion = $customerSesion;

        parent::__construct($context);
    }

    /**
     * @param $field
     * @param null $storeId
     * @return mixed
     */
    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    /**
     * @param $code
     * @param null $storeId
     * @return mixed
     */
    public function getGeneralConfig($code, $storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_HELLOWORLD .'general/'. $code, $storeId);
    }

    /**
     * @return bool|int|null
     */
    public function someMethod()
    {
        $sth = false;

        if (!$sth) {
            // customerSession won't be initialized, the code is optimized
            return $sth;
        }

        return $this->customerSesion->getCustomerId();
    }
}
