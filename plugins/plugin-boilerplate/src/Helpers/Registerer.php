<?php

namespace Wp\PluginBoilerplate\Helpers;

class Registerer
{

    public static function register(object $class)
    {
        return $class->init();
    }

}