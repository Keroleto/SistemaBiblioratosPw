<?php
    require_once "models/model.carpetas.php";

    class ABMCarpetasController{
        public function init(){
            $model = new ABMCarpetas();
            #Segun la orden es lo que va a mostrar
            if(isset($_GET['order'])){
                $order = $_GET['order'];
                if($order == 'nuevo'){
                    include "views/modules/view.carpeta.form.php";
                }
                elseif($order == 'insertar'){
                    $dni = $_POST['dni'];
                    $apellido = $_POST['apellido'];
                    $nombre = $_POST['nombre'];
                    $celular = $_POST['celular'];
                    $telefono = $_POST['telefono'];
                    $email = $_POST['email'];
                    $ultimaInsc = $_POST['ultimaInsc'];
                    $bibliorato = $_POST['bibliorato'];
                    $baja = isset($_POST['dado_de_baja']) ? $_POST['dado_de_baja'] : 0;
                    $falta_carpeta = isset($_POST['falta_carpeta']) ? $_POST['falta_carpeta'] : 0;
                    #lista_carpetas es usado por el view.abmCarpetas.lista.php
                    $lista_carpetas = $model->agregarCarpeta($dni,$apellido,$nombre,
                                                            $celular,$telefono,$email,
                                                            $ultimaInsc,$bibliorato,
                                                            $baja,$falta_carpeta);
                    include "views/modules/view.abmCarpetas.lista.php";
                }
                elseif($order == 'borrar'){
                    $id = $_GET['id'];
                    $lista_carpetas = $model->borrarCarpeta($id);
                    include "views/modules/view.abmCarpetas.lista.php";                    
                }
                elseif($order == 'modificar'){
                    $id = $_GET['id'];
                    $carpeta = $model->buscarCarpeta($id);
                    include "views/modules/view.carpeta.form.php";
                }

                elseif($order == 'cambiar'){
                    $id = $_GET['id'];
                    $apellido = $_POST['apellido'];
                    $nombre = $_POST['nombre'];
                    $fecha = $_POST['fechaNacimiento'];
                    $lista_carpetas = $model->cambiarCarpeta($id,$dni,$apellido,$nombre,
                                                            $celular,$telefono,$email,
                                                            $ultimaInsc,$bibliorato,
                                                            $baja,$falta_carpeta);
                    include "views/modules/view.abmCarpetas.lista.php";                      
                }
            }
            #Si order no esta pedida, mostrar solo la lista
            else{
                $lista_carpetas = $model->listar();
                include "views/modules/view.abmCarpetas.lista.php";
            }


        }
    }





?>