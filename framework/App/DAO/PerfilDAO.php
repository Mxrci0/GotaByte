<?php

namespace App\DAO;

use FW\DAO\Conexao;
use App\Model\PerfilModel;
use PDO;

class PerfisDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::getConnection();
    }


    public function cadastrar(PerfilModel $perfil) {
        $sql = "INSERT INTO perfis (nome) VALUES (:nome)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':nome', $perfil->getNome());
        return $stmt->execute();
    }

        public function listarTodos() {
        $sql = "SELECT * FROM perfis ORDER BY criado_em DESC";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function buscarPorId($id) {
        $sql = "SELECT * FROM perfis WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar(PerfilModel $perfil) {
        $sql = "UPDATE perfis SET nome = :nome WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':nome', $perfil->getNome());
        $stmt->bindValue(':id', $perfil->getId());
        return $stmt->execute();
    }

    public function excluir($id) {
        $sql = "DELETE FROM perfis WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }
}
