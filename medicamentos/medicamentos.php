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
		onclick=location.href='../medicamentos/'; onKeyPress=location.href='../medicamentos/'; style='cursor:pointer';/>
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"></div>	
    <div class="col-sm-2"></div>	
  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Alta De Medicamentos</h4>
      <form class="needs-validation" novalidate action="grabar.php" method="post">
	  
<?php 
   require "../conexion.php";

  

    $sql = "SELECT * from medicamentos order by id_medicamento";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $medicamentos[] = $resultado;
    }
   
    
    $sql = "SELECT * from formato order by id_formato";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $formato[] = $resultado;
    }

?>

          <div class="col-md-6 mb-4">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre_medicamento" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Medicamento.
            </div>
          </div>

     
          <div class="col-md-6 mb-4">
            <label for="farmaco">Farmaco</label>
            <input type="text" class="form-control" name="farmaco_medicamento" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Farmaco Del Medicamento.
            </div>
          </div>

        <div class="col-md-6 mb-4">
            <label for="contenido">Contenido</label>
            <input type="text" class="form-control" name="contenido_medicamento" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Contenido Del Medicamento.
            </div>
          </div>
      
        
          <div class="col-md-6 mb-4">
           <label for="formato">Formato</label>
           <select class="custom-select d-block w-100" name="formato_medicamento" required>
           <?php 
				     $long = count($formato);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
				     echo " value=" .$formato[$i]['id_formato'] .">";				
                 echo $formato[$i]['nombre_formato'];
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó Seleccionar Un formato De Medicamento.
            </div>
          </div>
  

           <div class="col-md-6 mb-4">
            <label for="cantidad">Cantidad</label>
            <input type="text" class="form-control" name="cantidad_medicamento" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Cantidad Del Medicamento.
            </div>
          </div>
        

          <div class="col-md-6 mb-4">
            <label for="vencimiento">Fecha De Vencimiento</label>
            <input type="date" class="form-control" name="vencimiento_medicamento" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha De Nacimiento Del Integrante.
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
