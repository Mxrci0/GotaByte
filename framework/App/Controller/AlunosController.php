<?php

namespace App\Controller;

use FW\Controller\Action;
use App\Model\UsuarioModel;
use App\DAO\UsuarioDAO;


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

    public function form_pf()
    {
        // collect POST safely
        $name = $_POST['name'] ?? null;
        $cpf = $_POST['cpf'] ?? null;
        $email = $_POST['email'] ?? null;
        $tel = $_POST['tel'] ?? null;
        $password = $_POST['password'] ?? null;

        // populate model
        $form_pf = new form_pfModel();
        $form_pf->__set('usu_nome', $name);
        $form_pf->__set('cpf', $cpf);
        $form_pf->__set('email', $email);
        $form_pf->__set('tel', $tel);
        $form_pf->__set('password', $password);

        // use DAO to insert the model
        $form_pf_dao = new form_pfDAO();
        if ($form_pf_dao->inserir($form_pf)) {
            header('Location:/dashboard/login?success=1');
            exit;
        } else {
            header('Location:/dashboard/login?error=1');
            exit;
        }
    }


    public function form_pj()
    {
        // collect POST safely
        $name = $_POST['name'] ?? null;
        $razao = $_POST['razao'] ?? null;
        $cpf = $_POST['cpf'] ?? null;
        $email = $_POST['email'] ?? null;
        $tel = $_POST['tel'] ?? null;
        $password = $_POST['password'] ?? null;


        // populate model
        $form_pf = new form_pjModel();
        $form_pf->__set('name', $name);
        $form_pf->__set('razao', $razao);
        $form_pf->__set('cpf', $cpf);
         $form_pf->__set('email', $email);
        $form_pf->__set('tel', $tel);
        $form_pf->__set('password', $password);

        // use DAO to insert the model
        $form_pjDAO = new form_pjDAO();
        if ($form_pjDAO->inserir($form_pf)) {
            header('Location:/dashboard/login?success=1');
            exit;
        } else {
            header('Location:/dashboard/login?error=1');
            exit;
        }
    }


    

    public function form_pre()
    {
        // collect POST safely
        $name = $_POST['namepre'] ?? null;
        $razao = $_POST['cnpj'] ?? null;
        $cpf = $_POST['nomeresp'] ?? null;
        $email = $_POST['email'] ?? null;
        $tel = $_POST['tel'] ?? null;
        $password = $_POST['password'] ?? null;


        // populate model
        $form_pf = new form_preModel();
        $form_pf->__set('namepre', $name);
        $form_pf->__set('cnpj', $razao);
        $form_pf->__set('nomeresp', $cpf);
         $form_pf->__set('email', $email);
        $form_pf->__set('tel', $tel);
        $form_pf->__set('password', $password);

        // use DAO to insert the model
        $form_pjDAO = new form_preDAO();
        if ($form_pjDAO->inserir($form_pf)) {
            header('Location:/dashboard/login?success=1');
            exit;
        } else {
            header('Location:/dashboard/login?error=1');
            exit;
        }
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

    public function Necessidades()
    {

        $title = "alunos";
        $title_pagina = "Alunos";



        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('necessidades', 'dashboard');
    } 
}
