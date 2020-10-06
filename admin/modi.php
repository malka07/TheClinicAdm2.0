<html>
<?php

	require "../conexion.php";
  require "../metodos.php";




 $sql = "UPDATE recibos SET fecha_recibo='" . ($_POST['fecha_recibo']) 				."'," .
    "descripcion_recibo='" 		. $_POST['descripcion_recibo']									."'," .			
    "clinico_recibo='" 		. $_POST['clinico_recibo']									."'," .		
    "liqui_recibo='" 		. $_POST['liqui_recibo']									."'" .				
		" where id_recibo =" . ($_POST['id_recibo']) ;						
								
 
?>								

<body background="../img/analisis2.jpg">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/jdlsa.png" alt="" width="72" height="72">
    <h2>JDL S.A</h2>
    <p class="lead">Modificación de Recibos y Servicios / Profesiones</p>
  </div>

 
 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../admin/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Datos modificados correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

<a href="../admin">	 <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>




