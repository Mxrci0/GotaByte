<?php

namespace App\Model;

class FeedbackModel
{
    private $fb_id;
    private $fb_nome;
    private $fb_email; 
    private $fb_mensagem;
    private $fb_data;

    public function __set($nome, $valor)
    {
        $this->$nome = $valor;
    }

    public function __get($nome)
    {
        return $this->$nome;
    }
}
