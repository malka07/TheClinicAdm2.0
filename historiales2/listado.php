<html>
<head>
<meta http-equiv="Content-Language" content="es">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Listado De Historiales</title>

</head>

<body background="../img/historials.jpg">
<div class="row">
<div class="col-md"><h2>
		<img border="0" src="../img/atras.png" width="40" height="40" title="Volver al menú" 
		onclick=location.href='javascript:history.go(-1)'; onKeyPress=location.href='javascript:history.go(-1)'; style='cursor:pointer';/>
		
	</h2></div>

<?php 
include "../conexion.php";
$sql = "SELECT * from historiales order by id_historial";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $historiales[] = $resultado;
    }
?>
<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado De Historiales</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Fecha</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Medico</font></i></td>	  
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Paciente</font></i></td>	  
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Observaciones</font></i></td>	    
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Diagnostico</font></i></td>	
	  </tr>


	<?php $long = count($historiales);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $historiales[$i]['id_historial'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $historiales[$i]['fecha_historial'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $historiales[$i]['clinico_historial'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $historiales[$i]['paciente_historial'];?></font></i></td>
	<td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $historiales[$i]['observacion_historial'];?></font></i></td>	
	<td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $historiales[$i]['diagnostico_historial'];?></font></i></td>
	</tr>

  <?php  } ?>
  </table>
  </center>
</div>

</body>

</html>
