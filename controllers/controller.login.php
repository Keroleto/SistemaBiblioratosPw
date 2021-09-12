<?php

    require_once 'models/model.login.php';

    class LoginController{
        public function login(){
            $model = new LoginModel();
            if($model->islogged()){
                return 'views/modules/view.login.logged.php';
            }
            else{
                #Hace falta hacer un isset de la clave? en caso de que no se ingrese password
                if(isset($_POST['usuario']) && trim($_POST['usuario']) != ''){
                    if($model->login($_POST['usuario'],$_POST['clave'])){
                        return 'views/modules/view.login.logged.php';
                    }
                    else{
                        return 'views/modules/view.login.invalid.php';
                    }
                }
                return 'views/modules/view.login.form.php';
            }
        }
    }


?>