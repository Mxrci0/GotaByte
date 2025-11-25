<?php

namespace App\DAO;


use App\DAO;
use App\Model\EntrarModel;
use FW\Controller\FuncoesGlobais;

class UsuarioDAO {
    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::getConnection();
    }

    // Cadastrar usuário
    public function cadastrar(UsuarioModel $usuario) {
        $sql = "INSERT INTO usuarios (nome, email, telefone, senha) VALUES (:nome, :email, :telefone, :senha)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':nome', $usuario->getNome());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':telefone', $usuario->getTelefone());
        $stmt->bindValue(':senha', $usuario->getSenha()); // já deve ser hash
        return $stmt->execute();
    }

    // Buscar usuário por email ou telefone
    public function buscarPorEmailOuTelefone($login) {
        $sql = "SELECT * FROM usuarios WHERE email = :login OR telefone = :login LIMIT 1";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':login', $login);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Atualizar senha
    public function atualizarSenha($id, $novaSenha) {
        $sql = "UPDATE usuarios SET senha = :senha WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':senha', $novaSenha);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    // Listar todos os usuários (opcional)
    public function listarTodos() {
        $sql = "SELECT * FROM usuarios ORDER BY criado_em DESC";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
