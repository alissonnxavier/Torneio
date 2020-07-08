<?php

require_once("vendor/autoload.php");
require_once("vender/autoload.php");
require_once("config.php");
session_start();

use Rain\Tpl;

$app = new \Slim\Slim();

$app->get("/", function(){

    $logado = 0;
    $inscrito =0;
    
     if(isset($_SESSION['id'])){
        $user = new Usuario();
        $result = $user->verificacaoInscricao($_SESSION['id']);

        if($result != 'a'){

            if($result['idjogador'] == $_SESSION['id']) {

                $_SESSION['inscritocv8'] = 2;
            }
    }}
    
    if(isset($_SESSION["logado"])){
        $logado = $_SESSION['logado'];
    }

    if(isset($_SESSION['inscritocv8'])){
        $inscrito = $_SESSION['inscritocv8'];
    }

    $var = array($logado, $inscrito);

    $tpl = new Template($var);

});

$app->get("/sobre", function(){

    template(1, "about");
});

$app->get("/login", function(){
    
    $loginincorreto = 0;
    $cadastroefetuado = 0;
    $efetuelogin = 0;
    if(isset($_SESSION["logado"])){

        header("location: /slim");
        exit;
    }

    if(isset($_SESSION["usuarioincorreto"])){
        
        $loginincorreto = $_SESSION['usuarioincorreto'];
    }

    if(isset($_SESSION["cadastrado"])){

        $cadastroefetuado = $_SESSION['cadastrado'];
    }

    if(isset($_SESSION['loginrequired'])){
        $efetuelogin = $_SESSION['loginrequired'];
    }

    $var = array($cadastroefetuado, $loginincorreto, $efetuelogin);
    if(!isset($_SESSION['logado'])){

        $tpl = new Template($var, "login");
    }
});

$app->get("/cadastro", function(){

    $tpl = new Template(0,"cadastro");
});

$app->post("/cadastrado", function(){

    $usuario = new Usuario();

    $usuario->cadastro($_POST['email'], $_POST['nome'], $_POST['password'], $_POST['tag']);
    
    $_SESSION["cadastrado"] = 10;
    header("location: /slim/login");
    exit;
});

$app->get("/sair", function(){

    session_destroy();
    header("location: /slim");
    exit;
});

$app->post("/logado", function(){

    $usuario = new Usuario();
    $user = $usuario->login($_POST['email']);

    if($_POST['password'] === $user['dessenha']){

        session_unset();
        $_SESSION['logado'] = 5;

        if(isset($_SESSION['logado'])){

            $usuario->setNome($user['usernome']);
            $usuario->setId($user['idusuario']);

            $_SESSION['nome'] = $usuario->getNome();
            $_SESSION['id'] = $usuario->getId();

        }

        header("location: /slim");
        exit;
    } else {

        $_SESSION["usuarioincorreto"] = 5;
        header("location: /slim/login");
        exit;
    }
});

$app->get("/inscrito", function(){

    $user = new Usuario();

    if(isset($_SESSION['logado'])){

        if(isset($_SESSION['id'])){

            $result = $user->verificacaoInscricao($_SESSION['id']);

            if($result != 'a'){

                if($result['idjogador'] == $_SESSION['id']) {

                    $_SESSION['inscritocv8'] = 2;
                    echo " voce ja esta cadastrado";
                    header("location: /slim");
                    exit;
                }

            } else{

                    $user->inscricao($_SESSION['nome'], $_SESSION['id']);
                    $_SESSION['inscritocv8'] = 2;
                    header("location: /slim");
                    exit;
                }
            }
    } else {

        $_SESSION['loginrequired'] = 2;
        header("location: /slim/login");
        exit;
    }
    
});

$app->run();

?>