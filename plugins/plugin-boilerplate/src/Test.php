<?php

namespace Wp\PluginBoilerplate;

class Test
{

    public function init()
    {
        add_action('init', function(){
           echo "<h1>test class being triggered</h1>";
        });
    }

}