<?php    
    require "../conexion.php";
    require "../Classes/PHPExcel.php";
      
    
    $sql = "SELECT id_recibo, fecha_recibo, descripcion_recibo, clinico_recibo, liqui_recibo FROM recibos";
	$resultado = $mysqli->query($sql);
	
    $fil=2;

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()
           ->setCreator("GR5")
           ->setDescription("Lista de Recibos");


    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setTitle('Recibos');
    
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Fecha Del Recibo');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Descripción');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Médico');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Liquidación');

    while($row = $resultado->fetch_assoc()) 
        {
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$fil, $row['id_recibo']);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$fil, $row['fecha_recibo']);
            $objPHPExcel->getActiveSheet()->setCellValue('C'.$fil, $row['descripcion_recibo']);
            $objPHPExcel->getActiveSheet()->setCellValue('D'.$fil, $row['clinico_recibo']);
            $objPHPExcel->getActiveSheet()->setCellValue('E'.$fil, $row['liqui_recibo']);

            $fil++;
        }           
    

        
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        $hoy=date("d_m_Y");
        header('Content-Disposition: attachment;filename="Recibos_'.$hoy.'.xlsx"');
        header('Cache-Control: max-age=0');
        
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('php://output');		 
		
?>