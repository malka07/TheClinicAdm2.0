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
		onclick=location.href='../insumos/'; onKeyPress=location.href='../insumos/'; style='cursor:pointer';/>
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"></div>	
    <div class="col-sm-2"></div>	
  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Alta De Insumos</h4>
      <form class="needs-validation" novalidate action="grabar.php" method="post">
	  
<?php 
   require "../conexion.php";

  

    $sql = "SELECT * from insumos order by id_insumo";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $insumos[] = $resultado;
    }
   
    

?>

          <div class="col-md-6 mb-4">
            <label for="fecha_insumo">Fecha</label>
            <input type="date" class="form-control" name="fecha_insumo" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha Del Insumo.
            </div>
          </div>

     
          <div class="col-md-6 mb-4">
            <label for="descripcion_insumo">Descripcion</label>
            <input type="text" class="form-control" name="descripcion_insumo" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Descripcion Del Insumo.
            </div>
          </div>

        <div class="col-md-6 mb-4">
            <label for="precio_insumo">Precio</label>
            <input type="text" class="form-control" name="precio_insumo" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Precio Del Insumo.
            </div>
          </div>
      
  

           <div class="col-md-6 mb-4">
            <label for="cantidad_insumo">Cantidad</label>
            <input type="text" class="form-control" name="cantidad_insumo" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Cantidad Del Insumo.
            </div>
          </div>
        

        
         
     

</div>
    </div>
     <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
      </form>
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
