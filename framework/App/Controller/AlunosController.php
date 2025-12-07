<?php

namespace App\Controller;

use FW\Controller\Action;
use App\Model\UsuarioModel;
use App\DAO\UsuarioDAO;
use App\Model\Form_PessoaFisicaModel;
use App\Model\form_pjModel;
use App\Model\form_preModel;
use App\DAO\Form_PessoaFisicaDAO;
use App\DAO\form_pjDAO;
use App\DAO\form_preDAO;


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


    public function inserir(){
        /* var_dump($_POST);
        exit; */


        $login = new Form_PessoaFisicaModel();
        $Form_PessoaFisicaDAO = new Form_PessoaFisicaDAO();
        /* if($_POST['name'] != "" || $_POST['cpf'] != ""|| $_POST['email'] != "" || $_POST['tel'] != "" || $_POST['password'] != ""){
            header('Location:/login');
            die();
        } */
        $login->__set('name', $_POST['name']);
        $login->__set('cpf', $_POST['cpf']);
        $login->__set('email', $_POST['email']);
        $login->__set('tel', $_POST['tel']);
        $login->__set('senha', $_POST['password']);

        /* var_dump($login);
        exit; */
       if(!$Form_PessoaFisicaDAO->inserir($login)){
            header('Location:/entrar');
            die();
        } else {
            header('Location:/login');
            die();
        } 
        
    } 
    public function excluirpf()
    {
        $id = $this->getParams()[0];
        var_dump($id);
        exit;

    }


    

    
    public function Modo()
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

  /*  public function Necessidades()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('necessidades', 'dashboard');
    } */
}
