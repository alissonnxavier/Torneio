<?php

class Usuario {

    private $id;
    private $email;
    private $senha;
    private $tag;
    private $cv;
    private $data;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getTag(){
        return $this->tag;
    }

    public function setTag($tag){
        $this->tag = $tag;
    }
    public function getCv(){
        return $this->cv;
    }

    public function setCv($cv){
        $this->cv = $cv;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function cadastro ($email, $nome, $senha, $tag, $cv){

        $sql = new Sql();
        $sql->query("INSERT INTO tb_usuarios (deslogin, dessenha, tag, usernome, cv) VALUES (:EMAIL, :SENHA, :TAG, :NOME, :CV)", array(
            ":EMAIL"=>$email,
            ":SENHA"=>$senha,
            ":TAG"=>$tag,
            ":NOME"=>$nome,
            ":CV"=>$cv
        )); 
    }

    public function login ($email, $password){
    
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :EMAIL", array(
            ":EMAIL"=>$email
        ));

        $user = 0;

        
        
        if(isset($result[0])) {

            

            $user = $result[0];

            if($result[0]['dessenha'] === $password){

                session_unset();
                $_SESSION['logado'] = 5;
        
                $this->setNome($user['usernome']);
                $this->setId($user['idusuario']);
                $this->setCv($user['cv']);
                $this->setData($user['dtcadastro']);
        
                $_SESSION['nome'] = $this->getNome();
                $_SESSION['id'] = $this->getId();
                $_SESSION['cv'] = $this->getCv();
                $_SESSION['datatorneio'] = $this->getData();
        
                header("location: /slim");
                exit;
     
            } else {
    
                $_SESSION["usuarioincorreto"] = 5;
                header("location: /slim/login");
                exit;
            }
        } 
    }

    public function inscricao ($nome, $id, $idtorneio){

        $sql = new Sql();
        $sql->query("INSERT INTO tb_jogador (idjogador, nomedojogador, idtorneio) VALUES (:ID, :NOME, :IDTORNEIO)", array(
            ":ID"=>$id,
            ":NOME"=>$nome,
            ":IDTORNEIO"=>$idtorneio
        ));

        header("location: /slim");
        exit;
    }

    public function verificacaoInscricao ($id) {

        $sql = new Sql();
        $resultado = $sql->select("SELECT * FROM tb_jogador WHERE idjogador = :ID", array(
            ":ID"=>$id
        ));

            if($resultado == null) {
                return 'a';
            }else{

            return $resultado[0];
            }
    }

    public function verificaquantidade (){

        $sql = new Sql ();
        $result = $sql->select("SELECT * FROM tb_jogador");

        if($result > 0 ){
            return count($result);
        }else {
            return 'a';
        }
        
    }

    public function jogadoresoitavas (){

        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_jogador");

        if(count($result) > 7) {
            return $result;
        }else {
            $a = $sql->select("SELECT * FROM tb_suporte_oitavas");

            return $a;
        }
    }
























}

?>