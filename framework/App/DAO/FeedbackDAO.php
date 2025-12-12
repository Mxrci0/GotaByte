<?php

namespace App\DAO;

use App\DAO;
use App\Model\FeedbackModel;
use FW\Controller\FuncoesGlobais;

class FeedbackDAO extends DAO {

    // --- 1. MÉTODO INSERIR (EXISTENTE) ---
    public function inserir($obj) {
        try {   
            $sql = "
            INSERT INTO feedback 
            (fb_nome, fb_email,  fb_mensagem, fb_data)
            VALUES 
            (:fb_nome, :fb_email, :fb_mensagem, :fb_data)";

            $stmt = $this->getConn()->prepare($sql);

            $stmt->bindValue(':fb_nome', $obj->__get('fb_nome'));
            $stmt->bindValue(':fb_email', $obj->__get('fb_email')); 
            $stmt->bindValue(':fb_mensagem', $obj->__get('fb_mensagem'));
            $stmt->bindValue(':fb_data', date('Y-m-d H:i:s'));

            $stmt->execute();
        } catch (\PDOException $ex) {
    echo "<pre>ERRO PDO: " . $ex->getMessage() . "</pre>";
    die();
}
    }

    public function listar(){

    }

    public function atualizar($obj){

    }
    public function excluir($id){

    }

    public function alterar($obj){

    }

    public function buscarPorId($id){

    }

}