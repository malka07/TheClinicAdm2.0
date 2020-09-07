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
							onclick=location.href='../historiales/'; 
							onKeyPress=location.href='../historiales/'; 
							style='cursor:pointer';/>
	</h2>
	</div>
    <div class="col-sm-2">
		<img border="0" src="../img/borrar.png" width="48" height="48" title="Eliminar" 
						<?php echo " onclick=location.href='" 
												. "cuidado.php?id_historial=".$_GET['id_historial'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id_historial=".$_GET['id_historial'] . "'"; ?>												
						style='cursor:pointer';/>
	
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	

  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Modificar Datos De Los Historiales</h4>
      <form class="needs-validation" novalidate action="modi.php" method="POST">
	  
<?php 
   require "../conexion.php";
    $sql = "SELECT * from historiales where id_historial = " . $_GET['id_historial'];
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $historiales[] = $resultado;
    }  
   
    $sql = "SELECT * from clinicos order by id_clinico";
    $query = $mysqli->query($sql);
    while($resultado = $query->fetch_assoc()) {
          $clinicos[] = $resultado;
      }
     
      $sql = "SELECT * from pacientes order by id_paciente";
      $query = $mysqli->query($sql);
      while($resultado = $query->fetch_assoc()) {
            $pacientes[] = $resultado;
        }
	
	echo "<input type='hidden' name='id_historial' value=" .$_GET['id_historial'] .">"; 
?>  
	  
    <div class="col-md-6 mb-4">
            <label for="fecha_historial">Fecha</label>
            <input type="date" class="form-control" name="fecha_historial" placeholder="" value=<?php echo "'".$historiales[0]['fecha_historial']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha Del Historial.
            </div>
          </div>
        
          <div class="col-md-6 mb-4">
           <label for="clinico">Medico</label>
           <select class="custom-select d-block w-100" name="clinico_historial" required>
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
              Faltó Seleccionar Un Medico.
            </div>
          </div>  

          <div class="col-md-6 mb-4">
           <label for="paciente">Paciente</label>
           <select class="custom-select d-block w-100" name="paciente_historial" required>
           <?php 
				     $long = count($pacientes);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
             echo " value=" .$pacientes[$i]['nombre_paciente'] .",".$pacientes[$i]['apellido_paciente'] .">";				
                 echo $pacientes[$i]['nombre_paciente'];
                 echo $pacientes[$i]['apellido_paciente'];
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó Seleccionar Un Paciente.
            </div>
          </div>  
        

        
        <div class="col-md-6 mb-4">
            <label for="observacion_historial">Observaciones</label>
            <input type="text" class="form-control" name="observacion_historial" placeholder="" value=<?php echo "'".$historiales[0]['observacion_historial']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar Una Observacion.
            </div>
          </div>
      
         

          <div class="col-md-6 mb-4">
            <label for="diagnostico_historial">Diagnostico</label>
            <input type="text" class="form-control" name="diagnostico_historial" placeholder="" value=<?php echo "'".$historiales[0]['diagnostico_historial']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Diagnostico.
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
