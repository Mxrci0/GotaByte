<?php

namespace App\DAO;

use App\DAO;
use App\Model\form_preModel;

class form_preDAO extends DAO
{
    public function inserir($obj)
    {
        try {
            $sql = "INSERT INTO prefeitura (
                        namepre,
                        cnpj,
                        nomeresp,
                        email,
                        tel,
                        password
                    ) VALUES (
                        :namepre,
                        :cnpj,
                        :nomeresp,
                        :email,
                        :tel,
                        :password
                    )";

            $stmt = $this->getConn()->prepare($sql);

            $stmt->bindValue(':namepre',    $obj->__get('namepre'));
            $stmt->bindValue(':cnpj',       $obj->__get('cnpj'));
            $stmt->bindValue(':nomeresp',   $obj->__get('nomeresp'));
            $stmt->bindValue(':email',      $obj->__get('email'));
            $stmt->bindValue(':tel',        $obj->__get('tel'));
            $stmt->bindValue(':password',   $obj->__get('password'));

            return $stmt->execute(); // retorna true/false
        }
        catch (\PDOException $ex) {
            return false;
        }
    }

    public function listar()
    {
        try {
            $sql = "SELECT * FROM prefeitura";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            $dados = [];

            foreach ($result as $row) {
                $model = new form_preModel();
                foreach ($row as $campo => $valor) {
                    $model->__set($campo, $valor);
                }
                $dados[] = $model;
            }

            return $dados;
        }
        catch (\PDOException $ex) {
            return [];
        }
    }

    public function buscarPorId($id)
    {
        try {
            $sql = "SELECT * FROM prefeitura WHERE id = :id";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $row = $stmt->fetch(\PDO::FETCH_ASSOC);
            if ($row) {
                $model = new form_preModel();
                foreach ($row as $campo => $valor) {
                    $model->__set($campo, $valor);
                }
                return $model;
            }
            return null;
        }
        catch (\PDOException $ex) {
            return null;
        }
    }

    public function alterar($obj)
    {
        try {
            $sql = "UPDATE prefeitura SET 
                        namepre = :namepre,
                        cnpj = :cnpj,
                        nomeresp = :nomeresp,
                        email = :email,
                        tel = :tel,
                        password = :password
                    WHERE id = :id";

            $stmt = $this->getConn()->prepare($sql);

            $stmt->bindValue(':id',         $obj->__get('id'));
            $stmt->bindValue(':namepre',    $obj->__get('namepre'));
            $stmt->bindValue(':cnpj',       $obj->__get('cnpj'));
            $stmt->bindValue(':nomeresp',   $obj->__get('nomeresp'));
            $stmt->bindValue(':email',      $obj->__get('email'));
            $stmt->bindValue(':tel',        $obj->__get('tel'));
            $stmt->bindValue(':password',   $obj->__get('password'));

            return $stmt->execute();
        }
        catch (\PDOException $ex) {
            return false;
        }
    }

    public function excluir($id)
    {
        try {
            $sql = "DELETE FROM prefeitura WHERE id = :id";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':id', $id);

            return $stmt->execute();
        }
        catch (\PDOException $ex) {
            return false;
        }
    }
}
