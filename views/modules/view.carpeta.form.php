
<div class="container-fluid px-5" id="nuevaCarpeta">
    <?php
        if(!isset($carpeta)){
            echo "<h2 class=\"titulo text-center\">Nueva carpeta</h2>";
        }
        else{
            echo "<h2 class=\"titulo text-center\">Modificar carpeta</h2>";
        }
    ?>

    <div class="row pt-4 justify-content-center">
        <?php
            if(isset($carpeta)){
                $faltaCarpeta = 'No';
                $dadoBaja = 'No';
                if($carpeta['falta_carpeta'] == true){
                    $faltaCarpeta = 'Si';
                }
                if($carpeta['dado_de_baja'] == true){
                    $dadoBaja = 'Si';
                }
                echo "  <div class=\"col-3\">
                            <h3>Datos actuales</h3>
                            <p>DNI: $carpeta[dni] </p>
                            <p>Apellido: $carpeta[apellido] </p>
                            <p>Nombre: $carpeta[nombre] </p>
                            <p>Celular: $carpeta[celular] </p>
                            <p>Telefono: $carpeta[telefono] </p>
                            <p>Email: $carpeta[email] </p>
                            <p>Última inscripción: $carpeta[ultimaInsc] </p>
                            <p>N° de bibliorato: $carpeta[bibliorato] </p>
                            <p>Dado de baja: $dadoBaja </p>
                            <p>Falta carpeta: $faltaCarpeta </p>
                        </div>";           
            }
        ?>
        <div class="col-9">
            <form 
                <?php
                    if(!isset($docente)){
                        echo "action=\"index.php?action=abmCarpetas&order=insertar\"";
                    }
                    else{
                        echo "action=\"index.php?action=abmCarpetas&order=cambiar&id=$id\"";
                    }
                ?>
                method="POST" 
                class="row formulario justify-content-between">
                <fieldset class="col-4">
                    <legend class="w-auto">Datos personales</legend>
                    <div class="mb-3">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text" class="form-control" name ="dni" id="dni" placeholder="Documento">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name ="apellido" id="usuario" placeholder="Apellido">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name ="nombre" id="nombre" placeholder="Nombre">
                    </div>
                </fieldset>
                <fieldset class="col-3">
                    <legend>Datos de contácto</legend>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
                    </div>
                    <div class="mb-3">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="tel" class="form-control" name="celular" id="celular" placeholder="Celular">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico">
                    </div>
                </fieldset>
                <fieldset class="col-4">
                    <legend>Datos de inscripción</legend>
                    <div class="mb-3">
                        <label for="ultimaInsc" class="form-label">Última inscripción</label>
                        <input type="date" class="form-control" name="ultimaInsc" id="ultimaInsc">
                    </div>
                    <div class="mb-3">
                        <label for="bibliorato" class="form-label">N° de Bibliorato</label>
                        <input type="tel" class="form-control" name="bibliorato" id="bibliorato" placeholder="Bibliorato">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name= "dado_de_baja"  id="dado_de_baja">
                        <label class="form-check-label" for="dado_de_baja">Dado de baja</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name= "falta_carpeta"  id="falta_carpeta">
                        <label class="form-check-label" for="falta_carpeta">Falta carpeta</label>
                    </div>
                </fieldset>

                <div class="row mt-5 justify-content-center">
                    <div class="col-1">
                        <button type="submit" class="btn btn-primary mb-3">
                            <?php
                                if(!isset($carpeta)){
                                    echo "Agregar";
                                }
                                else{
                                    echo "Modificar";
                                }
                            ?>
                        </button>
                    </div>
                            </div>

            </form>
        </div>
    </div>
</div>
