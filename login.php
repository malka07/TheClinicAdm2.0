<?php
   require "metodos.php";
?>  
  
  
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/jdlsa.png" alt="" width="72" height="72">
    <h2>JDL S.A</h2>
    <p class="lead"> Servicios Medicos.</p>
  </div>


<?php

  require "conexion.php"; 
 
  $usuario_login = $_POST['usuario_login'];
  $contraseña_login = $_POST['contraseña_login'];
  //$permiso_login = $_POST['permiso_login']; 

  $consulta = mysqli_query ($mysqli, "SELECT * FROM logins WHERE usuario_login = '$usuario_login' AND contraseña_login = '$contraseña_login'");

  $resultados = mysqli_fetch_assoc($consulta);

 if(!$consulta){ 
    echo mysqli_error($mysqli);
    exit;
  }

 if($resultados['usuario_login'] = $usuario_login && $resultados['contraseña_login'] = $contraseña_login){
  if($resultados['permiso_login'] == 1){
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("INGRESO SATISFACTORIO"); 
    header("Location: ../panel/");  
  }
  elseif ($resultados['permiso_login'] == 2){
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("INGRESO SATISFACTORIO"); 
    header("Location: ../panel2/");  
  }
  elseif ($resultados['permiso_login'] == 3){
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("INGRESO SATISFACTORIO"); 
    header("Location: ../panel3/");  
  }
  elseif ($resultados['permiso_login'] == 4){
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("INGRESO SATISFACTORIO"); 
    header("Location: ../panel4/");  
  }
  elseif ($resultados['permiso_login'] == 5){
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("INGRESO SATISFACTORIO"); 
    header("Location: ../panel5/");  
  }
  }else{
 echo 'El Usuario O Contraseña Es Incorrecto, <a href="index.php">Vuelva A Intenarlo</a>.<br/>';
 }


$mysqli->close();

?>

<a href="../">	 <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>

  </footer>
</div>

</html>



