<?php
    class ABMCarpetas{
        
        private function tablaCarpetas(){
            if (!isset($_SESSION['carpetas'])){
                $_SESSION['carpetas'] = array(
                    array('id' => 1,'dni'=>34567890,
                            'apellido' => 'Pérez', 'nombre' => 'Juan',
                            'celular'=>154194765, 'telefono' => 12345123,
                            'email'=>'perez@gmail.com','ultimaInsc'=>'2004-02-23',
                            'bibliorato'=>3001,'dado_de_baja'=> false, 'falta_carpeta'=> false),
                    array('id' => 2,'dni'=>34567890, 
                            'apellido' => 'Ruarte', 'nombre'=> 'Tito',
                            'celular'=>154367921, 'telefono' => 45451373,
                            'email'=>'ruarte@gmail.com','ultimaInsc'=>'1993-05-12',
                            'bibliorato'=>3001.2,'dado_de_baja'=> false, 'falta_carpeta'=> false),
                );
            }
            return $_SESSION['carpetas'];
        }

        public function agregarCarpeta($dni,$apellido,$nombre,$celular,$telefono,$email,$ultimaInsc,$bibliorato,$baja,$falta_carpeta){
            $id = count($_SESSION['carpetas']) + 1;
            #Creo la nueva fila con los datos de la carpeta
            $newFila = array('id' => $id,'dni'=>$dni,
                            'apellido' => $apellido, 'nombre' => $nombre,
                            'celular'=>$celular, 'telefono' => $telefono,
                            'email'=>$email,'ultimaInsc'=>$ultimaInsc,
                            'bibliorato'=>$bibliorato,'dado_de_baja'=> $baja, 'falta_carpeta'=> $falta_carpeta);
            #Agrego a la lista la nueva fila
            array_push($_SESSION['carpetas'],$newFila);
            #Retorno la tabla de carpetas
            return $this->tablaCarpetas();
        }

        public function borrarCarpeta($id){
            foreach($_SESSION['carpetas'] as $indice => $fila){
                #Al encontrar la fila con el id borra la fila dando su indice
                if($fila['id'] == $id){
                    unset($_SESSION['carpetas'][$indice]);
                    #Hace break para terminar el for
                    break;
                }
            }
            return $this->tablaCarpetas();
        }

        public function buscarCarpeta($id){
            foreach($_SESSION['carpetas'] as $indice => $fila){
                #Al encontrar la fila con el id borra la fila dando su indice
                if($fila['id'] == $id){
                    return $_SESSION['carpetas'][$indice];
                }
            }
            return $this->tablaCarpetas();
        }

        public function cambiarCarpeta($id,$dni,$apellido,$nombre,$celular,$telefono,$email,$ultimaInsc,$bibliorato,$baja,$falta_carpeta){
            foreach($_SESSION['carpetas'] as $indice => $fila){
                #Al encontrar la fila con el id cambio los datos
                if($fila['id'] == $id){
                    if ($dni != ""){
                        $_SESSION['carpetas'][$indice]['dni'] = $dni;
                    }
                    if ($apellido != ""){
                        $_SESSION['carpetas'][$indice]['apellido'] = $apellido;
                    }
                    if($nombre != ""){
                        $_SESSION['carpetas'][$indice]['nombre'] = $nombre;
                    }
                    if($celular != ""){
                        $_SESSION['carpetas'][$indice]['celular'] = $celular;
                    }
                    if($telefono != ""){
                        $_SESSION['carpetas'][$indice]['telefono'] = $telefono;
                    }
                    if($email != ""){
                        $_SESSION['carpetas'][$indice]['email'] = $email;
                    }
                    if($ultimaInsc != ""){
                        $_SESSION['carpetas'][$indice]['ultimaInsc'] = $ultimaInsc;
                    }
                    if($bibliorato != ""){
                        $_SESSION['carpetas'][$indice]['bibliorato'] = $bibliorato;
                    }
                    if($baja != ""){
                        $_SESSION['carpetas'][$indice]['dado_de_baja'] = $baja;
                    }
                    if($falta_carpeta != ""){
                        $_SESSION['carpetas'][$indice]['falta_carpeta'] = $falta_carpeta;
                    }
                }
            }
            return $this->tablaCarpetas();           
        }

        public function listar(){
            return $this->tablaCarpetas();
        }
    }



?>