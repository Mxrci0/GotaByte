<?php

namespace App\Model;

class PerfisModel {
    private $id;
    private $nome;
    private $criado_em;

    // Getters e Setters
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCriadoEm() {
        return $this->criado_em;
    }
    public function setCriadoEm($criado_em) {
        $this->criado_em = $criado_em;
    }
}
            