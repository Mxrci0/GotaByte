<?php

namespace App\Controller;

use FW\Controller\Action;
use App\DAO\AlunosDAO;
use App\Model\AlunosModel;


class AlunosController extends Action
{

    public function index()
    {
        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('index', 'dashboard');
    }

    public function cadastro()
    {
        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('cadastro', 'dashboard');
    }
    public function ajuda()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('ajuda', 'dashboard');
    }
    public function dicas()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('dicas', 'dashboard');
    }

    public function entrar()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('entrar', 'dashboard');
    }

    public function Feed()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('feed', 'dashboard');
    }

    public function validaAutenticacao() {}

    public function login()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('login', '');
    }

    public function cadastroPF()
    {

        var_dump($_POST);
        exit;
        /* $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $CPF = $_POST['CPF '];
        $Email = $_POST['Email'];
        $NúmerodeFornecimento = $_POST['NúmerodeFornecimento'];
        $ConfirmarSenha = $_POST['Confirmar Senha'];
        $NúmerodeCelular = $_POST['Número de Celular'];
        $CEP = $_POST['CEP'];
        $Endereço = $_POST['Endereço'];


        $LoginModel = new LoginModel();
        $LoginModel->__set('nome', $nome);
        $LoginModel->__set('CPF', $CPF);
        $LoginModel->__set('Email', $Email);
        $LoginModel->__set('NúmerodeFornecimento', $NúmerodeFornecimento);
        $LoginModel->__set('ConfirmarSenha', $ConfirmarSenha);
        $LoginModel->__set('NúmerodeCelular', $NúmerodeCelular);
        $LoginModel->__set('senha', $senha);
        $LoginModel->__set('CEP', $CEP);
        $LoginModel->__set('Endereço', $Endereço);


        $LoginDAO = new LoginsDAO();
        if ($LoginDAO->inserir($LoginModel)) {
            header('Location:/dashboard/login?success=1');
        } else {
            header('Location:/dashboard/login?error=1');
        } */
    }
    /* public function Modo()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('modo', 'dashboard');
    }
    public function paginain()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('paginain', 'dashboard');
    }


    public function Perfil()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('perfil', 'dashboard');
    }

    public function Recup()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('recup', 'dashboard');
    }
    public function Relatorio()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('Relatorio', 'dashboard');
    }

    public function Necessidades()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('necessidades', 'dashboard');
    } */
}
