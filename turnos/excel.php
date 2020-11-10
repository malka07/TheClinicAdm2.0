<?php    
    require "../conexion.php";
    require "../Classes/PHPExcel.php";
      
    
    $sql = "SELECT id_turno, fecha_turno, horario_turno, paciente_turno, clinico_turno, comentarios_turno FROM turnos";
	$resultado = $mysqli->query($sql);
	
    $fil=2;

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()
           ->setCreator("GR5")
           ->setDescription("Lista de Turnos");


    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setTitle('Turnos');
    
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Fecha del turno');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Horario');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Paciente');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Médico');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Comentarios');

    while($row = $resultado->fetch_assoc()) 
        {
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$fil, $row['id_turno']);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$fil, $row['fecha_turno']);
            $objPHPExcel->getActiveSheet()->setCellValue('C'.$fil, $row['horario_turno']);
            $objPHPExcel->getActiveSheet()->setCellValue('D'.$fil, $row['paciente_turno']);
            $objPHPExcel->getActiveSheet()->setCellValue('E'.$fil, $row['clinico_turno']);
            $objPHPExcel->getActiveSheet()->setCellValue('F'.$fil, $row['comentarios_turno']);

            $fil++;
        }           
    

        
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        $hoy=date("d_m_Y");
        header('Content-Disposition: attachment;filename="Turnos_'.$hoy.'.xlsx"');
        header('Cache-Control: max-age=0');
        
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('php://output');		 
		
?>