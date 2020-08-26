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
							onclick=location.href='../pacientes/'; 
							onKeyPress=location.href='../pacientes/'; 
							style='cursor:pointer';/>
	</h2>
	</div>
    <div class="col-sm-2">
		<img border="0" src="../img/borrar.png" width="48" height="48" title="Eliminar" 
						<?php echo " onclick=location.href='" 
												. "cuidado.php?id_paciente=".$_GET['id_paciente'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id_paciente=".$_GET['id_paciente'] . "'"; ?>												
						style='cursor:pointer';/>
	
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	

  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Modificar Datos Del Paciente</h4>
      <form class="needs-validation" novalidate action="modi.php" method="POST">
	  
<?php 
   
   require "../conexion.php";
   

   $sql = "SELECT * from pacientes where id_paciente = " . $_GET['id_paciente'];
   $query = $mysqli->query($sql);
   while($resultado = $query->fetch_assoc()) {
         $pacientes[] = $resultado;
     }  
  
     $sql = "SELECT * from clinicos order by id_clinico";
     $query = $mysqli->query($sql);
     while($resultado = $query->fetch_assoc()) {
           $clinicos[] = $resultado;
       }   
	
  echo "<input type='hidden' name='id_paciente' value=" .$_GET['id_paciente'] .">"; 
  
?>  
	  
        
          <div class="col-md-6 mb-4">
            <label for="nombre_paciente">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre_paciente" placeholder="" value=<?php echo "'".$pacientes[0]['nombre_paciente']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Paciente.
            </div>
          </div>
         
         
          <div class="col-md-6 mb-4">
            <label for="apellido_paciente">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido_paciente" placeholder="" value=<?php echo "'".$pacientes[0]['apellido_paciente']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Apellido Del Paciente.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="dni_paciente">DNI:</label>
            <input type="text" class="form-control" id="dni" name="dni_paciente" placeholder="" value=<?php echo "'".$pacientes[0]['dni_paciente']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El DNI Del Paciente.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="domicilio_paciente">Domicilio:</label>
            <input type="text" class="form-control" id="domicilio" name="domicilio_paciente" placeholder="" value=<?php echo "'".$pacientes[0]['domicilio_paciente']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Domicilio Del Paciente.
            </div>
          </div>
               
          <div class="col-md-6 mb-4">
            <label for="telefono_paciente">Telefono:</label>
            <input type="text" class="form-control" id="apellido" name="telefono_paciente" placeholder="" value=<?php echo "'".$pacientes[0]['telefono_paciente']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Telefono Del Paciente.
            </div>
          </div> 
         
          <div class="col-md-6 mb-4">
            <label for="edad_paciente">Edad:</label>
            <input type="text" class="form-control" id="edad" name="edad_paciente" placeholder="" value=<?php echo "'".$pacientes[0]['edad_paciente']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Edad Del Paciente.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="provincia_paciente">Provincia:</label>
            <input type="text" class="form-control" id="edad" name="provincia_paciente" placeholder="" value=<?php echo "'".$pacientes[0]['provincia_paciente']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Provincia Del Paciente.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="barrio_paciente">Barrio:</label>
            <input type="text" class="form-control" id="edad" name="barrio_paciente" placeholder="" value=<?php echo "'".$pacientes[0]['barrio_paciente']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Barrio Del Paciente.
            </div>
          </div>
         
                    
          <div class="col-md-6 mb-4">
            <label for="fech_nac_paciente">Fecha De Nacimiento:</label>
            <input type="date" class="form-control" id="fecha_nac" name="fech_nac_paciente" placeholder="" value=<?php echo "'".$pacientes[0]['fech_nac_paciente']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha De Nacimiento Del Paciente.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="historia_paciente">Historia Clinica:</label>
            <input type="text" class="form-control" id="notas" name="historia_paciente" placeholder="" value=<?php echo "'".$paciente[0]['historia_paciente']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar Alguna Historia Clinica.
            </div>
          </div>
          
          <div class="col-md-6 mb-4">
            <label for="obra_soc_paciente">Obra Social:</label>
            <input type="text" class="form-control" id="fecha_nac" name="obra_soc_paciente" placeholder="" value=<?php echo "'".$pacientes[0]['obra_soc_paciente']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Obra Social Del Paciente.
            </div>
          </div>

          <div class="col-md-6 mb-4">
           <label for="medico">Clinico</label>
           <select class="custom-select d-block w-100" name="medico_paciente" required>
           <?php 
				     $long = count($clinicos);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
				     echo " value=" .$clinicos[$i]['id_clinico'] .">";				
                 echo $clinicos[$i]['nombre_clinico'];
                 echo $clinicos[$i]['apellido_clinico'];
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó Seleccionar Un Clinico De Cabecera.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="email_paciente">Email:</label>
            <input type="text" class="form-control" id="fecha_nac" name="email_paciente" placeholder="" value=<?php echo "'".$pacientes[0]['email_paciente']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Email Del Paciente.
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
