<?php



spl_autoload_register(function($className){

    $class = "class" . DIRECTORY_SEPARATOR . "$className" . ".php";

    if(file_exists($class)){
        require_once($class);
    }
});

spl_autoload_register(function($className){

    $class = "$className" . ".php";

    if(file_exists($class)){
        require_once($class);
    }
});

function template ($var, $index = "index", $header = "header", $footer = "footer") {

    $config = array (
        "tpl_dir" => "tpl/",
        "cache_dir" => "cache/"
    );
    
    Tpl::configure($config);

    $tpl = new Tpl();

    $tpl->assign("var", $var);

    $tpl->draw($header);
    $tpl->draw($index);
    $tpl->draw($footer);
}











?>