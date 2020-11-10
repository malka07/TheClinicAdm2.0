<!doctype html>
<html>
<?php 
    require "../metodos.php";
?>
<head>
  <meta http-equiv="Content-Language" content="es">
  <meta name="GENERATOR" content="Microsoft FrontPage 5.0">
  <meta name="ProgId" content="FrontPage.Editor.Document">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Listado De Turnos</title>
</head>

<body background="../img/turnos2.jpg" style="background-size:cover";>
  <div class="col-md"><h2>
		<img border="0" src="../img/atras.png" width="42" height="42" title="Volver al menú"
    onclick=location.href='javascript:history.go(-1)'; onKeyPress=location.href='javascript:history.go(-1)'; style='cursor:pointer';/>
    <label for="boton_atras"><h6>Atrás</h6></label>
	</h2></div>

  <div class="container">
  <div class="py-5 text-center">

  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa2.png" alt="" width="62" height="62"></div>
  <div class="col-md"><h5>JDL S.A</h5></div>
  <p class="lead"><h4><strong>Servicios Médicos e Informáticos</strong></h4></p>
  <hr>
  <div class="row">
  </h2></div>

    <div class="col-sm-2 offset-md-1">
		<img border="0" src="../img/delete.png" width="48" height="48" title="Eliminar" 
						<?php echo " onclick=location.href='" 
												. "cuidado.php?id_turno=".$_GET['id_turno'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id_turno=".$_GET['id_turno'] . "'"; ?>												
						style='cursor:pointer';/>
            <label for="boton_eliminar"><h6>Eliminar registro</h6></label>
	        </h2></div>
	<div class="col-sm-2"></div>
  <div class="col-sm-2"><h2></h2></div>	
</div>

    <div class="col-md-12 order-md-1">
    <DIV ALIGN=center>
      <h4 class="mb-4">Modificar datos de los turnos</h4>
      <form class="needs-validation" novalidate action="modi.php" method="POST">
      </div>

<?php 
   require "../conexion.php";
    $sql = "SELECT * from turnos where id_turno = " . $_GET['id_turno'];
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $turnos[] = $resultado;
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
      
        $sql = "SELECT * from horarios order by id_horario";
      $query = $mysqli->query($sql);
      while($resultado = $query->fetch_assoc()) {
            $horarios[] = $resultado;
        }
	
	echo "<input type='hidden' name='id_turno' value=" .$_GET['id_turno'] .">"; 
?>  
	<DIV ALIGN=center>
    <div class="col-md-6 mb-4">
            <label for="fecha_turno">Fecha</label>
            <input type="date" class="form-control" name="fecha_turno" min=<?php $hoy=date("Y-m-d"); echo $hoy;?> placeholder="" value=<?php echo "'".$turnos[0]['fecha_turno']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar la fecha del turno
            </div>
          </div>
          
          <div class="col-md-6 mb-4">
           <label for="horario">Horario</label>
           <select class="custom-select d-block w-100" name="horario_turno" required>
           <?php 
				     $long = count($horarios);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
             echo " value=" .$horarios[$i]['tiempo_horario'] .">";
                 echo $horarios[$i]['tiempo_horario'];
                 
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó seleccionar horario del turno
            </div>
          </div>  

          <div class="col-md-6 mb-4">
           <label for="paciente">Paciente</label>
           <select class="custom-select d-block w-100" name="paciente_turno" required>
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
              Faltó seleccionar un paciente
            </div>
          </div>  
        
          <div class="col-md-6 mb-4">
           <label for="clinico">Médico</label>
           <select class="custom-select d-block w-100" name="clinico_turno" required>
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
              Faltó seleccionar un médico
            </div>
          </div>  

        
        <div class="col-md-6 mb-4">
            <label for="comentarios_turno">Comentarios</label>
            <textarea type="text" class="form-control" name="comentarios_turno" placeholder="" value=<?php echo "'".$turnos[0]['comentarios_turno']."'" ?> required></textarea>
            <div class="invalid-feedback">
              Faltó ingresar un comentario
            </div>
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
