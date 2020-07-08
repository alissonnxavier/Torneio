<?php

use Rain\Tpl;

class Template extends Tpl {

    

    public function __construct($var = 0, $body = "index", $header = "header", $footer = "footer"){

        $config = array (
            "tpl_dir" => "tpl/",
            "cache_dir" => "cache/"
        );

        Tpl::configure($config);

        $tpl = new Tpl();
        
        $tpl->assign("var", $var);

        $tpl->draw("$header");
        $tpl->draw("$body");
        $tpl->draw("$footer");
        

    }

    



}












?>