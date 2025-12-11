<?php

namespace App\DAO;

use App\DAO;
use App\Model\FeedbackModel;
use FW\Controller\FuncoesGlobais;

class FeedbackDAO extends DAO {

    // --- 1. MÉTODO INSERIR (EXISTENTE) ---
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
            // Em caso de erro, redireciona
            header('Location:/error103');
            die();
        }
    }

    // --- 2. MÉTODO LISTAR (EXISTENTE) ---
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

    // --- 3. MÉTODO EXCLUIR (IMPLEMENTADO) ---
    // Usado pela rota: /feedback/excluir/{id}
    public function excluir($id) {
        try {
            // A coluna que armazena o ID do feedback é 'fb_id'
            $sql = "DELETE FROM feedback WHERE fb_id = :id";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }

    // --- 4. MÉTODO BUSCAR POR ID (IMPLEMENTADO) ---
    // Usado pela rota: /feedback/consultar/{id}
    public function buscarPorId($id) {
        try {
            $sql = "SELECT * FROM feedback WHERE fb_id = :id";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            
            $row = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($row) {
                $feedbackModel = new FeedbackModel();
                $global = new FuncoesGlobais();
                $global->popularModel($feedbackModel, $row);
                return $feedbackModel;
            } else {
                return null; // Retorna null se não encontrar o feedback
            }

        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }

    // --- 5. MÉTODO ALTERAR (IMPLEMENTADO) ---
    // Se você implementar a funcionalidade de edição no Controller
    public function alterar($obj) {
        try {
            $fb_id       = $obj->__get('fb_id');
            $fb_nome     = $obj->__get('fb_nome');
            $fb_email    = $obj->__get('fb_email');
            $fb_rating   = $obj->__get('fb_rating');
            $fb_mensagem = $obj->__get('fb_mensagem');
            
            // Não atualizamos o fb_data, pois é a data de criação,
            // mas você pode adicionar um campo 'updated_at' na tabela se necessário.

            $sql = "UPDATE feedback SET
                        fb_nome = :fb_nome,
                        fb_email = :fb_email,
                        fb_rating = :fb_rating,
                        fb_mensagem = :fb_mensagem
                    WHERE fb_id = :fb_id";

            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':fb_nome', $fb_nome);
            $stmt->bindValue(':fb_email', $fb_email);
            $stmt->bindValue(':fb_rating', $fb_rating);
            $stmt->bindValue(':fb_mensagem', $fb_mensagem);
            $stmt->bindValue(':fb_id', $fb_id);

            $stmt->execute();

        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }
}