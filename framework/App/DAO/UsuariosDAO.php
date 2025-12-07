<?php

namespace App\DAO;

use App\Model\UsuariosModel;
use App\DAO;
use PDO;
use PDOException;

class UsuariosDAO extends DAO
{
    public function __construct()
    {
        parent::__construct(); // chama a conexão da classe DAO
    }

    // Excluir usuário por ID
    public function excluir($id)
    {
        try {
            $sql = "DELETE FROM usuarios WHERE usu_id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            die("Erro ao excluir usuário: " . $e->getMessage());
        }
    }

    // Alterar dados do usuário
    public function alterar(UsuariosModel $user)
    {
        try {
            $sql = "UPDATE usuarios SET usu_email = :email, usu_phone = :phone, usu_password = :password WHERE usu_id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':email', $user->__get('usu_email'));
            $stmt->bindValue(':phone', $user->__get('usu_phone'));
            $stmt->bindValue(':password', password_hash($user->__get('usu_password'), PASSWORD_DEFAULT));
            $stmt->bindValue(':id', $user->__get('usu_id'), PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            die("Erro ao alterar usuário: " . $e->getMessage());
        }
    }

    // Buscar usuário por ID
    public function buscarPorId($id)
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE usu_id = :id LIMIT 1";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erro ao buscar usuário por ID: " . $e->getMessage());
        }
    }

    // Listar todos os usuários
    public function listar()
    {
        try {
            $sql = "SELECT * FROM usuarios";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erro ao listar usuários: " . $e->getMessage());
        }
    }

    // Inserir usuário no banco
    public function inserir(UsuariosModel $user)
    {
        try {
            $sql = "INSERT INTO usuarios 
                    (usu_email, usu_phone, usu_password) 
                    VALUES (:email, :phone, :password)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindValue(':email', $user->__get('usu_email'));
            $stmt->bindValue(':phone', $user->__get('usu_phone'));
            $stmt->bindValue(':password', password_hash($user->__get('usu_password'), PASSWORD_DEFAULT));

            return $stmt->execute();

        } catch (PDOException $e) {
            die("Erro ao inserir usuário: " . $e->getMessage());
        }
    }

    // Buscar usuário por email (utilizado no login)
    public function buscarPorEmail($email)
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE usu_email = :email LIMIT 1";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':email', $email);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            die("Erro ao buscar usuário: " . $e->getMessage());
        }
    }
}
