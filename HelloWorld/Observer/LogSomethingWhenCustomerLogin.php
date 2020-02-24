<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogSomethingWhenCustomerLogin implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * LogSomethingWhenCustomerLogin constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(
        LoggerInterface $logger
     ) {
        $this->logger = $logger;
    }

    /**
     * @param Observer $observer
     * @return $this|void
     */
    public function execute(Observer $observer)
    {
        $this->logger->info("Customer Login!");

        return $this;
    }
}
