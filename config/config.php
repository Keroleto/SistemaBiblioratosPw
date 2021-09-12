<?php
    #Inicio la sesión
    session_start();
    #Creo usuario base, admin
    define('ROOT_PATH','http://localhost:8080/ProgramacionWebI/Biblioratos');

    $AdminUser = array(
        'usuario' => 'admin',
        'clave' => 'admin',
    );


?>