<?php

namespace Unity\Framework;

use Unity\Component\Container\ContainerManager;

class AppManager extends ContainerManager
{
    public static function make()
    {
        return (new parent())->build();
    }
}