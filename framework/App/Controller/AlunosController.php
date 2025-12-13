<?php

namespace App\Controller;

use FW\Controller\Action;
use App\Model\UserModel;
use App\DAO\UserDAO;
use App\Model\Form_PessoaFisicaModel;
use App\Model\form_pjModel;
use App\Model\form_preModel;
use App\DAO\Form_PessoaFisicaDAO;
use App\DAO\form_pjDAO;
use App\DAO\form_preDAO;



// NOVAS DEPENDÊNCIAS PARA FEEDBACK
use App\Model\FeedbackModel; 
use App\DAO\FeedbackDAO;


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
      

    public function validaAutenticacao() {
        // Lógica de validação de autenticação
    }

    public function login()
    {
        $title = "alunos";
        $title_pagina = "Alunos";

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('login', '');
    }


    // --- MÉTODOS EXISTENTES DE PESSOA FÍSICA (PF) ---

    public function inserir(){
        /* var_dump($_POST);
        exit; */


        $login = new Form_PessoaFisicaModel();
        $Form_PessoaFisicaDAO = new Form_PessoaFisicaDAO();
        
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
        header ("Location:/login/listar");
        
    } 

    Public function listarpf(){

        $title = "Listagem PF";
        $this->getView()->title = $title;
        
        
        $Form_PessoaFisicaDAO = new Form_PessoaFisicaDAO();
        $login = $Form_PessoaFisicaDAO -> listar();
        $this->getView()->login = $login;
        $this->render('listar', 'dashboard');

    }

    public function editarPf(){
        
        $login = new Form_PessoaFisicaModel();
        $Form_PessoaFisicaDAO = new Form_PessoaFisicaDAO();
        
        $login = $Form_PessoaFisicaDAO->buscarPorId($this->getParams()[0]);
            
        $this->getView()->login = $login;

        $title = "Editar PF";
        $this->getView()->title = $title;
        
        $this->render('editar', '');

    }
        public function alterarpf(){
            $login = new Form_PessoaFisicaModel();
            $Form_PessoaFisicaDAO = new Form_PessoaFisicaDAO();

            $login->__set('pf_id', $_POST['pf_id']);
            $login->__set('name', $_POST['name']);
            $login->__set('cpf', $_POST['cpf']);
            $login->__set('email', $_POST['email']);
            $login->__set('tel', $_POST['tel']);
            $login->__set('senha', $_POST['senha']);

            $Form_PessoaFisicaDAO->alterar($login);
            header("Location: /login/listar");
            
        }

    public function excluirpf()
    {
        $Form_PessoaFisicaDAO = new Form_PessoaFisicaDAO();
        if(isset($this->getParams()[0])){
            $Form_PessoaFisicaDAO->excluir($this->getParams()[0]);
        }
        header("Location:/login/listar");

    }

/* Só alterar os dados que forem pedidos pelo model */
    // --- NOVOS MÉTODOS DE FEEDBACK ---

    /**
     * Rota de formulário GET: /feedback/novo -> AlunosController@formFeedback
     * Este método renderiza o formulário HTML para o usuário.
     */
    /* public function formFeedback()
    {
        $title = "Novo Feedback";
        $this->getView()->title = $title;
        
        // CORREÇÃO APLICADA: Renderiza a view 'fb_inserir' na pasta 'alunos'
        $this->render('fb_inserir', 'dashboard');
    }
 */

    /**
     * Método para processar a submissão de um novo feedback (POST)
     * Rota: /feedback/inserir -> AlunosController@inserirFeedback
     */
    public function inserirfeed()
    {
/* var_dump($_POST);
        exit; */
        $feed = new FeedbackModel();
        $feedbackDAO = new FeedbackDAO();

        $feed -> __set('fb_nome', $_POST['fb_nome']);
        $feed -> __set('fb_email', $_POST['fb_email']);
  
        $feed -> __set('fb_mensagem', $_POST['fb_mensagem']);
        $feed -> __set('fb_data', date('Y-m-d H:i:s'));

        if(!$feedbackDAO -> inserir($feed)){
            header('Location:/feed');
            die();
        } else {
            header('Location:/feed');
            die();
        }

        
    }
    public function listarfeed(){

        $title = "Listagem Feedback";
        $this->getView()->title = $title;
        
        
        $feedbackDAO = new FeedbackDAO();
        $feed = $feedbackDAO -> listar();
        $this->getView()->feed = $feed;
        $this->render('listarfeed', 'dashboard');
    }

        public function excluirfeed()
    {
        $feedbackDAO = new FeedbackDAO();
        if(isset($this->getParams()[0])){
            $feedbackDAO->excluir($this->getParams()[0]);
        }
        header("Location: /feed/listar");
    }

    public function editarfeed(){
        
        $feed = new FeedbackModel();
        $feedbackDAO = new FeedbackDAO();
        
        $feed = $feedbackDAO->buscarPorId($this->getParams()[0]);
            
      
        $this->getView()->feed = $feed;

        $title = "Editar Feedback";
        $this->getView()->title = $title;
        
        $this->render('feededitar', 'dashboard');

    }
        public function alterarfeed(){
            $feed = new FeedbackModel();
            $feedbackDAO = new FeedbackDAO();

            $feed->__set('fb_id', $_POST['fb_id']);
            $feed->__set('fb_nome', $_POST['fb_nome']);
            $feed->__set('fb_email', $_POST['fb_email']);
            $feed->__set('fb_mensagem', $_POST['fb_mensagem']);

            $feedbackDAO->alterar($feed);
            header("Location: /feed/listar");
            
        }
       

        public function inserirUsuario(){

            /* var_dump($_POST);
            exit;
             */ 
            $entrar = new UserModel();
            $UserDAO = new UserDAO();
           
            $entrar->__set('usu_email', $_POST['usu_email']);
            $entrar->__set('usu_password', $_POST['usu_password']);

            if(!$UserDAO->inserir($entrar)){
                 header('Location:/');
                 die();
            } else {    
                 header('Location:/entrar');
                 die();
            } 
            header ("Location:/entrar/listar");
        }

        public function listarUser(){

            $title = "Listagem User";
            $this->getView()->title = $title;
            
            
            $UserDAO = new UserDAO();
            $entrar = $UserDAO -> listar();
            $this->getView()->entrar = $entrar;
            $this->render('listarUser', 'dashboard');
    
        }

    public function editarUser(){
        
        $entrar = new UserModel();
        $UserDAO = new UserDAO();
        
        $entrar = $UserDAO->buscarPorId($this->getParams()[0]);
            
        $this->getView()->entrar = $entrar;

        $title = "Editar User";
        $this->getView()->title = $title;
        
        $this->render('editarUser', 'dashboard');
    }
        public function alterarUser(){
            $entrar = new UserModel();
            $UserDAO = new UserDAO();

            $entrar->__set('usu_id', $_POST['usu_id']);
            $entrar->__set('usu_email', $_POST['usu_email']);
            $entrar->__set('usu_password', $_POST['usu_password']);

            $UserDAO->alterar($entrar);
            header("Location: /entrar/listar");
            
        }
    public function excluirUser()
    {
        
        $UserDAO = new UserDAO();
        if(isset($this->getParams()[0])){
            $UserDAO->excluir($this->getParams()[0]);   
        }
        header("Location:/entrar/listar");
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

    /* public function Necessidades()
    {

        $title = "alunos";
        $title_pagina = "Alunos";

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('necessidades', 'dashboard');
    } */
}/* teste */