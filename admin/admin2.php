<!doctype html>
<html>
<?php 
    require "../metodos.php";
?>

<body background="../img/admin2.jpg" style="background-size:cover";>  
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="42" height="42" title="Volver al menú" 
    onclick=location.href='../admin/'; onKeyPress=location.href='../admin/'; style='cursor:pointer';/>
    <label for="boton_atras"><h6>Atrás</h6></label>
    </h2></div>

  <div class="container">
 <div class="py-5 text-center">
  <div class="row">

  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa.png" alt="" width="62" height="62"></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Alta De Pagos a Proveedores</h4>
      <form class="needs-validation" novalidate action="grabar2.php" method="post">


<?php 
   require "../conexion.php";

    $sql = "SELECT * from pagos order by id_pago";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $pagos[] = $resultado;
    }

    $sql = "SELECT * from insumos order by id_insumo";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $insumos[] = $resultado;
    }

    
   

?>
<DIV ALIGN=center>
          <div class="col-md-6 mb-4">
            <label for="fecha_pago">Fecha</label>
            <input type="date" class="form-control" name="fecha_pago" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar la fecha del pago
            </div>
          </div>
        

        <div class="col-md-6 mb-4">
           <label for="descripcion">Descripción</label>
           <select class="custom-select d-block w-100" name="descripcion_pago" required>
           <?php 
				     $long = count($insumos);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
				     echo " value=" .$insumos[$i]['descripcion_insumo'] ."," .$insumos[$i]['cantidad_insumo'] . ">";
                 echo $insumos[$i]['descripcion_insumo'];
                 
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó ingresar una descripción del Pago
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="cantidad_pago">Cantidad</label>
            <input type="text" class="form-control" name="cantidad_pago" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar la cantidad
            </div>
          </div>

          
          <div class="col-md-6 mb-4">
            <label for="liqui_pago">Monto</label>
            <input type="text" class="form-control" name="liqui_pago" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el monto
            </div>
          </div>
  
</div>
    </div>
     <hr class="mb-4">
     <DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-5" type="submit">Guardar</button>
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
