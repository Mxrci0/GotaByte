<?php

namespace App\DAO;

use App\DAO;
use App\Model\form_pjModel;
use PDO;
use PDOException;

class form_pjDAO extends DAO{
    public function inserir($obj)
    {
        try {
            $sql = "
                INSERT INTO form_pj 
                (name, razao, cpf, email, tel, password)
                VALUES 
                (:name, :razao, :cpf, :email, :tel, :password)
            ";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindValue(':name', $obj->__get('name'));
            $stmt->bindValue(':razao', $obj->__get('razao'));
            $stmt->bindValue(':cpf', $obj->__get('cpf'));
            $stmt->bindValue(':email', $obj->__get('email'));
            $stmt->bindValue(':tel', $obj->__get('tel'));
            $stmt->bindValue(':password', password_hash($obj->__get('password'), PASSWORD_DEFAULT));

            return $stmt->execute();

        } catch (PDOException $e) {
            error_log("Erro ao inserir PJ: " . $e->getMessage());
            return false;
        }
    }

    public function listar()
    {
        try {
            $sql = "SELECT * FROM form_pj";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erro ao listar PJ: " . $e->getMessage());
            return false;
        }
    }

    public function buscarPorId($id)
    {
        try {
            $sql = "SELECT * FROM form_pj WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erro ao buscar PJ: " . $e->getMessage());
            return false;
        }
    }

    public function alterar($obj)
    {
        try {
            $sql = "UPDATE form_pj SET name = :name, razao = :razao, cpf = :cpf, email = :email, tel = :tel WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $obj->__get('id'));
            $stmt->bindValue(':name', $obj->__get('name'));
            $stmt->bindValue(':razao', $obj->__get('razao'));
            $stmt->bindValue(':cpf', $obj->__get('cpf'));
            $stmt->bindValue(':email', $obj->__get('email'));
            $stmt->bindValue(':tel', $obj->__get('tel'));
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Erro ao alterar PJ: " . $e->getMessage());
            return false;
        }
    }

    public function excluir($id)
    {
        try {
            $sql = "DELETE FROM form_pj WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Erro ao excluir PJ: " . $e->getMessage());
            return false;
        }
    }
}
