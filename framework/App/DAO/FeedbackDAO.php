<?php

namespace App\DAO;

use App\DAO;
use App\Model\FeedbackModel;
use FW\Controller\FuncoesGlobais;

class FeedbackDAO extends DAO {

    public function inserir($obj) {
        try {

            $fb_nome     = $obj->__get('fb_nome');
            $fb_email    = $obj->__get('fb_email');
            $fb_rating   = $obj->__get('fb_rating');
            $fb_mensagem = $obj->__get('fb_mensagem');
            $fb_data     = date('Y-m-d H:i:s');

            $sql = "INSERT INTO feedback (
                        fb_nome,
                        fb_email,
                        fb_rating,
                        fb_mensagem,
                        fb_data
                    ) VALUES (
                        :fb_nome,
                        :fb_email,
                        :fb_rating,
                        :fb_mensagem,
                        :fb_data
                    )";

            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':fb_nome', $fb_nome);
            $stmt->bindValue(':fb_email', $fb_email);
            $stmt->bindValue(':fb_rating', $fb_rating);
            $stmt->bindValue(':fb_mensagem', $fb_mensagem);
            $stmt->bindValue(':fb_data', $fb_data);

            $stmt->execute();

        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }

    public function listar() {

        try {

            $feedbacks = array();

            $sql = "SELECT * FROM feedback ORDER BY fb_id DESC";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            foreach ($result as $row) {
                $feedbackModel = new FeedbackModel();

                $global = new FuncoesGlobais();
                $global->popularModel($feedbackModel, $row);

                array_push($feedbacks, $feedbackModel);
            }

            return $feedbacks;

        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }

    public function excluir($id) {}
    public function alterar($obj) {}
    public function buscarPorId($id) {}
}
