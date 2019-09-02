<?php

    //Cada vez que utilices sesiones se debe declarar el siguiente metodo
    session_start();
    
    $login = 'Alejandro';

    //Se crea una constante para relacionar con la variable de sesion
    $_SESSION['admin'] = $login;
    
    //Se establece un if con un isset para verificar que existe la varialble
    //Se comprueba que la sesion esta iniciada
    if(isset($_SESSION['admin'])){
        
        //Si la sesion se inicio de forma correcta, se actualiza la pagina con el index
        header('location:index.php');
        
    }
    else{
        echo '<br> La sesion aun no ha sido iniciada';
    }

    //var_dump ($_SESSION);