<!--#Tiene como fin dar una macroestructura a todo el sitio-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles.css">
    <title>Mi sistema</title>
</head>
<body>
    <header>

    </header>

    <?php include "modules/navegacion.php";?>

    <section>
        <?php
            $mvc = new MVController();
            $mvc-> route(); 
        ?>
    </section>

    <footer class="container-fluid">
        <div class="row pt-4">
            <div class="col">
                <p>Sistema de Biblioratos</p>
            </div>
        </div>   
    </footer>

    <!--Scripts de bootrstrap-->
    <script src="views/js/bootstrap.min.js"></script>
    <script src="views/js/popper.min.js"></script>
</body>
</html>