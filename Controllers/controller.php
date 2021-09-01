<?php
    class MVController{
        #Invoco el template, toma todo el contenido del template y lo pega
        public function template(){
            include "views/template.php";
        }
        public function obtenerPagina(){
            $accion = "";
            if (isset($_GET['action'])){
                $accion = $_GET['action'];
            }
            $model = new ResolverPagina();
            include $model->resolver($accion);
        }
    }


?>