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
    public function formFeedback()
    {
        $title = "Novo Feedback";
        $this->getView()->title = $title;
        
        // CORREÇÃO APLICADA: Renderiza a view 'fb_inserir' na pasta 'alunos'
        $this->render('fb_inserir', 'dashboard');
    }


    /**
     * Método para processar a submissão de um novo feedback (POST)
     * Rota: /feedback/inserir -> AlunosController@inserirFeedback
     */
    public function inserirFeedback()
    {
        // Verifica se os dados foram enviados por POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $feedback = new FeedbackModel();
            $feedbackDAO = new FeedbackDAO();

            // 1. Coleta e sanitização dos dados (AJUSTE OS NOMES DOS CAMPOS POST CONFORME SEU FORMULÁRIO)
            $fb_nome     = $_POST['fb_nome'] ?? '';
            $fb_email    = $_POST['fb_email'] ?? '';
            $fb_rating   = $_POST['fb_rating'] ?? 0;
            $fb_mensagem = $_POST['fb_mensagem'] ?? '';
            
            // 2. Popula o modelo
            $feedback->__set('fb_nome', $fb_nome);
            $feedback->__set('fb_email', $fb_email);
            $feedback->__set('fb_rating', $fb_rating);
            $feedback->__set('fb_mensagem', $fb_mensagem);

            try {
                // 3. Insere no banco de dados
                $feedbackDAO->inserir($feedback);
                
                // Redireciona para uma página de sucesso ou volta para a lista
                header('Location: /feedback/listar?success=1');
                die();
            } catch (\Exception $e) {
                // Trata erro de inserção (o DAO já redireciona para /error103)
                header('Location: /error103');
                die();
            }
        } else {
            // Se for um GET na rota de POST, redireciona para o formulário
            header('Location: /feedback/novo'); 
            die();
        }
    }


    /**
     * Lista todos os feedbacks (Geralmente para um painel administrativo)
     * Rota: /feedback/listar -> AlunosController@listarFeedback
     */
    public function listarFeedback()
    {
        $title = "Listagem de Feedbacks";
        $this->getView()->title = $title;
        
        $feedbackDAO = new FeedbackDAO();
        $feedbacks = $feedbackDAO->listar();
        
        $this->getView()->feedbacks = $feedbacks;
        
        // CORREÇÃO APLICADA: Renderiza a view 'fb_listar' na pasta 'alunos'
        $this->render('fb_listar', 'dashboard');
    }

    /**
     * Busca um feedback específico pelo ID (para visualização ou edição)
     * Rota Dinâmica: /feedback/consultar/{id} -> AlunosController@buscarFeedbackPorId
     */
    public function buscarFeedbackPorId()
    {
        // Obtém o ID do feedback do array de parâmetros da URL
        $id = $this->getParams()[0] ?? null;

        if (!$id) {
            header('Location: /feedback/listar?error=id_invalido');
            die();
        }

        $feedbackDAO = new FeedbackDAO();
        // É essencial que o método 'buscarPorId' exista e funcione no seu FeedbackDAO
        $feedback = $feedbackDAO->buscarPorId($id); 
        
        $title = "Detalhes do Feedback";
        $this->getView()->title = $title;
        $this->getView()->feedback = $feedback;

        // CORREÇÃO APLICADA: Renderiza a view 'fb_detalhe' na pasta 'alunos'
        $this->render('fb_detalhe', 'dashboard');
    }

    /**
     * Exclui um feedback pelo ID
     * Rota Dinâmica: /feedback/excluir/{id} -> AlunosController@excluirFeedback
     */
    public function excluirFeedback()
    {
        // Obtém o ID do feedback
        $id = $this->getParams()[0] ?? null;

        if ($id) {
            $feedbackDAO = new FeedbackDAO();
            // É essencial que o método 'excluir' exista e funcione no seu FeedbackDAO
            $feedbackDAO->excluir($id); 
        }
        
        // Redireciona de volta para a listagem
        header("Location: /feedback/listar");
        die();
    }


    // --- OUTROS MÉTODOS EXISTENTES ---
    
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
}