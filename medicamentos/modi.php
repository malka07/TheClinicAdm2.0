<html>
<?php

	require "../conexion.php";
  require "../metodos.php";




$sql = "UPDATE medicamentos SET nombre_medicamento='" . ($_POST['nombre_medicamento']) 				."'," .
    "farmaco_medicamento='" 		. $_POST['farmaco_medicamento']									."'," .			
    "contenido_medicamento='" 		. $_POST['contenido_medicamento']									."'," .			
    "formato_medicamento='" 		. $_POST['formato_medicamento']									."'," .			
    "cantidad_medicamento='" 		. $_POST['cantidad_medicamento']									."'," .			
  	"vencimiento_medicamento='" 	. $_POST['vencimiento_medicamento']								."'" .			
		" where id_medicamento =" . ($_POST['id_medicamento']) ;							
            
 
?>								

  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/disc.jpg" alt="" width="72" height="72">
    <h2>JDL S.A</h2>
    <p class="lead">Modificacion De Medicamentos y Servicios / Profesiones.</p>
  </div>
 
 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../medicamentos/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Datos modificados correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

<a href="../medicamentos">	 <hr class="mb-4">
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




