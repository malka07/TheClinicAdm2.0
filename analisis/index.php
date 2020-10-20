<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>JDL S.A - Historiales Clinicos</title>

    

    <!-- Bootstrap core CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
  </head> 
	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body background="../img/analisis.jpg">
  <div class="col-md text-light"><h2>
		<img border="0" src="../img/atrasb.png" width="42" height="42" title="Volver al menú" 
		onclick=location.href='../panel/'; onKeyPress=location.href='../panel/'; style='cursor:pointer';/>
    <label for="boton_atras"><h6>Atrás</h6></label>
	</h2></div>
    <div class="container">
    
  <div class="py-5 text-center text-light">
  
  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa2.png" alt="" width="62" height="62"></div>
  <div class="col-md"><h5>JDL S.A</h5></div>
  <p class="lead "><h4><strong>Servicios Médicos e Informáticos</strong></h4></p>
  <hr>
  <div class="row">
  
    <div class="col-sm-1"><h2>
		<img border="0" src="../img/add.png" width="48" height="48" title="Ingresar Análisis clinico" 
		onclick=location.href='analisis.php'; onKeyPress=location.href='analisis.php';
    
		style='cursor:pointer';>
    <label for="ingresar_turno"><h6>Ingresar Análisis</h6></label>
	</h2></div>
  
	<div class="col-sm-1 "><h2>
		<img border="0" src="../img/check.png" width="48" height="48" title="Listado" 
		onclick=location.href='listado.php'; onKeyPress=location.href='listado.php';
		style='cursor:pointer';>
    <label for="listado_tabla"><h6>Listado en tabla</h6></label>
	</h2></div>
    <div class="col-sm-2"><h2></h2></div>	

    </div>
    <div class="col-sm-3">
      <h4 class="mb-1"> </h4>
	</div>

  </div>
    <div class="col-sm-3">
      <h4 class="mb-1 text-light">Análisis Clínicos</h4>
	</div>    


   
<?php 
   require "../conexion.php";

    $sql = "SELECT * from analisis order by id_analisis";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $analisis[] = $resultado;
    }
  
?>    
        <div class="list-group">
		
			<?php 				
				$long = count($analisis);
				for($i=0; $i< $long; $i++){
				?>
		<div class="list-group">
				
				<a 	<?php echo "href=modifica.php?id_analisis=".$analisis[$i]['id_analisis'];?>
						 class="list-group-item bg-dark">
				<h4 class="list-group-item-heading"> <?php echo $analisis[$i]['id_analisis'] ."";?> </h4>
				<p class="list-group-item-text"><?php 	echo "Fecha: " . $analisis[$i]['fecha_analisis'] ." - Médico: "; 
                            echo $analisis[$i]['clinico_analisis'] ." - Paciente: "; 
                            echo $analisis[$i]['paciente_analisis'] ." - Resultados: "; 
                            echo $analisis[$i]['resultados_analisis'] ." - Observaciones: ";
                            echo $analisis[$i]['obser_analisis'] ."";
														?></p>		 
				</a>	</div>
	<?php  } ?>
	
				
		</div>
        <a href="javascript:history.go(-1)">	 <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
     
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
