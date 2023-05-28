<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>JDL S.A - TheClinicAdm</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/disc.jpg" alt="" width="72" height="72">
    <h2>JDL S.A</h2>
    <p class="lead">Creacion De Archivo De Recibos y Servicios / Profesiones para la App.</p>
  </div>

    
      
	  
<?php

   require "../conexion.php";

   $sql = "SELECT * from recibos order by id_recibo";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $recibos[] = $resultado;
    }

   
   header('Content-type: application/vnd.ms-excel;charset=iso8859-15');
   header('Content-Disposition: attachement; filename=nombre_archivo.xls');

  
?>

<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado De Recibos</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Fecha Del Recibo</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Descripcion</font></i></td>	  
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Medico</font></i></td>	  
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Liquidacion</font></i></td>	    
	  </tr>


	<?php $long = count($recibos);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['id_recibo'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['fecha_recibo'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['descripcion_recibo'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['clinico_recibo'];?></font></i></td>
	<td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $recibos[$i]['liqui_recibo'];?></font></i></td>	
	
  </tr>

  <?php  } ?>
  </table>
  </center>


<a href="../admin">	 <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>-->
  </footer>
</div>


