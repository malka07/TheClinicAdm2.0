<html>
<?php

	require "../conexion.php";
  require "../metodos.php";




 $sql = "UPDATE turnos SET fecha_turno='" . ($_POST['fecha_turno']) 				."'," .
    "horario_turno='" 		. $_POST['horario_turno']									."'," .			
    "paciente_turno='" 		. $_POST['paciente_turno']									."'," .		
    "clinico_turno='" 		. $_POST['clinico_turno']									."'," .		
    "comentarios_turno='" 	. $_POST['comentarios_turno']								."'" .			
		" where id_turno =" . ($_POST['id_turno']) ;						
								
 
?>								

  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/disc.jpg" alt="" width="72" height="72">
    <h2>JDL S.A</h2>
    <p class="lead">Modificacion De Turnos y Servicios / Profesiones.</p>
  </div>
 
 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../turnos/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Datos modificados correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

<a href="../turnos">	 <hr class="mb-4">
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




