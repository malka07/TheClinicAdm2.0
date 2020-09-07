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
							onclick=location.href='../medicamentos/'; 
							onKeyPress=location.href='../medicamentos/'; 
							style='cursor:pointer';/>
	</h2>
	</div>
    <div class="col-sm-2">
		<img border="0" src="../img/borrar.png" width="48" height="48" title="Eliminar" 
						<?php echo " onclick=location.href='" 
												. "cuidado.php?id_medicamento=".$_GET['id_medicamento'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id_medicamento=".$_GET['id_medicamento'] . "'"; ?>												
						style='cursor:pointer';/>
	
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	

  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Modificar Datos De Los Medicamentos</h4>
      <form class="needs-validation" novalidate action="modi.php" method="post">
	  
<?php 
   
   require "../conexion.php";

   $sql = "SELECT * from medicamentos where id_medicamento = " . $_GET['id_medicamento'];
   $query = $mysqli->query($sql);
   while($resultado = $query->fetch_assoc()) {
         $medicamentos[] = $resultado;
     }  

     $sql = "SELECT * from formato order by id_formato";
     $query = $mysqli->query($sql);
     while($resultado = $query->fetch_assoc()) {
           $formato[] = $resultado;
       }       
	
	echo "<input type='hidden' name='id_medicamento' value=" .$_GET['id_medicamento'] .">"; 
?>  
	  
        
          <div class="col-md-6 mb-4">
            <label for="nombre_medicamento">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre_medicamento" placeholder="" value=<?php echo "'".$medicamentos[0]['nombre_medicamento']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Medicamento.
            </div>
          </div>
         
          <div class="col-md-6 mb-4">
            <label for="farmaco_medicamento">Farmaco:</label>
            <input type="text" class="form-control" id="farmaco" name="farmaco_medicamento" placeholder="" value=<?php echo "'".$medicamentos[0]['farmaco_medicamento']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Farmaco Del Medicamento.
            </div>
          </div>
         
          <div class="col-md-6 mb-4">
            <label for="contenido_medicamento">Contenido:</label>
            <input type="text" class="form-control" id="contenido" name="contenido_medicamento" placeholder="" value=<?php echo "'".$medicamentos[0]['contenido_medicamento']."'" ?> required>
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
				     echo " value=" .$formato[$i]['nombre_formato'] .">";				
                 echo $formato[$i]['nombre_formato'];
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó Seleccionar El Formato Del Medicamento.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="cantidad_medicamento">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad_medicamento" placeholder="" value=<?php echo "'".$medicamentos[0]['cantidad_medicamento']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Cantidad Del Medicamento.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="vencimiento_medicamento">Vencimiento:</label>
            <input type="date" class="form-control" id="vencimiento" name="vencimiento_medicamento" placeholder="" value=<?php echo "'".$medicamentos[0]['vencimiento_medicamento']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Vencimiento Del Medicamento.
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
