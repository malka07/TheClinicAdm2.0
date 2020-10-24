<html>
<?php

	require "../conexion.php";
  require "../metodos.php";




 $sql = "UPDATE historiales SET fecha_historial='" . ($_POST['fecha_historial']) 				."'," .
    "clinico_historial='" 		. $_POST['clinico_historial']									."'," .			
    "paciente_historial='" 		. $_POST['paciente_historial']									."'," .		
    "observacion_historial='" 		. $_POST['observacion_historial']									."'," .		
    "diagnostico_historial='" 	. $_POST['diagnostico_historial']								."'" .			
		" where id_historial =" . ($_POST['id_historial']) ;						
								
 
?>								

<body background="../img/historials.jpg" style="background-size:cover";>
    <div class="container">
  <div class="py-5 text-center">
  <div class="col-sm-2 mt-2 mb-1 p-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
    <img class="d-block mx-auto mb-4" src="../img/jdlsa.png" alt="" width="72" height="72">
    <p class="lead"><h4><strong>Modificación de Historiales y Servicios / Profesiones</strong></h4></p>
  </div>
 
 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../historiales/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Datos modificados correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

<a href="../historiales">	 <hr class="mb-4">
<DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-5" type="submit">Volver</button>
        </div>
        <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>




