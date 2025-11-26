<?php

namespace App\DAO;

use App\DAO;
use App\Model\form_pjModel;
use PDO;
use PDOException;

class form_pjDAO extends DAO
{
    public function inserir(form_pjModel $obj)
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
}
