<!doctype html>
<html>
<?php 
    require "../metodos.php";
?>

<div class="col-sm-2"></div>
    <div class="col-sm-2"></div>	
    <div class="col-sm-2"></div>	

<body background="../img/turnos2.jpg">
    <div class="container">
 <div class="py-5 text-center">
  <div class="row">
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
		onclick=location.href='javascript:history.go(-1)'; onKeyPress=location.href='javascript:history.go(-1)'; style='cursor:pointer';/>
	</h2>
	</div>
	 <div class="container">
 <div class="py-5 text-center">
  <div class="row">

  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa.png" alt="" width="62" height="62"></div>
</div>
<div class="col-md-12 order-md-1">
      <h4 class="mb-4">Alta de Turnos</h4>
      <form class="needs-validation" novalidate action="grabar.php" method="post">
	  
<?php 
   require "../conexion.php";

    $sql = "SELECT * from turnos order by id_turno";
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

        
?>

          <div class="col-md-6 mb-4">
            <label for="fecha_turno">Fecha</label>
            <input type="date" class="form-control" name="fecha_turno" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha Del Turno.
            </div>
          </div>
        
          <div class="col-md-6 mb-4">
           <label for="horario">Horario</label>
           <select class="custom-select d-block w-100" name="horario_turno" required>
           <?php 
				     $long = count($horarios);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
             echo " value=" .$horarios[$i]['id_horario'] .",".$horarios[$i]['tiempo_horario'] .">";
                 echo $horarios[$i]['tiempo_horario'];
                 
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó Seleccionar Un Horario del Turno.
            </div>
          </div>  

          <div class="col-md-6 mb-4">
            
            <input type="hidden" class="form-control" name="paciente_turno" placeholder="" value=<?php echo "'".$turnos[0]['paciente_turno']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Paciente Del Turno.
            </div>
          </div>
        
          <div class="col-md-6 mb-4">
           <label for="clinico">Medico</label>
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
              Faltó Seleccionar Un Medico.
            </div>
          </div>  

        
        <div class="col-md-6 mb-4">
            <label for="comentarios_turno">Comentarios</label>
            <input type="text" class="form-control" name="comentarios_turno" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar Un Comentarios.
            </div>
          </div>
      
    
     

     
          <p align="center"> <font face="Verdana" size="5" color="#666666"><u>Medicos</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Nombre</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Apellido</font></i></td>	  
	  

	  </tr>


	<?php $long = count($clinicos);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $clinicos[$i]['id_clinico'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $clinicos[$i]['nombre_clinico'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $clinicos[$i]['apellido_clinico'];?></font></i></td>
	
	</tr>

  <?php  } ?>
  </table>
  </center>

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
