<div class="container-fluid px-5" id="carpetas">
    <h1 class="text-center">Carpetas</h1>
    <div class="row pt-4 justify-content-between">
        <div class="col-4">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        
        </div>
        <div class="col-auto">
            <a class="btn btn-primary mb-3" href="index.php?action=abmCarpetas&order=nuevo">Nueva carpeta</a>
        </div>
    </div>
    <div class="row">
        <div class="col" id="tablaFija">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Celular</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Última inscripción</th>
                    <th>N° Bibliorato</th>
                    <th>Dado de baja</th>
                    <th>Falta carpeta</th>
                    <th colspan="2" class="text-center">Acciones</th>
                </tr>
                <?php
                #Muestra las filas segun la cantidad de carpetas
                    if(isset($lista_carpetas)){
                        foreach($lista_carpetas as $fila){
                            $faltaCarpeta = 'No';
                            $dadoBaja = 'No';
                            if($fila['falta_carpeta'] == true){
                                $faltaCarpeta = 'Si';
                            }
                            if($fila['dado_de_baja'] == true){
                                $dadoBaja = 'Si';
                            }
                            echo "<tr>
                                <td>$fila[id]</td>
                                <td>$fila[dni]</td>
                                <td>$fila[nombre]</td>
                                <td>$fila[apellido]</td>
                                <td>$fila[celular]</td>
                                <td>$fila[telefono]</td>
                                <td>$fila[email]</td>
                                <td>$fila[ultimaInsc]</td>
                                <td>$fila[bibliorato]</td>
                                <td>$dadoBaja</td>
                                <td>$faltaCarpeta</td>
                                <td><a href=\"index.php?action=abmCarpetas&order=modificar&id=$fila[id]\">Modificar</a></td>
                                <td><a href=\"index.php?action=abmCarpetas&order=borrar&id=$fila[id]\">Borrar</a></td>
                                </tr>";
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</div>
