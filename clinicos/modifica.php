<!doctype html>
<html>
<?php 
    require "../metodos.php";
?>

<body background="../img/medico2.jpg" style="background-size:cover";>
  <div class="col-md"><h2>
		<img border="0" src="../img/atras.png" width="42" height="42" title="Volver a médicos" 
		onclick=location.href='../clinicos/'; onKeyPress=location.href='../clinicos/'; style='cursor:pointer';/>
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
												. "cuidado.php?id_clinico=".$_GET['id_clinico'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id_clinico=".$_GET['id_clinico'] . "'"; ?>												
						style='cursor:pointer';/>
            <label for="boton_eliminar"><h6>Eliminar registro</h6></label>
	
	</h2></div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
</div>

    <div class="col-md-12 order-md-1">
    <DIV ALIGN=center>
      <h4 class="mb-4">Modificar datos del Médico</h4>
      <form class="needs-validation" novalidate action="modi.php" method="POST">

	  
<?php 
   
   require "../conexion.php";
   $sql = "SELECT * from clinicos where id_clinico = " . $_GET['id_clinico'];
   $query = $mysqli->query($sql);
   while($resultado = $query->fetch_assoc()) {
         $clinicos[] = $resultado;
     }  

     $sql = "SELECT * from especialidades order by id_esp_clinicos";
     $query = $mysqli->query($sql);
     while($resultado = $query->fetch_assoc()) {
           $especialidades[] = $resultado;
       }  
     
	echo "<input type='hidden' name='id_clinico' value=" .$_GET['id_clinico'] .">"; 
?>  
	      <DIV ALIGN=center>
          <div class="col-md-6 mb-4">
            <label for="nombre_clinico">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['nombre_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar el nombre del médico
            </div>
          </div>
         
         
          <div class="col-md-6 mb-4">
            <label for="apellido_clinico">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['apellido_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar el apellido del médico
            </div>
          </div>

         
          <div class="col-md-6 mb-4">
            <label for="edad_clinico">Edad:</label>
            <input type="text" class="form-control" id="edad" name="edad_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['edad_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar la edad del médico
            </div>
          </div>

         
          <div class="col-md-6 mb-4">
            <label for="domicilio_clinico">Domicilio:</label>
            <input type="text" class="form-control" id="direccion" name="domicilio_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['domicilio_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar el domicilio del médico
            </div>
          </div>
          
          <div class="col-md-6 mb-4">
            <label for="telefono_clinico">Teléfono:</label>
            <input type="text" class="form-control" id="direccion" name="telefono_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['telefono_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar el teléfono del médico
            </div>
          </div>
          
          <div class="col-md-6 mb-4">
            <label for="fech_nac_clinico">Fecha De Nacimiento:</label>
            <input type="date" class="form-control" id="fecha" name="fech_nac_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['fech_nac_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar la fecha de nacimiento del médico
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="email_clinico">Email:</label>
            <input type="text" class="form-control" id="email" name="email_clinico" placeholder="" value=<?php echo "'".$clinicos[0]['email_clinico']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar el Email Del médico
            </div>
          </div>
    </div>

    <div class="col-md-6 mb-4">
           <label for="esp_clinico">Especialidad</label>
           <select class="custom-select d-block w-100" name="esp_clinico" required>
           <?php 
				     $long = count($especialidades);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
             echo " value=" .$especialidades[$i]['nombre_especialidad'] .">";				
                 echo $especialidades[$i]['nombre_especialidad'];
              
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó seleccionar un permiso
            </div>
          </div>    
    
        <hr class="mb-4">
        <DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-5" type="submit">Modificar</button>
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
