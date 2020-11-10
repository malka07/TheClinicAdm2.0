<?php    
    require "../conexion.php";
    require "../Classes/PHPExcel.php";
      
    
    $sql = "SELECT id_historial, fecha_historial, clinico_historial, paciente_historial, observacion_historial, diagnostico_historial FROM historiales";
	$resultado = $mysqli->query($sql);
	
    $fil=2;

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()
           ->setCreator("GR5")
           ->setDescription("Lista de Historiales");


    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setTitle('Historiales');
    
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Fecha de historial');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Médico');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Paciente');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Observaciones');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Diagnóstico');

    while($row = $resultado->fetch_assoc()) 
        {
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$fil, $row['id_historial']);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$fil, $row['fecha_historial']);
            $objPHPExcel->getActiveSheet()->setCellValue('C'.$fil, $row['clinico_historial']);
            $objPHPExcel->getActiveSheet()->setCellValue('D'.$fil, $row['paciente_historial']);
            $objPHPExcel->getActiveSheet()->setCellValue('E'.$fil, $row['observacion_historial']);
            $objPHPExcel->getActiveSheet()->setCellValue('F'.$fil, $row['diagnostico_historial']);

            $fil++;
        }           
    

        
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        $hoy=date("d_m_Y");
        header('Content-Disposition: attachment;filename="Historiales_'.$hoy.'.xlsx"');
        header('Cache-Control: max-age=0');
        
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('php://output');		 
		
?>