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

    public function buscarPorId($pf_id)
    {
        try {
            $sql = "SELECT * FROM form_pessoafisica WHERE pf_id = :pf_id";

            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':pf_id', $pf_id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
          if($result > 0){
            
            $pf = new Form_PessoaFisicaModel();
            $pf->__set('pf_id', $result['pf_id']);
            $pf->__set('name', $result['name']);
            $pf->__set('cpf', $result['cpf']);
            $pf->__set('email', $result['email']);
            $pf->__set('tel', $result['tel']);
            $pf->__set('senha', $result['senha']);

            return $pf;
          }else{
            return null;
          }

        } catch (PDOException $ex) {
            error_log("Location: /error103 ");
            die;
        }
    }

    public function listar()
    {
        try {
            $pfList = array();
            $sql = "SELECT * FROM form_pessoafisica";

            $stmt = $this->getConn()->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($results as $row) {
                $pf = new Form_PessoaFisicaModel();
                $pf->__set('pf_id', $row['pf_id']);
                $pf->__set('name', $row['name']);
                $pf->__set('cpf', $row['cpf']);
                $pf->__set('email', $row['email']);
                $pf->__set('tel', $row['tel']);
                $pf->__set('senha', $row['senha']);

                array_push($pfList, $pf);
            }
            return $pfList;
        } catch (PDOException $e) {
            error_log('location: /error103');
            die;
        }
    }

    public function excluir($pf_id)
    {
        try {
            $sql = "DELETE FROM form_pessoafisica WHERE pf_id = :pf_id";
            
            $stmt = $this->getConn()->prepare($sql);

            $stmt->bindValue(':pf_id', $pf_id);
            $stmt->execute();
        } catch (PDOException $ex) {
            error_log("Location: /error103 ");
            die;
        }
    }
}
