<?php
   require "metodos.php";
?>  
  
  
  <body class="bg-dark">
    <div class="container">
  <div class="py-5 text-center text-light mt-5">
  <div class="col-md"><img class="d-block mx-auto mb-1" src="./img/jdlsa2.png" alt="" width="62" height="62"></div>
  <div class="col-md text-white"><h5>JDL S.A</h5></div>
  <p class="col-md text-white"><h4><strong>Servicios Médicos e Informáticos</strong></h4></p>
  <hr>


<?php

  require "conexion.php"; 
 
  $dni_usuario = $_POST['dni_usuario'];
  $contraseña_usuario = $_POST['contraseña_usuario'];
  //$permiso_login = $_POST['permiso_login']; 

  $consulta = mysqli_query ($mysqli, "SELECT * FROM usuarios WHERE dni_usuario = '$dni_usuario' AND contraseña_usuario = '$contraseña_usuario'");

  $resultados = mysqli_fetch_assoc($consulta);

 if(!$consulta){ 
    echo mysqli_error($mysqli);
    exit;
  }

 if($resultados['dni_usuario'] = $dni_usuario && $resultados['contraseña_usuario'] = $contraseña_usuario){
  if($resultados['permiso_usuario'] == 1){
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("INGRESO SATISFACTORIO"); 
    header("Location: ../TheClinicAdm2.0/panel/");  
  }
  elseif ($resultados['permiso_usuario'] == 2){
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("INGRESO SATISFACTORIO"); 
    header("Location: ../TheClinicAdm2.0/panel2/");  
  }
  elseif ($resultados['permiso_usuario'] == 3){
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("INGRESO SATISFACTORIO"); 
    header("Location: ../TheClinicAdm2.0/panel3/");  
  }
  elseif ($resultados['permiso_usuario'] == 4){
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("INGRESO SATISFACTORIO"); 
    header("Location: ../TheClinicAdm2.0/panel4/");  
  }
  elseif ($resultados['permiso_usuario'] == 5){
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("INGRESO SATISFACTORIO"); 
    header("Location: ../TheClinicAdm2.0/panel5/");  
  }
  }else{
 echo 'El usuario o contraseña es incorrecto, <a href="index.php">Vuelva a intentarlo</a>.<br/>';
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



