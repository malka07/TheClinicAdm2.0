<?php    
    require "../conexion.php";
    require "../Classes/PHPExcel.php";
      
    
    $sql = "SELECT id_clinico, nombre_clinico, apellido_clinico, edad_clinico, domicilio_clinico, telefono_clinico, fech_nac_clinico, email_clinico FROM clinicos";
	$resultado = $mysqli->query($sql);
	
    $fil=2;

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()
           ->setCreator("GR5")
           ->setDescription("Lista de Médicos");


    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setTitle('Clinicos');
    
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nombre');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Apellido');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Edad');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Domicilio');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Teléfono');
    $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Fecha de nacim');
    $objPHPExcel->getActiveSheet()->setCellValue('H1', 'Email');

    while($row = $resultado->fetch_assoc()) 
        {
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$fil, $row['id_clinico']);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$fil, $row['nombre_clinico']);
            $objPHPExcel->getActiveSheet()->setCellValue('C'.$fil, $row['apellido_clinico']);
            $objPHPExcel->getActiveSheet()->setCellValue('D'.$fil, $row['edad_clinico']);
            $objPHPExcel->getActiveSheet()->setCellValue('E'.$fil, $row['domicilio_clinico']);
            $objPHPExcel->getActiveSheet()->setCellValue('F'.$fil, $row['telefono_clinico']);
            $objPHPExcel->getActiveSheet()->setCellValue('G'.$fil, $row['fech_nac_clinico']);
            $objPHPExcel->getActiveSheet()->setCellValue('H'.$fil, $row['email_clinico']);
 

            $fil++;
        }           
    

        
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        $hoy=date("d_m_Y");
        header('Content-Disposition: attachment;filename="Médicos_'.$hoy.'.xlsx"');
        header('Cache-Control: max-age=0');
        
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('php://output');		 
		
?>