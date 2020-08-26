<html>
<head>
<meta http-equiv="Content-Language" content="es">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Listado De Medicamentos</title>

</head>

<body>
<div class="row">
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
		onclick=location.href='../medicamentos/'; onKeyPress=location.href='../medicamentos/'; style='cursor:pointer';/>
	</h2>
	</div>

<?php 
include "../conexion.php";
$sql = "SELECT * from medicamentos order by id_medicamento";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $medicamentos[] = $resultado;
    }
?>
<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado De Medicamentos</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	    <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Nombre</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Farmaco</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Contenido</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Formato</font></i></td> 
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Cantidad</font></i></td> 
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Vencimiento</font></i></td>
	  </tr>


	<?php $long = count($medicamentos);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $medicamentos[$i]['id_medicamento'];?></font></i></td>
	  <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $medicamentos[$i]['nombre_medicamento'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $medicamentos[$i]['farmaco_medicamento'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $medicamentos[$i]['contenido_medicamento'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $medicamentos[$i]['formato_medicamento'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $medicamentos[$i]['cantidad_medicamento'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $medicamentos[$i]['vencimiento_medicamento'];?></font></i></td>
    

	</tr>

  <?php  } ?>
  </table>
  </center>
</div>

</body>

</html>
