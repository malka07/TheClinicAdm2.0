<!doctype html>
<html>
<?php 
    require "../metodos.php";
?>

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

    <div class="col-sm-2">
		<img border="0" src="../img/delete.png" width="48" height="48" title="Eliminar" 
            <?php echo " onclick=location.href='" 
												. "cuidado2.php?id_pago=".$_GET['id_pago'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado2.php?id_pago=".$_GET['id_pago'] . "'"; ?>												
						style='cursor:pointer';/>
            <label for="boton_eliminar"><h6>Eliminar registro</h6></label>
	
	</h2></div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
  </div>

    <div class="col-md-12 order-md-1">
    <DIV ALIGN=center>
      <h4 class="mb-4">Modificar datos de pagos a proveedores</h4>
      <form class="needs-validation" novalidate action="modi.php" method="POST">
      </div>
    
      
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
	  
    <DIV ALIGN=center>
          <div class="col-md-6 mb-4">
            <label for="fecha_pago">Fecha De Pago</label>
            <input type="date" class="form-control" id="fecha" name="fecha_pago" placeholder="" value=<?php echo "'".$pagos[0]['fecha_pago']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar la fecha del pago
            </div>
          </div>
      

          <div class="col-md-6 mb-4">
            <label for="descripcion_pago">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion_pago" placeholder="" value=<?php echo "'".$pagos[0]['descripcion_pago']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar una descripción del pago
            </div>
          </div>
          
          <div class="col-md-6 mb-4">
            <label for="cantidad_pago">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad_pago" placeholder="" value=<?php echo "'".$pagos[0]['cantidad_pago']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar una cantidad de pago
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="liqui_pago">Liquidación</label>
            <input type="text" class="form-control" id="liquidaciones" name="liqui_pago" placeholder="" value=<?php echo "'".$pagos[0]['liqui_pago']."'" ?> required>
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
  </div> </div>

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
