<?php
    $hora = explode(":",$_POST['hora']);
    $hora_sep = $hora[0];
    $horario = explode(" ",$hora[1]);
    $minuto = $horario[0];
    if($horario[1] == PM){
        if($hora_sep == 12){
            $hora_sep = $hora_sep;
        }else{
            $hora_sep = $hora_sep + 12;
        }
    }
    include('conexion.php');
    $con=mysqli_query($enlace,'SELECT * FROM nuevo_horario ORDER BY fecha DESC LIMIT 1 ');
    $row = mysqli_fetch_assoc($con);
    if($row['hora_1'] == $hora_sep && $row['min_1'] == $minuto ){
            /*$con4=mysqli_query($enlace,'SELECT * FROM valvulas_por_zonas ORDER BY fecha DESC LIMIT 1 ');
            $row2 = mysqli_fetch_assoc($con4);
            while ($row2) {
                $i = 1;
                if($row2['zona_val'.$i] == 0){
                    $array[$i] = 0;
                }else{
                    $array[$i]= 1;
                }
               $i++; 
               if($i == 16){
                   break;
               } 
            }*/
            /*'.$array[1].','.$array[2].','.$array[3].','.$array[4].','.$array[5].','.$array[6].','.$array[7].','.$array[8].','.$array[9].','.$array[10].','.$array[11].','.$array[12].','.$array[13].','.$array[14].','.$array[15].','.$array[16].'*/
            $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1)');
            echo json_encode(array('duracion' =>$row['duracion_1']));
            
        }
    if($row['hora_2'] == $hora_sep && $row['min_2'] == $minuto ){
            /*$con4=mysqli_query($enlace,'SELECT * FROM valvulas_por_zonas ORDER BY fecha DESC LIMIT 1 ');
            $row2 = mysqli_fetch_assoc($con4);
            while ($row2) {
                $i = 1;
                if($row2['zona_val'.$i] == 0){
                    $array[$i] = 0;
                }else{
                    $array[$i]= 1;
                }
               $i++; 
               if($i == 16){
                   break;
               } 
            }*/
            /*'.$array[1].','.$array[2].','.$array[3].','.$array[4].','.$array[5].','.$array[6].','.$array[7].','.$array[8].','.$array[9].','.$array[10].','.$array[11].','.$array[12].','.$array[13].','.$array[14].','.$array[15].','.$array[16].'*/
            $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1)');
            echo json_encode(array('duracion' =>$row['duracion_2']));
            
        }
    if($row['hora_3'] == $hora_sep && $row['min_3'] == $minuto ){
            /*$con4=mysqli_query($enlace,'SELECT * FROM valvulas_por_zonas ORDER BY fecha DESC LIMIT 1 ');
            $row2 = mysqli_fetch_assoc($con4);
            while ($row2) {
                $i = 1;
                if($row2['zona_val'.$i] == 0){
                    $array[$i] = 0;
                }else{
                    $array[$i]= 1;
                }
               $i++; 
               if($i == 16){
                   break;
               } 
            }*/
            /*'.$array[1].','.$array[2].','.$array[3].','.$array[4].','.$array[5].','.$array[6].','.$array[7].','.$array[8].','.$array[9].','.$array[10].','.$array[11].','.$array[12].','.$array[13].','.$array[14].','.$array[15].','.$array[16].'*/
            $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1)');
            echo json_encode(array('duracion' =>$row['duracion_3']));
            
        }
?>