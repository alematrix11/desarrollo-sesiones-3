<?php

//Cada vez que utilices sesiones se debe declarar el siguiente metodo
session_start();

?>

<!DOCTYPE html>

<html lang="en">
  
<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Sesiones con PHP</title>

</head>

<body>
    
    <h1>Sesiones con PHP</h1>
    
    <!--Solo para iniciar sesion-->
    <a class="ml-4" href="sesion.php">Iniciar sesion</a>
    
    <!--Solo para se accesible si se inicio sesion-->
    <a class="ml-4" href="contenido.php">Contenido protegido</a>
    
    <!--Se crea un mensaje dinamico para cuando este iniciada la sesion-->
    <!--Se usa el ? para mostrar la condicion verdadera, y se usa : para mostrar la condicion falsa-->
    <h1>Usted esta como: <?php echo isset($_SESSION['admin']) ? $_SESSION['admin'].' , puede navegar por la plataforma ' : 'invitado' ?></h1>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>

</html>