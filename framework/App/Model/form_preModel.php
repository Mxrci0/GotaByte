<?php

namespace App\Model;

class form_preModel {

    private $aln_id;
    private $aln_nome;
    private $aln_telefone;
    private $fk_login_log_id;

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}
