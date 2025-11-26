<?php

namespace App\DAO;

use App\DAO;
use App\Model\form_pfModel;
use PDO;
use PDOException;

class form_pfDAO extends DAO
{
    public function inserir(form_pfModel $obj)
    {
        try {
            $sql = "
                INSERT INTO form_pf 
                (usu_nome, cpf, email, tel, password)
                VALUES 
                (:usu_nome, :cpf, :email, :tel, :password)
            ";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindValue(':usu_nome', $obj->__get('usu_nome'));
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
}
