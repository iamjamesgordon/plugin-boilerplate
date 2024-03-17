<?php

namespace Wp\PluginBoilerplate;

use Wp\PluginBoilerplate\Helpers\Initialiser;

class Test implements Initialiser
{
    public function init()
    {
        add_action('init', function () {
            echo "<h1>test class being triggered</h1>";
        });
    }

}
