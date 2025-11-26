<?php

namespace App\Model;

class form_pjModel
{
    private $name;
    private $razao;
    private $cpf;
    private $email;
    private $tel;
    private $password;

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }
}
