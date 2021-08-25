<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi sistema</title>
</head>


<body>

<header>
    <h1>Mi Sistema</h1>
</header>

<?php
include "Views/style.php";
include "modules/navegacion.php";
?>

<section>
    <?php
        $mvc = new MVController();
        $mvc -> obtenerPágina();
     ?>
</section>

</body>
</html>
