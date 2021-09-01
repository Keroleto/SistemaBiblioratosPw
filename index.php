<?php
    #Dice que el codigo del controller es fundamental para ejecutar el sistema
    #Hace las clases tambien accesibles desde los demas archivos
    require_once "controllers/controller.php";
    require_once "models/model.php";

    #Instancia la clase
    $mvc = new MVController();
    $mvc->template();




?>