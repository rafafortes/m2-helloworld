<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Plugin;

use Rafaf\HelloWorld\Model\Post;

class ExamplePlugin
{
    public function beforeSetName(Post $subject, $name)
    {
        $name = "Something before the name: ". $name;

        return [$name];
    }

    public function afterGetName(Post $subject, $result)
    {
        return $result . ": Something after the name";
    }
}
