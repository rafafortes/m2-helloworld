<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Cron;

class ExampleCron
{
    /**
     * @return $this
     */
    public function execute()
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/cron.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info(__METHOD__);

        return $this;
    }
}
