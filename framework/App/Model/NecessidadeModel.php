<?php

namespace App\Model;

class NecessidadesModel
{
    private $nec_id;
    private $nec_titulo;
    private $nec_descricao;
    private $nec_data;
    private $nec_prazo;
    private $nec_status;
    private $nec_avaliacao;
    private $nec_avaliacao_coment;
    private $nec_localizacao;
    private $nec_relatorio;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
