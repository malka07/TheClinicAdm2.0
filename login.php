<?php
   require "metodos.php";
?>  
  
  
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/disc.jpg" alt="" width="72" height="72">
    <h2>JDL S.A</h2>
    <p class="lead"> Servicios Medicos.</p>
  </div>


<?php

require "conexion.php"; 
 
   $usuario_login = $_POST['usuario_login'];
   $contraseña_login = $_POST['contraseña_login'];
   
 $consulta = mysqli_query ($mysqli, "SELECT * FROM logins WHERE usuario_login = '$usuario_login' AND contraseña_login = '$contraseña_login'");
 if(!$consulta){ 
    echo mysqli_error($mysqli);
    exit;
  }
  if($usuario_login = mysqli_fetch_assoc($consulta)) {
   header("HTTP/1.1 302 Moved Temporarily"); 
   header("INGRESO SATISFACTORIO"); 
   header("Location: ../panel/"); 
  
 }else{
 echo 'El Usuario O Contraseña Es Incorrecto, <a href="index.php">Vuelva A Intenarlo</a>.<br/>';
 }

?>
<a href="../">	 <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>

  </footer>
</div>

</html>



