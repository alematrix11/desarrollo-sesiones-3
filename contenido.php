<?php

    //Cada vez que utilices sesiones se debe declarar el siguiente metodo
    session_start();

    //Si exite la sesion que fue iniciada anteriormente, en pantalla se mostrara un mensaje
    if(isset($_SESSION)){
        
        echo '<br> <h4>Usted inicio sesion y puede acceder al contenido</h4>';
        
        echo ' <h2><a class="ml-4" href="cerrar.php">Cerrar sesion</a></h2>';
        
    }
    else{
        header('location:index.php');
    }