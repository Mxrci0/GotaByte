<?php

namespace App\DAO;

use App\DAO;
use App\Model\FeedbackModel;
use FW\Controller\FuncoesGlobais;

class FeedbackDAO extends DAO
{

    // --- 1. MÉTODO INSERIR (EXISTENTE) ---
    public function inserir($obj)
    {
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

    public function listar()
    {
        try {
            $feedList = array();
            $sql = "SELECT * FROM feedback";

            $stmt = $this->getConn()->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            foreach ($results as $row) {
                $feed = new FeedbackModel();
                $feed->__set('fb_id', $row['fb_id']);
                $feed->__set('fb_nome', $row['fb_nome']);
                $feed->__set('fb_email', $row['fb_email']);
                $feed->__set('fb_mensagem', $row['fb_mensagem']);
                $feed->__set('fb_data', $row['fb_data']);

                array_push($feedList, $feed);
            }
            return $feedList;
        } catch (\PDOException $ex) {
            error_log('location: /error103');
            die();
        }
    }


    public function excluir($fb_id)
    {

        try {
            $sql = "DELETE FROM feedback WHERE fb_id = :fb_id";

            $stmt = $this->getConn()->prepare($sql);
            
            $stmt->bindValue(':fb_id', $fb_id);
            $stmt->execute();
        } catch (\PDOException $ex) {
            error_log('location: /error104');
            die();
        }
    }

    public function alterar($obj)
    {
        try {
            $sql = "UPDATE feedback SET 
            fb_nome = :fb_nome,
            fb_email = :fb_email,
            fb_mensagem = :fb_mensagem
            WHERE fb_id = :fb_id";

            $stmt = $this->getConn()->prepare($sql);

            $stmt->bindValue(':fb_nome', $obj->__get('fb_nome'));
            $stmt->bindValue(':fb_email', $obj->__get('fb_email'));
            $stmt->bindValue(':fb_mensagem', $obj->__get('fb_mensagem'));
            $stmt->bindValue(':fb_id', $obj->__get('fb_id'));

            $stmt->execute();
        } catch (\PDOException $ex) {
            error_log('location: /error106');
            die();
        }
    }

    public function buscarPorId($fb_id)
    {
        try {
            $sql = "SELECT * FROM feedback WHERE fb_id = :fb_id";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':fb_id', $fb_id);
            $stmt->execute();
            $results = $stmt->fetch(\PDO::FETCH_ASSOC);
            if ($results > 0) {

                $feed = new FeedbackModel();
                $feed->__set('fb_id', $results['fb_id']);
                $feed->__set('fb_nome', $results['fb_nome']);
                $feed->__set('fb_email', $results['fb_email']);
                $feed->__set('fb_mensagem', $results['fb_mensagem']);
                $feed->__set('fb_data', $results['fb_data']);

                return $feed;
            } else {
                return null;
            }
        } catch (\PDOException $ex) {
            error_log('location: /error105');
            die();
        }
    }
}
