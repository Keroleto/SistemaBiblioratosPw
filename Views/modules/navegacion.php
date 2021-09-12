
<!--Pasa parametros al archivo php Con signo ? separa los parametros, 
    variable1=valor1&variable2=valor2 Estos parametros van por el metodo GET-->
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo ROOT_PATH;?>">Sistema de Biblioratos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?action=inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=biblioratos">Biblioratos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=abmCarpetas">Carpetas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=login">Ingresar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>