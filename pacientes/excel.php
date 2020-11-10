<?php    
    require "../conexion.php";
    require "../Classes/PHPExcel.php";
      
    
    $sql = "SELECT id_paciente, nombre_paciente, apellido_paciente, dni_paciente, domicilio_paciente, 
    telefono_paciente, edad_paciente, provincia_paciente, barrio_paciente, fech_nac_paciente, 
    historia_paciente, obra_soc_paciente, medico_paciente, email_paciente FROM pacientes";
	$resultado = $mysqli->query($sql);
	
    $fil=2;

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()
           ->setCreator("GR5")
           ->setDescription("Lista de Pacientes");


    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setTitle('Pacientes');
    
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nombre');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Apellido');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'DNI');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Domicilio');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Teléfono');
    $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Edad');
    $objPHPExcel->getActiveSheet()->setCellValue('H1', 'Provincia');
    $objPHPExcel->getActiveSheet()->setCellValue('I1', 'Barrio');
    $objPHPExcel->getActiveSheet()->setCellValue('J1', 'Fecha de Nac');
    $objPHPExcel->getActiveSheet()->setCellValue('K1', 'N° Historia Clínica');
    $objPHPExcel->getActiveSheet()->setCellValue('L1', 'Obra Social');
    $objPHPExcel->getActiveSheet()->setCellValue('M1', 'Médico');
    $objPHPExcel->getActiveSheet()->setCellValue('N1', 'Email');

    while($row = $resultado->fetch_assoc()) 
        {
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$fil, $row['id_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$fil, $row['nombre_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('C'.$fil, $row['apellido_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('D'.$fil, $row['dni_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('E'.$fil, $row['domicilio_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('F'.$fil, $row['telefono_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('G'.$fil, $row['edad_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('H'.$fil, $row['provincia_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('I'.$fil, $row['barrio_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('J'.$fil, $row['fech_nac_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('K'.$fil, $row['historia_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('L'.$fil, $row['obra_soc_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('M'.$fil, $row['medico_paciente']);
            $objPHPExcel->getActiveSheet()->setCellValue('N'.$fil, $row['email_paciente']);
 

            $fil++;
        }           
    

        
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        $hoy=date("d_m_Y");
        header('Content-Disposition: attachment;filename="Pacientes_'.$hoy.'.xlsx"');
        header('Cache-Control: max-age=0');
        
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('php://output');		 
		
?>