<?php
    class LoginModel{
        public function isLogged(){
            return false;
        }
        public function login($usuario,$clave){
            global $AdminUser;
            if($usuario == $AdminUser['usuario'] && $clave == $AdminUser['clave']){
                return true;
            }
            return false;
        }
        public function logout(){
            
        }
    }

?>