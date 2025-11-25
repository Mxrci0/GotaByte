<?php

namespace App\Model;

class RecupModel
{
    private $rec_id;
    private $fk_usuario_id;
    private $rec_token;
    private $rec_expiracao;
    private $rec_criado_em;

    public function __set($nome, $valor)
    {
        $this->$nome = $valor;
    }

    public function __get($nome)
    {
        return $this->$nome;
    }
}
