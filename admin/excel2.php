<?php    
    require "../conexion.php";
    require "../Classes/PHPExcel.php";
      
    
    $sql = "SELECT id_pago, fecha_pago, descripcion_pago, cantidad_pago, liqui_pago FROM pagos";
	$resultado = $mysqli->query($sql);
	
    $fil=2;

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()
           ->setCreator("GR5")
           ->setDescription("Lista de Pagos");


    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setTitle('Pagos');
    
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Fecha de pago');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Descripción');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Cantidad');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Monto');

    while($row = $resultado->fetch_assoc()) 
        {
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$fil, $row['id_pago']);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$fil, $row['fecha_pago']);
            $objPHPExcel->getActiveSheet()->setCellValue('C'.$fil, $row['descripcion_pago']);
            $objPHPExcel->getActiveSheet()->setCellValue('D'.$fil, $row['cantidad_pago']);
            $objPHPExcel->getActiveSheet()->setCellValue('E'.$fil, $row['liqui_pago']);

            $fil++;
        }           
    

        
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        $hoy=date("d_m_Y");
        header('Content-Disposition: attachment;filename="Pagos_'.$hoy.'.xlsx"');
        header('Cache-Control: max-age=0');
        
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('php://output');		 
		
?>