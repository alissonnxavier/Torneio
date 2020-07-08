<?php

class Usuario {

    private $id;
    private $email;
    private $senha;
    private $tag;

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

    public function cadastro ($email, $nome, $senha, $tag){

        $sql = new Sql();
        $sql->query("INSERT INTO tb_usuarios (deslogin, dessenha, tag, usernome) VALUES (:EMAIL, :SENHA, :TAG, :NOME)", array(
            ":EMAIL"=>$email,
            ":SENHA"=>$senha,
            ":TAG"=>$tag,
            ":NOME"=>$nome
        )); 
    }

    public function login ($email){
    
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :EMAIL", array(
            ":EMAIL"=>$email
        ));

        return $result[0];
    }

    public function inscricao ($nome, $id){

        $sql = new Sql();
        $sql->query("INSERT INTO tb_jogador (idjogador, nomedojogador) VALUES (:ID, :NOME)", array(
            ":ID"=>$id,
            ":NOME"=>$nome
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
























}

?>