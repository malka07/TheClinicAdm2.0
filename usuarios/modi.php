<html>
<?php

	require "../conexion.php";
  require "../metodos.php";




$sql = "UPDATE usuarios SET nombre_usuario='" . ($_POST['nombre_usuario']) 				."'," .
    "apellido_usuario='" 		. $_POST['apellido_usuario']									."'," .			
    "edad_usuario='" 		. $_POST['edad_usuario']									."'," .			
    "dni_usuario='" 		. $_POST['dni_usuario']									."'," .			
    "email_usuario='" 		. $_POST['email_usuario']									."'," .			
    "contraseña_usuario='" 		. $_POST['contraseña_usuario']									."'," .			
    "domicilio_usuario='" 		. $_POST['domicilio_usuario']									."'," .			
    "fecha_nac_usuario='" 		. $_POST['fecha_nac_usuario']									."'," .		
    "notas_usuario='" 		. $_POST['notas_usuario']									."'," .			
		"permiso_usuario='" 	. $_POST['permiso_usuario']								."'" .			
		" where id_usuario =" . ($_POST['id_usuario']) ;							
            
 
?>								

  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/disc.jpg" alt="" width="72" height="72">
    <h2>JDL S.A</h2>
    <p class="lead">Modificacion De Usuarios y Servicios / Profesiones.</p>
  </div>
 
 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../usuarios/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Datos modificados correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

<a href="../usuarios">	 <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>-->
  </footer>
</div>




