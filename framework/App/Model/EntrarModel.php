<?php

namespace App\Model;

class UsuarioModel {
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $senha;
    private $criado_em;

 public function __set($nome, $valor)
        {
            $this->$nome = $valor;
        }

        public function __get($nome)
        {
            return $this->$nome;
        }
}
