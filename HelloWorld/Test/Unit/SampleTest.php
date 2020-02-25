<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Test\Unit;

use Rafaf\HelloWorld\Block\ViewModel;

class SampleTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Rafaf\HelloWorld\Block\ViewModel
     */
    protected $viewModelClass;

    /**
     * @var string
     */
    protected $expectedMessage;

    public function setUp()
    {
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->viewModelClass = $objectManager->getObject('Rafaf\HelloWorld\Block\ViewModel');
        $this->expectedMessage = 'This is a View Model!';
    }

    public function testGetSomeThing()
    {
        $this->assertEquals($this->expectedMessage, $this->viewModelClass->getSomeThing());
    }
}
