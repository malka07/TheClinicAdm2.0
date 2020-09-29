<!doctype html>
<html>
<?php 
    require "../metodos.php";
?>

  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
  <div class="row">
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
							onclick=location.href='../panel/'; 
							onKeyPress=location.href='../panel/'; 
							style='cursor:pointer';/>
	</h2>
	</div>
    <div class="col-sm-2">
		<img border="0" src="../img/borrar.png" width="48" height="48" title="Eliminar" 
						<?php echo " onclick=location.href='" 
												. "cuidado2.php?id_pago=".$_GET['id_pago'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado2.php?id_pago=".$_GET['id_pago'] . "'"; ?>												
						style='cursor:pointer';/>
	
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	

  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/jdlsa.png" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Modificar Datos De Los Pagos</h4>
      <form class="needs-validation" novalidate action="modi2.php" method="POST">
	  
<?php 
   require "../conexion.php";
    $sql = "SELECT * from pagos where id_pago = " . $_GET['id_pago'];
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $pagos[] = $resultado;
    }     

    $sql = "SELECT * from insumos order by id_insumo";
    $query = $mysqli->query($sql);
    while($resultado = $query->fetch_assoc()) {
          $insumos[] = $resultado;
      }
	
      echo "<input type='hidden' name='id_pago' value=" .$_GET['id_pago'] .">"; 
?>  
	  
      
          <div class="col-md-6 mb-4">
            <label for="fecha_pago">Fecha De Pago:</label>
            <input type="date" class="form-control" id="fecha" name="fecha_pago" placeholder="" value=<?php echo "'".$pagos[0]['fecha_pago']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha Del Pago.
            </div>
          </div>
      

          <div class="col-md-6 mb-4">
            <label for="descripcion_pago">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion_pago" placeholder="" value=<?php echo "'".$pagos[0]['descripcion_pago']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar Una Descripcion Del Recibo
            </div>
          </div>
          
          <div class="col-md-6 mb-4">
            <label for="cantidad_pago">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad_pago" placeholder="" value=<?php echo "'".$pagos[0]['cantidad_pago']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar Una Cantidad Del Pago.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="liqui_pago">Liquidacion</label>
            <input type="text" class="form-control" id="liquidaciones" name="liqui_pago" placeholder="" value=<?php echo "'".$pagos[0]['liqui_pago']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Liquidacion
            </div>
          </div>


		</div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Modificar</button>
      </form>
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
