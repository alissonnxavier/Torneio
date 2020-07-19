<?php

require_once("funcoestpl.php");
require_once("vendor/autoload.php");
require_once("vender/autoload.php");
require_once("config.php");
session_start();
date_default_timezone_set("America/Sao_Paulo");

use Rain\Tpl;

$app = new \Slim\Slim();

$app->get("/", function(){

    $data = new DateTime();
    $hoje = $data->format("d/m/y");
    $logado = 0;
    $inscrito =0;
    $count = 0;
    $jogadoresoitavas = array();
    $user = new Usuario();
    $tor = new Torneio();
    $torneio = $tor->buscaTorneio();

    if($user->verificaquantidade() > 7){

        $count = 2;
    }
    
     if(isset($_SESSION['id'])){
        
        $result = $user->verificacaoInscricao($_SESSION['id']);

        if($result != 'a'){

            if($result['idjogador'] == $_SESSION['id']) {

                $_SESSION['idtorneio'] = $result['idtorneio'];
            }
    }}
    
    if(isset($_SESSION["logado"])){
        $logado = $_SESSION['logado'];
    }

    if(isset($_SESSION['idtorneio'])){
        $inscrito = $_SESSION['idtorneio'];
    }

    $qtd = $user->verificaquantidade();

    $jogadoresoitavas = $user->jogadoresoitavas();

    $var = array($logado, $inscrito, $jogadoresoitavas, $count, $torneio, $hoje);

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

    $usuario->cadastro($_POST['email'], $_POST['nome'], $_POST['password'], $_POST['tag'], $_POST['cv']);
    session_unset();
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
    $user = $usuario->login($_POST['email'], $_POST['password']);

});

$app->post("/inscrito", function(){

    $user = new Usuario();

    $quantidade = $user->verificaquantidade();
    
    $cv = $_POST['cv'];

    if(isset($_SESSION['logado'])){

        if(isset($_SESSION['id'])){

            $result = $user->verificacaoInscricao($_SESSION['id']);

            if($result != 'a'){

                if($result['idjogador'] == $_SESSION['id']) {

                    header("location: /slim");
                    exit;
                }

            } else{
                    if($quantidade < 8 && $cv == $_SESSION['cv']){
                        $user->inscricao($_SESSION['nome'], $_SESSION['id'], $_POST['idtorneio']);
                        $_SESSION['idtorneio'] = $_POST['idtorneio'];
                        header("location: /slim");
                        exit;
                    } else {
                        header("location: /slim");
                        exit;
                    }
                }
            }
    } else {

        $_SESSION['loginrequired'] = 2;
        header("location: /slim/login");
        exit;
    }
    
});

$app->get("/adicionar-torneio", function(){

    $tor = new Torneio();
    $var = $tor->buscaTorneio();
    
    
    $tpl = new Template($var, "adicionartorneio");
   
});

$app->post("/criatorneio", function(){

    $torneio = new Torneio();
    $torneio->criatorneio($_POST['cv'], $_POST['data'], $_POST['hora']);
    
    header("location: /slim/adicionar-torneio");
    exit;
});

$app->post("/deleta-torneio", function(){

    $torneio = new Torneio();
    $torneio->deletaTorneio($_POST['id']);
    header("location: /slim/adicionar-torneio");
    exit;
});

$app->run();

?>