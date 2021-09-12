<?php
    #Mapea actions que recibo con metodos dentro de la clase
    $map_action = array(
        'inicio' => 'paginaEstatica', #ejectuara un metodo llamado 'paginaEstatica'
        'contacto' => 'paginaEstatica',
        'biblioratos' => 'paginaEstatica',
        'login' => 'loginController',
        'abmCarpetas' => 'abmCarpetasController'

    ); 

    class MVController{
        #Invoco el template, toma todo el contenido del template y lo pega
        public function template(){
            include "views/template.php";
        }
        #Permite enroutar a paginas estaticas o dinamicas
        public function route(){
            global $map_action;
            $accion = "inicio";
            if (isset($_GET['action'])){
                $accion = $_GET['action'];
            }
            #Invocacion dinamica
            $this->{$map_action[$accion]}($accion); #Expande la cadena de caracteres entre {} e invoca el metodo
            #Igual a $this->paginaEstatica[$accion]($accion)
        }

        public function paginaEstatica($accion){
            $model = new ResolverPagina();
            include $model->resolver($accion);
        }

        public function loginController(){
            require_once "controllers/controller.login.php";
            $loginController = new loginController();
            include $loginController->login();
        }

        public function abmCarpetasController(){
            require_once "controller.abmCarpetas.php";
            $controller = new ABMCarpetasController();
            $controller->init();
        }
    }


?>