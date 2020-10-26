<!doctype html>
<html>
<?php 
    require "../metodos.php";
?>

<body background="../img/pacientes2.jpg" style="background-size:cover";>

<div class="col-sm-2"><h2>
<img border="0" src="../img/atras.png" width="42" height="42" title="Volver al menú" 
onclick=location.href='javascript:history.go(-1)'; onKeyPress=location.href='javascript:history.go(-1)'; style='cursor:pointer';/>
<label for="boton_atras"><h6>Atrás</h6></label>
</h2></div>

  <div class="container">
  <div class="py-5 text-center">
  <div class="row">

  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa.png" alt="" width="62" height="62"></div>
  </div>

    <div class="col-md-12 order-md-1">
    <div class="col-md-12 order-md-1">
      <h4 class="mb-4 mt-4">Alta de Pacientes</h4>
      <form class="needs-validation" novalidate action="grabar.php" method="post">

   
<?php 
   require "../conexion.php";

    $sql = "SELECT * from pacientes order by id_paciente";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $pacientes[] = $resultado;
    }
   
    $sql = "SELECT * from clinicos order by id_clinico";
    $query = $mysqli->query($sql);
    while($resultado = $query->fetch_assoc()) {
          $clinicos[] = $resultado;
      }

?>
<DIV ALIGN=center>
          <div class="col-md-6 mb-4">
            <label for="nombre_paciente">Nombre</label>
            <input type="text" class="form-control" name="nombre_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el nombre del paciente
            </div>
          </div>
     
        
        <div class="col-md-6 mb-4">
            <label for="apellido_paciente">Apellido</label>
            <input type="text" class="form-control" name="apellido_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el apellido del paciente
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="dni_paciente">DNI</label>
            <input type="text" class="form-control" name="dni_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el DNI del paciente
            </div>
          </div> 
        
          <div class="col-md-6 mb-4">
            <label for="domicilio_paciente">Domicilio</label>
            <input type="text" class="form-control" name="domicilio_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el domicilio del paciente
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="telefono_paciente">Teléfono</label>
            <input type="text" class="form-control" name="telefono_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el teléfono del paciente
            </div>
          </div>
        
        <div class="col-md-6 mb-4">
            <label for="edad_paciente">Edad</label>
            <input type="text" class="form-control" name="edad_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar la edad del paciente
            </div>
          </div>
  
          <div class="col-md-6 mb-4">
            <label for="provincia_paciente">Provincia</label>
            <input type="text" class="form-control" name="provincia_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar la provincia del paciente
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="barrio_paciente">Barrio</label>
            <input type="text" class="form-control" name="barrio_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el barrio del paciente
            </div>
          </div>
           
          <div class="col-md-6 mb-4">
            <label for="fech_nac_paciente">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fech_nac_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar la fecha de nacimiento del paciente
            </div>
          </div>
       
          <div class="col-md-6 mb-4">
            <label for="historia_paciente">Nro historia clínica</label>
            <input type="text" class="form-control" name="historia_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar número de historial
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="obra_soc_paciente">Obra Social</label>
            <input type="text" class="form-control" name="obra_soc_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar una obra social del paciente
            </div>
          </div>

          <div class="col-md-6 mb-4">
           <label for="medico_paciente">Médico</label>
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
              Faltó seleccionar un médico
            </div>
          </div>
        
        <div class="col-md-6 mb-4">
            <label for="email_paciente">Email</label>
            <input type="text" class="form-control" name="email_paciente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el Email del paciente
            </div>
          </div>
        

  
</div>
    </div>
     <hr class="mb-4">
     <DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-5" type="submit">Guardar</button>
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
