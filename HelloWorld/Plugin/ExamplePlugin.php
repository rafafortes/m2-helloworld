<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Plugin;

class ExamplePlugin
{
    public function beforeSetName(\Rafaf\HelloWorld\Model\Post $subject, $name)
    {
        $name = "Something before the name: ". $name;

        return [$name];
    }

    public function afterGetName(\Rafaf\HelloWorld\Model\Post $subject, $result)
    {
        return $result . ": Something after the name";
    }
}
