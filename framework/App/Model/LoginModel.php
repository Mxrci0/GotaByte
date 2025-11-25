<?php

namespace App\Model;

class UsuarioModel
{
    private $usu_id;
    private $usu_tipo; // Pessoa Física, Jurídica ou Prefeitura
    private $usu_nome;
    private $usu_documento; // CPF ou CNPJ
    private $usu_email;
    private $usu_telefone;
    private $usu_endereco;
    private $usu_cep;
    private $usu_numero_fornecimento; 
    private $usu_matricula; 
    private $usu_senha;
    private $usu_foto;
    private $fk_login_log_id; // caso o login seja separado

    public function __set($nome, $valor)
    {
        $this->$nome = $valor;
    }

    public function __get($nome)
    {
        return $this->$nome;
    }
}
