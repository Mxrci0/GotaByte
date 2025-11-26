<?php

namespace App\DAO;

use App\DAO;
use App\Model\UsuarioModel;
use FW\Controller\FuncoesGlobais;

class UsuarioDAO extends DAO
{
    public function inserir($obj)
    {
        try {
            $sql = "INSERT INTO usuarios (
                        usu_tipo,
                        usu_nome,
                        usu_documento,
                        usu_email,
                        usu_telefone,
                        usu_endereco,
                        usu_cep,
                        usu_numero_fornecimento,
                        usu_matricula,
                        usu_senha,
                        usu_foto,
                        fk_login_log_id
                    )
                    VALUES (
                        :usu_tipo,
                        :usu_nome,
                        :usu_documento,
                        :usu_email,
                        :usu_telefone,
                        :usu_endereco,
                        :usu_cep,
                        :usu_numero_fornecimento,
                        :usu_matricula,
                        :usu_senha,
                        :usu_foto,
                        :fk_login_log_id
                    )";

            $stmt = $this->getConn()->prepare($sql);

            $stmt->bindValue(':usu_tipo', $obj->__get('usu_tipo'));
            $stmt->bindValue(':usu_nome', $obj->__get('usu_nome'));
            $stmt->bindValue(':usu_documento', $obj->__get('usu_documento'));
            $stmt->bindValue(':usu_email', $obj->__get('usu_email'));
            $stmt->bindValue(':usu_telefone', $obj->__get('usu_telefone'));
            $stmt->bindValue(':usu_endereco', $obj->__get('usu_endereco'));
            $stmt->bindValue(':usu_cep', $obj->__get('usu_cep'));
            $stmt->bindValue(':usu_numero_fornecimento', $obj->__get('usu_numero_fornecimento'));
            $stmt->bindValue(':usu_matricula', $obj->__get('usu_matricula'));
            $stmt->bindValue(':usu_senha', password_hash($obj->__get('usu_senha'), PASSWORD_DEFAULT));
            $stmt->bindValue(':usu_foto', $obj->__get('usu_foto'));
            $stmt->bindValue(':fk_login_log_id', $obj->__get('fk_login_log_id'));

            $stmt->execute();
        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }

    public function listar()
    {
        try {
            $usuarios = array();

            $sql = "SELECT u.*, l.log_email 
                    FROM usuarios u
                    LEFT JOIN login l ON u.fk_login_log_id = l.log_id";

            $stmt = $this->getConn()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            foreach ($result as $row) {
                $usuario = new UsuarioModel();

                $global = new FuncoesGlobais();
                $global->popularModel($usuario, $row);

                array_push($usuarios, $usuario);
            }

            return $usuarios;
        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }

    public function buscarPorId($id)
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE usu_id = :id";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();

            $row = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (!$row) return null;

            $usuario = new UsuarioModel();
            $global = new FuncoesGlobais();
            $global->popularModel($usuario, $row);

            return $usuario;

        } catch (\PDOException $ex) {
            header("Location:/error103");
            die();
        }
    }

    public function alterar($obj)
    {
        try {
            $sql = "UPDATE usuarios SET
                        usu_tipo = :usu_tipo,
                        usu_nome = :usu_nome,
                        usu_documento = :usu_documento,
                        usu_email = :usu_email,
                        usu_telefone = :usu_telefone,
                        usu_endereco = :usu_endereco,
                        usu_cep = :usu_cep,
                        usu_numero_fornecimento = :usu_numero_fornecimento,
                        usu_matricula = :usu_matricula,
                        usu_foto = :usu_foto
                    WHERE usu_id = :usu_id";

            $stmt = $this->getConn()->prepare($sql);

            $stmt->bindValue(':usu_tipo', $obj->__get('usu_tipo'));
            $stmt->bindValue(':usu_nome', $obj->__get('usu_nome'));
            $stmt->bindValue(':usu_documento', $obj->__get('usu_documento'));
            $stmt->bindValue(':usu_email', $obj->__get('usu_email'));
            $stmt->bindValue(':usu_telefone', $obj->__get('usu_telefone'));
            $stmt->bindValue(':usu_endereco', $obj->__get('usu_endereco'));
            $stmt->bindValue(':usu_cep', $obj->__get('usu_cep'));
            $stmt->bindValue(':usu_numero_fornecimento', $obj->__get('usu_numero_fornecimento'));
            $stmt->bindValue(':usu_matricula', $obj->__get('usu_matricula'));
            $stmt->bindValue(':usu_foto', $obj->__get('usu_foto'));
            $stmt->bindValue(':usu_id', $obj->__get('usu_id'));

            $stmt->execute();
        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }

    public function excluir($id)
    {
        try {
            $sql = "DELETE FROM usuarios WHERE usu_id = :id";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();

        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }
}
