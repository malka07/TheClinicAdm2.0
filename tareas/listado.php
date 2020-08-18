<html>
<head>
<meta http-equiv="Content-Language" content="es">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Listado De Asignaciones</title>

</head>

<body>
<div class="row">
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
		onclick=location.href='../tareas/'; onKeyPress=location.href='../tareas/'; style='cursor:pointer';/>
	</h2>
	</div>

<?php 
include "../conexion.php";
$sql = "SELECT * from tareas order by id_tar";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $tareas[] = $resultado;
    }
?>
<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado De Tareas</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Fecha Asignacion</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Tiempo Asignado</font></i></td>	  
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Integrante</font></i></td>	  
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Observaciones</font></i></td>	    
	  </tr>


	<?php $long = count($tareas);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $tareas[$i]['fech_tar'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $tareas[$i]['desc_tar'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $tareas[$i]['tiemp_tar'];?></font></i></td>
	<td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $tareas[$i]['inte_tar'];?></font></i></td>	
	<td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $tareas[$i]['obser_tar'];?></font></i></td>
	</tr>

  <?php  } ?>
  </table>
  </center>
</div>

</body>

</html>
