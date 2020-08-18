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
							onclick=location.href='../admin/'; 
							onKeyPress=location.href='../admin/'; 
							style='cursor:pointer';/>
	</h2>
	</div>
    <div class="col-sm-2">
		<img border="0" src="../img/borrar.png" width="48" height="48" title="Eliminar" 
						<?php echo " onclick=location.href='" 
												. "cuidado.php?id_rec=".$_GET['id_rec'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id_rec=".$_GET['id_rec'] . "'"; ?>												
						style='cursor:pointer';/>
	
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	

  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Modificar Datos De Los Recibos</h4>
      <form class="needs-validation" novalidate action="modi.php" method="POST">
	  
<?php 
   require "../conexion.php";
    $sql = "SELECT * from recibos where id_rec = " . $_GET['id_rec'];
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $recibos[] = $resultado;
    }  
   
    $sql = "SELECT * from integrantes order by id_int";
    $query = $mysqli->query($sql);
    while($resultado = $query->fetch_assoc()) {
          $integrantes[] = $resultado;
      }
     
	
	echo "<input type='hidden' name='id_rec' value=" .$_GET['id_rec'] .">"; 
?>  
	  
      
          <div class="col-md-6 mb-4">
            <label for="fecha">Fecha De Recibo:</label>
            <input type="date" class="form-control" id="fecha" name="fech_rec" placeholder="" value=<?php echo "'".$recibos[0]['fech_rec']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha Del Recibo.
            </div>
          </div>


          <div class="col-md-6 mb-4">
           <label for="integrante">Nombre Integrante</label>
           <select class="custom-select d-block w-100" name="nom_rec" placeholder="" value=<?php echo "'".$recibos[0]['nom_rec']."'" ?> required>
           <?php 
				     $long = count($integrantes);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
				     echo " value=" .$integrantes[$i]['nom_int'] .",".$integrantes[$i]['ape_int'] .">";				
                 echo $integrantes[$i]['nom_int']." ";
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
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="desc_rec" placeholder="" value=<?php echo "'".$recibos[0]['desc_rec']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar Una Descripcion Del Recibo
            </div>
          </div>
      

        <div class="col-md-6 mb-4">
            <label for="Liquidacion">Liquidacion</label>
            <input type="text" class="form-control" id="liquidacion" name="liqui_rec" placeholder="" value=<?php echo "'".$recibos[0]['liqui_rec']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Liquidacion
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
