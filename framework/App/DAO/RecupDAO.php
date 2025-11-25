<?php

namespace App\DAO;

use App\DAO;
use App\Model\RecupDAO;

class Recup extends DAO
{
    // Inserir token no banco
    public function inserirToken($obj) {
        try {
            $fk_usuario_id = $obj->__get('fk_usuario_id');
            $rec_token = $obj->__get('rec_token');
            $rec_expiracao = $obj->__get('rec_expiracao');

            $sql = "INSERT INTO tokens_recuperacao (
                        fk_usuario_id,
                        rec_token,
                        rec_expiracao
                    ) VALUES (
                        :fk_usuario_id,
                        :rec_token,
                        :rec_expiracao
                    )";

            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':fk_usuario_id', $fk_usuario_id);
            $stmt->bindValue(':rec_token', $rec_token);
            $stmt->bindValue(':rec_expiracao', $rec_expiracao);
            $stmt->execute();
        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }

    // Buscar usuário por e-mail
    public function buscarUsuarioPorEmail($email) {
        try {
            $sql = "SELECT * FROM login WHERE log_email = :email LIMIT 1";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($result) {
                return $result; // retorna array com dados do usuário
            }

            return null;
        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }

    // Validar token
    public function validarToken($token) {
        try {
            $sql = "SELECT * FROM tokens_recuperacao 
                    WHERE rec_token = :token AND rec_expiracao >= NOW()
                    LIMIT 1";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':token', $token);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $result ?: null;
        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }

    // Atualizar senha do usuário
    public function atualizarSenha($usuario_id, $novaSenha) {
        try {
            $sql = "UPDATE login SET log_senha = :senha WHERE log_id = :id";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindValue(':senha', password_hash($novaSenha, PASSWORD_DEFAULT));
            $stmt->bindValue(':id', $usuario_id);
            $stmt->execute();
        } catch (\PDOException $ex) {
            header('Location:/error103');
            die();
        }
    }
}
