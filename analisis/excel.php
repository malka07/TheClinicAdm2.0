<?php    
    require "../conexion.php";
    require "../Classes/PHPExcel.php";
      
    
    $sql = "SELECT id_analisis, fecha_analisis, clinico_analisis, paciente_analisis, resultados_analisis, obser_analisis FROM analisis";
	$resultado = $mysqli->query($sql);
	
    $fil=2;

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()
           ->setCreator("GR5")
           ->setDescription("Lista de Análisis");


    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setTitle('Analisis');
    
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Fecha de Análisis');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Médico');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Paciente');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Resultados');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Observaciones');

    while($row = $resultado->fetch_assoc()) 
        {
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$fil, $row['id_analisis']);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$fil, $row['fecha_analisis']);
            $objPHPExcel->getActiveSheet()->setCellValue('C'.$fil, $row['clinico_analisis']);
            $objPHPExcel->getActiveSheet()->setCellValue('D'.$fil, $row['paciente_analisis']);
            $objPHPExcel->getActiveSheet()->setCellValue('E'.$fil, $row['resultados_analisis']);
            $objPHPExcel->getActiveSheet()->setCellValue('F'.$fil, $row['obser_analisis']);

            $fil++;
        }           
    

        
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        $hoy=date("d_m_Y");
        header('Content-Disposition: attachment;filename="Analisis_'.$hoy.'.xlsx"');
        header('Cache-Control: max-age=0');
        
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('php://output');		 
		
?>