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

<body background="../img/turnos2.jpg" style="background-size:cover";>
<div class="container">
  <div class="py-5 text-center">
  <div class="col-sm-2 mt-2 mb-1 p-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
    <img class="d-block mx-auto mb-1" src="../img/jdlsa.png" alt="" width="72" height="72"></div>
    <p class="lead"><h4><strong>Modificación de Usuarios y Servicios / Profesiones</strong></h4></p>
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
<DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-5" type="submit">Volver</button>
        </div>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>-->
  </footer>
</div>




