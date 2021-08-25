<?php

class MVController
{

    public function template()
    {
        include "views/template.php";
    }

    public function obtenerPágina() {
        $acción = "";
        if (isset($_GET['action'])) {
            $acción = $_GET['action'];
        }
        
        $model = new ResolverPágina();
        
        include $model -> resolver($acción);
    }

}