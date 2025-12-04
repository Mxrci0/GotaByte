<?php

namespace App\Model;

class form_pfModel
{
    private $pf_id;
    private $name;
    private $cpf;
    private $email;
    private $tel;
    private $password;

    public function __get($attr)
    {
        return $this->$attr ?? null;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }
}
