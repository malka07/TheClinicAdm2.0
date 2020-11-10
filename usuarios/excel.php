<?php    
    require "../conexion.php";
    require "../Classes/PHPExcel.php";
      
    
    $sql = "SELECT id_usuario, nombre_usuario, apellido_usuario, edad_usuario, dni_usuario, email_usuario, 
    contraseña_usuario, domicilio_usuario, fecha_nac_usuario, notas_usuario, permiso_usuario FROM usuarios";
	$resultado = $mysqli->query($sql);
	
    $fil=2;

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()
           ->setCreator("GR5")
           ->setDescription("Lista de Usuarios");


    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setTitle('Usuarios');
    
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nombre');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Apellido');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Edad');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'DNI');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Email');
    $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Contraseña');
    $objPHPExcel->getActiveSheet()->setCellValue('H1', 'Domicilio');
    $objPHPExcel->getActiveSheet()->setCellValue('I1', 'Fecha de Nac');
    $objPHPExcel->getActiveSheet()->setCellValue('J1', 'Notas');
    $objPHPExcel->getActiveSheet()->setCellValue('K1', 'Permiso');


    while($row = $resultado->fetch_assoc()) 
        {
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$fil, $row['id_usuario']);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$fil, $row['nombre_usuario']);
            $objPHPExcel->getActiveSheet()->setCellValue('C'.$fil, $row['apellido_usuario']);
            $objPHPExcel->getActiveSheet()->setCellValue('D'.$fil, $row['edad_usuario']);
            $objPHPExcel->getActiveSheet()->setCellValue('E'.$fil, $row['dni_usuario']);
            $objPHPExcel->getActiveSheet()->setCellValue('F'.$fil, $row['email_usuario']);
            $objPHPExcel->getActiveSheet()->setCellValue('G'.$fil, $row['contraseña_usuario']);
            $objPHPExcel->getActiveSheet()->setCellValue('H'.$fil, $row['domicilio_usuario']);
            $objPHPExcel->getActiveSheet()->setCellValue('I'.$fil, $row['fecha_nac_usuario']);
            $objPHPExcel->getActiveSheet()->setCellValue('J'.$fil, $row['notas_usuario']);
            $objPHPExcel->getActiveSheet()->setCellValue('K'.$fil, $row['permiso_usuario']);

 

            $fil++;
        }           
    

        
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        $hoy=date("d_m_Y");
        header('Content-Disposition: attachment;filename="Usuarios_'.$hoy.'.xlsx"');
        header('Cache-Control: max-age=0');
        
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('php://output');		 
		
?>