<!doctype html>
<html>
<?php 
    require "../metodos.php";
?>
<head>
  <meta http-equiv="Content-Language" content="es">
  <meta name="GENERATOR" content="Microsoft FrontPage 5.0">
  <meta name="ProgId" content="FrontPage.Editor.Document">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Listado De Recibos</title>
</head>

<body background="../img/admin2.jpg" style="background-size:cover";>
  <div class="col-md"><h2>
		<img border="0" src="../img/atras.png" width="42" height="42" title="Volver al menú" 
    onclick=location.href='../admin/'; onKeyPress=location.href='../admin/'; style='cursor:pointer';/>
    <label for="boton_atras"><h6>Atrás</h6></label>
  </h2></div>

    <div class="container">
  <div class="py-5 text-center">
    <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa2.png" alt="" width="62" height="62"></div>
    <div class="col-md"><h5>JDL S.A</h5></div>
    <p class="lead "><h4><strong>Servicios Médicos e Informáticos</strong></h4></p>
  <hr>
  <div class="row">
  </h2></div>

    <div class="col-sm-2 offset-md-1">
		<img border="0" src="../img/delete.png" width="48" height="48" title="Eliminar" 
            <?php echo " onclick=location.href='" 
												. "cuidado.php?id_recibo=".$_GET['id_recibo'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id_recibo=".$_GET['id_recibo'] . "'"; ?>												
						style='cursor:pointer';/>
            <label for="boton_eliminar"><h6>Eliminar registro</h6></label>
	
	</h2></div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
  </div>

    <div class="col-md-12 order-md-1">
    <DIV ALIGN=center>
      <h4 class="mb-4">Modificar datos de los recibos de sueldo</h4>
      <form class="needs-validation" novalidate action="modi.php" method="POST">
      </div>

	  
<?php 
   require "../conexion.php";
    $sql = "SELECT * from recibos where id_recibo = " . $_GET['id_recibo'];
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $recibos[] = $resultado;
    }  
   
    $sql = "SELECT * from clinicos order by id_clinico";
    $query = $mysqli->query($sql);
    while($resultado = $query->fetch_assoc()) {
          $clinicos[] = $resultado;
      }
     
	
      echo "<input type='hidden' name='id_recibo' value=" .$_GET['id_recibo'] .">"; 
?>  
	  
    <DIV ALIGN=center>
          <div class="col-md-6 mb-4">
            <label for="fecha_recibo">Fecha de recibo</label>
            <input type="date" class="form-control" id="fecha" name="fecha_recibo" placeholder="" value=<?php echo "'".$recibos[0]['fecha_recibo']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar la fecha del recibo
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="descripcion_recibo">Descripción</label>
            <textarea type="text" class="form-control" id="descripcion" rows="4" name="descripcion_recibo" placeholder="" value=<?php echo "'".$recibos[0]['descripcion_recibo']."'" ?> required></textarea>
            <div class="invalid-feedback">
              Faltó ingresar una descripción del recibo
            </div>
          </div>
      

          <div class="col-md-6 mb-4">
           <label for="clinico_recibo">Médico</label>
           <select class="custom-select d-block w-100" name="clinico_recibo" required>
           <?php 
				     $long = count($clinicos);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
				     echo " value=" .$clinicos[$i]['nombre_clinico'] .",".$clinicos[$i]['apellido_clinico'] .">";				
                 echo $clinicos[$i]['nombre_clinico'];
                 echo $clinicos[$i]['apellido_clinico'];
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó seleccionar un médico
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="liqui_recibo">Liquidación</label>
            <input type="text" class="form-control" id="liquidaciones" name="liqui_recibo" placeholder="" value=<?php echo "'".$recibos[0]['liqui_recibo']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar la liquidación
            </div>
          </div>
          </div>


        <hr class="mb-4">
        <DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-5" type="submit">Modificar</button>
      </form>
    </div>
  </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020 - JDL S.A</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>
</body>
</html>
