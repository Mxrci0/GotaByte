<?php

namespace App\DAO;

use App\DAO;
use App\Model\form_pessoafisicaModel;
use PDO;
use PDOException;

class Form_PessoaFisicaDAO extends DAO
{
    public function inserir($obj)
    {
        try {

            $sql = "
                INSERT INTO form_pessoafisica
                ( name, cpf, email, tel, senha)
                VALUES 
                (:name, :cpf, :email, :tel, :senha)
            ";

            $stmt = $this->getConn()->prepare($sql);

            $stmt->bindValue(':name', $obj->__get('name'));
            $stmt->bindValue(':cpf', $obj->__get('cpf'));
            $stmt->bindValue(':email', $obj->__get('email'));
            $stmt->bindValue(':tel', $obj->__get('tel'));
            $stmt->bindValue(':senha', password_hash($obj->__get('senha'), PASSWORD_DEFAULT));

            $stmt->execute();

        } catch (PDOException $e) {
            error_log("Erro ao inserir PF: " . $e->getMessage());
        }
    }


    public function alterar($obj)
    {
        try {
            $sql = "UPDATE form_pessoafisica SET name = :name, cpf = :cpf, email = :email, tel = :tel, senha = :senha WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $obj->__get('id'));
            $stmt->bindValue(':name', $obj->__get('name '));
            $stmt->bindValue(':cpf', $obj->__get('cpf'));
            $stmt->bindValue(':email', $obj->__get('email'));
            $stmt->bindValue(':tel', $obj->__get('tel'));
            $stmt->bindValue(':senha', password_hash($obj->__get('senha'), PASSWORD_DEFAULT));
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Erro ao alterar PF: " . $e->getMessage());
            return false;
        }
    }

    public function buscarPorId($id)
    {
        try {
            $sql = "SELECT * FROM form_pessoafisica WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erro ao buscar PF: " . $e->getMessage());
            return false;
        }
    }

    public function listar()
    {
        try {
            $sql = "SELECT * FROM form_pessoafisica";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erro ao listar PF: " . $e->getMessage());
            return false;
        }
    }

    public function excluir($id)
    {
        try {
            $sql = "DELETE FROM form_pessoafisica WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Erro ao excluir PF: " . $e->getMessage());
            return false;
        }
    }
}
