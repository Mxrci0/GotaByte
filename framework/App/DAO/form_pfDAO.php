<?php

namespace App\DAO;

use App\DAO;
use App\Model\form_pfModel;
use PDO;
use PDOException;

class form_pfDAO extends DAO
{
    public function inserir($obj)
    {
        try {

            var_dump($obj);
            exit;
            $sql = "
                INSERT INTO form_pf 
                (nome, cpf, email, tel, password)
                VALUES 
                (:nome, :cpf, :email, :tel, :password)
            ";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindValue(':nome', $obj->__get('nome'));
            $stmt->bindValue(':cpf', $obj->__get('cpf'));
            $stmt->bindValue(':email', $obj->__get('email'));
            $stmt->bindValue(':tel', $obj->__get('tel'));
            $stmt->bindValue(':password', password_hash($obj->__get('password'), PASSWORD_DEFAULT));

            return $stmt->execute();

        } catch (PDOException $e) {
            error_log("Erro ao inserir PF: " . $e->getMessage());
            return false;
        }
    }

    public function excluir($obj)
    {
        // Implementar método de exclusão
    }

    public function alterar($obj)
    {
        // Implementar método de alteração
    }

    public function buscarPorId($obj)
    {
        // Implementar método de busca por ID
    }
    public function listar()
    {
        // Implementar método de listagem
    }
}
