<html>
<?php

	require "../conexion.php";
  require "../metodos.php";




$sql = "UPDATE insumos SET fecha_insumo='" . ($_POST['fecha_insumo']) 				."'," .
    "descripcion_insumo='" 		. $_POST['descripcion_insumo']									."'," .			
    "precio_insumo='" 		. $_POST['precio_insumo']									."'," .					
  	"cantidad_insumo='" 	. $_POST['cantidad_insumo']								."'" .			
		" where id_insumo =" . ($_POST['id_insumo']) ;							
            
 
?>								

  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/jdlsa.png" alt="" width="72" height="72">
    <h2>JDL S.A</h2>
    <p class="lead">Modificacion De Insumos y Servicios / Profesiones.</p>
  </div>
 
 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../insumos/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Datos modificados correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

<a href="../insumos">	 <hr class="mb-4">
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




