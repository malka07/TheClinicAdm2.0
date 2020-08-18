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
		onclick=location.href='../admin/'; onKeyPress=location.href='../admin/'; style='cursor:pointer';/>
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"></div>	
    <div class="col-sm-2"></div>	
  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/disc.jpg" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>JDL S.A</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Alta De Recibos</h4>
      <form class="needs-validation" novalidate action="grabar.php" method="post">
	  
<?php 
   require "../conexion.php";

    $sql = "SELECT * from recibos order by id_rec";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $recibos[] = $resultado;
    }

    $sql = "SELECT * from integrantes order by id_int";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $integrantes[] = $resultado;
    }
   

?>

          <div class="col-md-6 mb-4">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" name="fech_rec" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha Del Recibo.
            </div>
          </div>
        
        
        <div class="col-md-6 mb-4">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" name="desc_rec" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar Una Descripcion Del Recibo.
            </div>
          </div>
            
 
        
        
        <div class="col-md-6 mb-4">
           <label for="integrante">Integrante</label>
           <select class="custom-select d-block w-100" name="nom_rec" required>
           <?php 
				     $long = count($integrantes);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
				     echo " value=" .$integrantes[$i]['id_int'] .">";				
                 echo $integrantes[$i]['nom_int'] . " ";
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
            <label for="liquidacion">Liquidacion</label>
            <input type="text" class="form-control" name="liqui_rec" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar Alguna Observacion.
            </div>
          </div>
     

     
          <p align="center"> <font face="Verdana" size="5" color="#666666"><u>Integrantes</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Nombre</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Apellido</font></i></td>	  
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Edad</font></i></td>	  

	  </tr>


	<?php $long = count($integrantes);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $integrantes[$i]['id_int'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $integrantes[$i]['nom_int'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $integrantes[$i]['ape_int'];?></font></i></td>
	<td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $integrantes[$i]['edad_int'];?></font></i></td>	
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
