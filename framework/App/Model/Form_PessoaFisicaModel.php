<?php

namespace App\Model;

class Form_PessoaFisicaModel
{
    private $pf_id;
    private $name;
    private $cpf;
    private $email;
    private $tel;
    private $senha;

    public function __get($attr)
    {
        return $this->$attr ?? null;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }
}
