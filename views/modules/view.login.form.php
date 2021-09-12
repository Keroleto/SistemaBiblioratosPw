
<div class="container" id="logueo">
    <div class="row justify-content-center">
        <div class="col-4">
            <h2 class="titulo text-center">Iniciar sesión</h2>
            <form action="index.php?action=login" method="POST" class="formulario">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" name ="usuario" id="usuario" placeholder="Usuario">
                </div>
                <div class="mb-3">
                    <label for="clave" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="clave" id="clave" placeholder="Contraseña" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary mb-3">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>
</div>
