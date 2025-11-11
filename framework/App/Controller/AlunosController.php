<?php

namespace App\Controller;

use FW\Controller\Action;
use App\DAO\AlunosDAO;
use App\Model\AlunosModel;


class AlunosController extends Action{

    public function index(){
        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('index', 'dashboard');
    }
    
    public function cadastro(){
        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('cadastro', 'dashboard');
    }
    public function ajuda(){

        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('ajuda', 'dashboard');
    }
        public function dicas(){
        
        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('dicas', 'dashboard');
    }
    
        public function entrar(){
        
        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('entrar', 'dashboard');
    
    
    
        }  

         public function Feed(){
        
        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('feed', 'dashboard');
    
    
    
        }  

    public function validaAutenticacao() {

        
    }

     public function login(){
        
        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('login', '');
    
    
    
        }  
          public function Modo(){
        
        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('modo', 'dashboard');
    
    
    
        }  
   public function paginain(){
        
        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('paginain', 'dashboard');
    
    
    
        }  


          public function Perfil(){
        
        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('perfil', 'dashboard');
    
    
    
        }  

         public function Recup(){
        
        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('recup', 'dashboard');
    
    
    
        }  
        public function Relatorio(){
        
        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('Relatorio', 'dashboard');
    
    
    
        }

            public function Necessidades(){
        
        $title = "alunos";
        $title_pagina = "Alunos";

        

        $this->getView()->title = $title;
        $this->getView()->title_pagina = $title_pagina;

        $this->render('necessidades', 'dashboard');
    
    
    
        }

}
