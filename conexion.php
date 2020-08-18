<?php
    
  // Variables de la conexion a la DB
     $mysqli = new mysqli("lubnenikhwlwdz","5d2aa437c098caaf91bc4a0f3b31bce389848f72d82c74aa987b13eb010ba773","","df1k34d9omoppf"); //localhost
  // Comprobamos la conexion
    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
  //echo "Conexion exitosa";
		mysqli_set_charset($mysqli,"utf8");
    }
    
    ?>
