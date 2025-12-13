<?php

namespace App\Model;

class UsuariosModel
{
    private $usu_id;
    private $usu_email;
    private $usu_phone;
    private $usu_password;
    private $usu_data;

    public function __set($nome, $valor)
    {
        $this->$nome = $valor;
    }

    public function __get($nome)
    {
        return $this->$nome;
    }
}
