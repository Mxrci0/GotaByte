<?php

namespace App\DAO;

use App\Model\UserModel;
use App\DAO;
use PDO;
use PDOException;

class UserDAO extends DAO
{
    public function inserir($obj)
    {
        try {
            $sql = "
            INSERT INTO usuarios
             (usu_email, usu_password, usu_data) 
            VALUES
             (:usu_email, :usu_password, NOW())";

            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':usu_email', $obj->__get('usu_email'));
            $stmt->bindValue(':usu_password', password_hash($obj->__get('usu_password'), PASSWORD_BCRYPT));

            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao inserir usuário: " . $e->getMessage();
            return false;
        }
    }
    
    public function excluir($usu_id)
    {
        try {
            $sql = "DELETE FROM usuarios WHERE usu_id = :usu_id";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':usu_id', $usu_id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao excluir usuário: " . $e->getMessage();
            return false;
        }

       
        
    }
    
    public function alterar( $obj)
    {
        // Implementation for alterar
    }
    
    public function buscarPorId($id)
    {
        // Implementation for buscarPorId
    }
    
    public function listar()
    {
      try{
        $UserList =array();
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->getConn()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $users = [];
        foreach ($results as $row) {
            $user = new UserModel();
            $user->__set('usu_id', $row['usu_id']);
            $user->__set('usu_email', $row['usu_email']);
            $user->__set('usu_password', $row['usu_password']);
            $user->__set('usu_data', $row['usu_data']);
        

            array_push($UserList, $user);
        }

        return $UserList;

      } catch (PDOException $e) {
        echo "Erro ao listar usuários: " . $e->getMessage();
        return [];
      }
    }
}