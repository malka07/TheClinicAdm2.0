<html>
<?php

	require "../conexion.php";
  require "../metodos.php";




 $sql = "UPDATE analisis SET fecha_analisis='" . ($_POST['fecha_analisis']) 				."'," .
    "clinico_analisis='" 		. $_POST['clinico_analisis']									."'," .			
    "paciente_analisis='" 		. $_POST['paciente_analisis']									."'," .		
    "resultados_analisis='" 		. $_POST['resultados_analisis']									."'," .		
    "obser_analisis='" 	. $_POST['obser_analisis']								."'" .			
		" where id_analisis =" . ($_POST['id_analisis']) ;						
								
 
?>								

<body background="../img/analisis2.jpg">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/jdlsa.png" alt="" width="72" height="72">
    <h2>JDL S.A</h2>
    <p class="lead">Modificación de Análisis Clínicos y Servicios / Profesiones</p>
  </div>
 
 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../analisis/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Datos modificados correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

<a href="../analisis">	 <hr class="mb-4">
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




