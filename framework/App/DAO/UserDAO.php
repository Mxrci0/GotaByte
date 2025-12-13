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
            die();
        }

       
        
    }
    
    
    public function alterar( $var)
    {
       try{
        $sql = "UPDATE usuarios 
        SET 
        usu_email = :usu_email, usu_password = :usu_password WHERE usu_id = :usu_id";
        
        $stmt = $this->getConn()->prepare($sql);
        
        $usu_id = $var->__get('usu_id');
        $usu_email = $var->__get('usu_email');
        $usu_password = password_hash($var->__get('usu_password'), PASSWORD_BCRYPT);


        $stmt->bindparam(':usu_id', $usu_id);
        $stmt->bindparam(':usu_email', $usu_email);
        $stmt->bindparam(':usu_password', $usu_password);


        $stmt->execute();
       } catch (PDOException $e) {
        echo "Erro ao alterar usuário: " . $e->getMessage();
        return false;

       }
    }
    
    public function buscarPorId($usu_id)
    {   
        try{
        $sql = "SELECT * FROM usuarios WHERE usu_id = :usu_id";

        $stmt = $this->getConn()->prepare($sql);
        $stmt->bindValue(':usu_id', $usu_id);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
            if($results > 0 ){
                $entrar = new UserModel();
                $entrar->__set('usu_id', $results['usu_id']);
                $entrar->__set('usu_email', $results['usu_email']);
                $entrar->__set('usu_password', $results['usu_password']);
                $entrar->__set('usu_data', $results['usu_data']);
                
                return $entrar;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            error_log('location: /error103');
            die();

        }
      
    }
    
    public function listar()
    {
      try{
        $UserList =array();
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->getConn()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
        foreach ($results as $row) {
            $entrar = new UserModel();
            $entrar->__set('usu_id', $row['usu_id']);
            $entrar->__set('usu_email', $row['usu_email']);
            $entrar->__set('usu_password', $row['usu_password']);
            $entrar->__set('usu_data', $row['usu_data']);
        

            array_push($UserList, $entrar);
        }

        return $UserList;

      } catch (PDOException $e) {
        echo "Erro ao listar usuários: " . $e->getMessage();
        return [];
      }
    }
}