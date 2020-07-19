<?php

class Torneio {


    

    public function validaInscricao ($id, $nome) {

       

        $sql = new Sql ();
        $sql->query("INSERT INTO tb_jogadores (idjogador, nomedojogador) VALUES (:ID, :NOME)", array(
            ":ID"=>$id,
            ":NOME"=>$nome
        ));
    }

    public function criaTorneio ($cv, $data, $hora){

        $sql = new Sql();
        $sql->query("INSERT INTO tb_torneio (niveldocv, data, hora) VALUES (:CV, :DATA, :HORA)", array(
            ":CV"=>$cv,
            ":DATA"=>$data,
            ":HORA"=>$hora  
        ));
    }

    public function buscaTorneio () {

        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_torneio");

        if(count($result) > 0){
            return $result;
        }else {
            return 'a';
        }
    }

    public function deletaTorneio ($id) {

        $sql = new Sql();
        $sql->query("DELETE FROM tb_torneio WHERE idtorneio = :ID", array(
            ":ID"=>$id
        ));
    }
    
    public function dataTorneio () {

        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_torneio");

        return $result;
    }












}

?>