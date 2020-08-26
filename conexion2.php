<?php
    
  // Variables de la conexion a la DB
     $mysqli = new mysqli("sql205.byethost31.com","b31_26518949","garfio1234","b31_26518949_theclinicadm"); //localhost
  // Comprobamos la conexion
    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
  //echo "Conexion exitosa";
		mysqli_set_charset($mysqli,"utf8");
    }
    
    ?>
