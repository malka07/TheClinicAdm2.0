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
							onclick=location.href='../tareas/'; 
							onKeyPress=location.href='../tareas/'; 
							style='cursor:pointer';/>
	</h2>
	</div>
    <div class="col-sm-2">
		<img border="0" src="../img/borrar.png" width="48" height="48" title="Eliminar" 
						<?php echo " onclick=location.href='" 
												. "cuidado.php?id_tar=".$_GET['id_tar'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id_tar=".$_GET['id_tar'] . "'"; ?>												
						style='cursor:pointer';/>
	
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	

  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Modificar Datos De Las Tareas</h4>
      <form class="needs-validation" novalidate action="modi.php" method="POST">
	  
<?php 
   require "../conexion.php";
    $sql = "SELECT * from tareas where id_tar = " . $_GET['id_tar'];
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $tareas[] = $resultado;
    }  
   
    $sql = "SELECT * from integrantes order by id_int";
    $query = $mysqli->query($sql);
    while($resultado = $query->fetch_assoc()) {
          $integrantes[] = $resultado;
      }
     
	
	echo "<input type='hidden' name='id_tar' value=" .$_GET['id_tar'] .">"; 
?>  
	  
      
          <div class="col-md-6 mb-4">
            <label for="fecha">Fecha De Tarea:</label>
            <input type="date" class="form-control" id="fecha" name="fech_tar" placeholder="" value=<?php echo "'".$tareas[0]['fech_tar']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha De La Tarea.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="desc_tar" placeholder="" value=<?php echo "'".$tareas[0]['desc_tar']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar Una Descripcion De La Tarea
            </div>
          </div>
      

        <div class="col-md-6 mb-4">
            <label for="tiempo">Tiempo De Tarea</label>
            <input type="text" class="form-control" id="tiempo" name="tiemp_tar" placeholder="" value=<?php echo "'".$tareas[0]['tiemp_tar']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar Un Tiempo De La Tarea
            </div>
          </div>
      



          <div class="col-md-6 mb-4">
           <label for="integrante">Integrante</label>
           <select class="custom-select d-block w-100" name="inte_tar" required>
           <?php 
				     $long = count($integrantes);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
				     echo " value=" .$integrantes[$i]['id_int'] .">";				
                 echo $integrantes[$i]['nom_int'];
                 echo $integrantes[$i]['ape_int'];
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó Seleccionar Un Integrante.
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="observaciones">Observaciones</label>
            <input type="text" class="form-control" id="observaciones" name="obser_tar" placeholder="" value=<?php echo "'".$tareas[0]['obser_tar']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar Alguna Observacion
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
