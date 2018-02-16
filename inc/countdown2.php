<?php
    //se declaran las variables y se hace el llamado a la base de datos
    $hora_actual = date('h:i:s a', time());
    include('conexion.php');
    $con=mysqli_query($enlace,'SELECT * FROM nuevo_horario ORDER BY fecha DESC LIMIT 1 ');
    $row = mysqli_fetch_assoc($con);
    $id =$row['id'];
    //se empieza con el primer horario
    if($row['hora_1'] != 0){
    
            if($row['min_1'] <= 10){
                $row['min_1']= "0".$row['min_1'];
            }
             if($row['min_2'] <= 10){
                $row['min_2']= "0".$row['min_2'];
            }
             if($row['min_3'] <= 10){
                $row['min_3']= "0".$row['min_3'];
            }
            
    
            //si la hora es mayor a 12 se convierte en formato 12 horas
        if($row['hora_1'] > 11){
            if($row['hora_1'] == 12){
               $riego =$row['hora_1'].":".$row['min_1'].$row['seg_1']." pm"; 
               $fecha_entrada = strtotime($riego);
               $fecha_actual = strtotime($hora_actual);
            }else{
            if($row['hora_1']== 24){
                $horafin = $row['hora_1'] -12;
                $riego =$horafin.":".$row['min_1'].$row['seg_1']." am";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime("+1 day",$riego);
            }else{
                $horafin = $row['hora_1'] - 12;
                $riego =$horafin.":".$row['min_1'].$row['seg_1']." pm";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime($riego);
            }
            }
            if($fecha_actual == $fecha_entrada){
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
            echo json_encode(array('duracion' =>$row['duracion_1']));
        }
            if($fecha_actual>$fecha_entrada){
                
                // si la hora actual o igual es mayor pasa a comprobar el siguiente horario
               if($row['hora_2'] != 0){
                    if($row['hora_2']>11){
                         //si la hora es mayor a 12 se convierte en formato 12 horas
                         if($row['hora_2'] == 12){
                        $riego =$row['hora_2'].":".$row['min_2']." pm"; 
                        $fecha_entrada = strtotime($riego);
                        $fecha_actual = strtotime($hora_actual);
                        }else{
                        if($row['hora_2']== 24){
                $horafin = $row['hora_2'] -12;
                $riego =$horafin.":".$row['min_2']." am";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime("+1 day",$riego);
            }else{
                $horafin = $row['hora_2'] - 12;
                $riego =$horafin.":".$row['min_2']." pm";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime($riego);
            }
                        }
                          if($fecha_actual == $fecha_entrada){
            $con4=mysqli_query($enlace,'SELECT * FROM valvulas_por_zonas ORDER BY fecha DESC LIMIT 1 ');
            $row2 = mysqli_fetch_assoc($con4);
            while($row2) {
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
            }
            $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),'.$array[1].','.$array[2].','.$array[3].','.$array[4].','.$array[5].','.$array[6].','.$array[7].','.$array[8].','.$array[9].','.$array[10].','.$array[11].','.$array[12].','.$array[13].','.$array[14].','.$array[15].','.$array[16].')');
            }
                        if($fecha_actual>$fecha_entrada){
                            
                            if($row['hora_3'] != 0){
                                 // si la hora actual es mayor pasa a comprobar el ultimo horario
                                if($row['hora_3']>12){
                                     //si la hora es mayor a 12 se convierte en formato 12 horas
                                     if($row['hora_3'] == 12){
                                        $riego =$row['hora_3'].":".$row['min_3']." pm"; 
                                        $fecha_entrada = strtotime($riego);
                                        $fecha_actual = strtotime($hora_actual);
                                        }else{
                                    if($row['hora_3']== 24){
                $horafin = $row['hora_3'] -12;
                $riego =$horafin.":".$row['min_3']." am";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime("+1 day",$riego);
            }else{
                $horafin = $row['hora_3'] - 12;
                $riego =$horafin.":".$row['min_3']." pm";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime($riego);
            }
                                    }
                                      if($fecha_actual == $fecha_entrada){
            $con4=mysqli_query($enlace,'SELECT * FROM valvulas_por_zonas ORDER BY fecha DESC LIMIT 1 ');
            $row2 = mysqli_fetch_assoc($con4);
            while($row2) {
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
            }
            $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),'.$array[1].','.$array[2].','.$array[3].','.$array[4].','.$array[5].','.$array[6].','.$array[7].','.$array[8].','.$array[9].','.$array[10].','.$array[11].','.$array[12].','.$array[13].','.$array[14].','.$array[15].','.$array[16].')');
            }
                                    if($fecha_actual>$fecha_entrada){
                                        
                                         //al no haber mas horarios configurables salta a esto
                                       
                                    }else{
                                        
                                    }
                                }else{
                                    $riego = $row['hora_3'].":".$row['min_3']." am";
                                    $fecha_actual = strtotime($hora_actual);
                                    $fecha_entrada = strtotime($riego);
                                    if($fecha_actual>$fecha_entrada){
                                        
                                        //al no haber mas horarios configurables salta a esto
                                       
                                    }else{
                                        
                                    }
                                }
                            }else{
                                //si no esta programado imprimira esto
                               
                            }
                        }else{
                            //impresion de la hora del segundo horario en cuyo caso
                            
                        }
                    }else{
                        //segundo horario sin necesidad de conversion de hora
                        $riego =$row['hora_2'].":".$row['min_2']." am";
                        $fecha_actual = strtotime($hora_actual);
                        $fecha_entrada = strtotime($riego);
                        if($fecha_actual>$fecha_entrada){
                            
                            //ultimo horario
                            if($row['hora_3'] != 0){
                                if($row['hora_3']>12){
                                    if($row['hora_3'] == 12){
                                        $riego =$row['hora_3'].":".$row['min_3']." pm"; 
                                        $fecha_entrada = strtotime($riego);
                                        $fecha_actual = strtotime($hora_actual);
                                        }else{
                                    if($row['hora_3']== 24){
                $horafin = $row['hora_3'] -12;
                $riego =$horafin.":".$row['min_3']." am";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime("+1 day",$riego);
            }else{
                $horafin = $row['hora_3'] - 12;
                $riego =$horafin.":".$row['min_3']." pm";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime($riego);
            }
                                    }
                                     if($fecha_actual == $fecha_entrada){
            $con4=mysqli_query($enlace,'SELECT * FROM valvulas_por_zonas ORDER BY fecha DESC LIMIT 1 ');
            $row2 = mysqli_fetch_assoc($con4);
           while($row2) {
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
            }
            $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),'.$array[1].','.$array[2].','.$array[3].','.$array[4].','.$array[5].','.$array[6].','.$array[7].','.$array[8].','.$array[9].','.$array[10].','.$array[11].','.$array[12].','.$array[13].','.$array[14].','.$array[15].','.$array[16].')');
            }
                                    if($fecha_actual>$fecha_entrada){
                                        
                                        //respuesta final
                                       
                                    }else{
                                        
                                    }
                                }else{
                                    $riego = $row['hora_3'].":".$row['min_3']." am";
                                    $fecha_actual = strtotime($hora_actual);
                                    $fecha_entrada = strtotime($riego);
                                    if($fecha_actual>$fecha_entrada){
                                        
                                       
                                    }else{
                                        
                                    }
                                }
                            }else{
                               
                            }
                        }else{
                            
                        }
                    }
               }else{
                  
               } 
            }else{
                // si no es mayor se imprime la hora del riego
                
            }
        }else{
            //mismo procedimiento anterior pero sin necesidad de la conversion de 12 horas
           $riego =$row['hora_1'].":".$row['min_1']." am"; 
           $fecha_actual = strtotime($hora_actual);
            $fecha_entrada = strtotime($riego);
              if($fecha_actual == $fecha_entrada){
            $con4=mysqli_query($enlace,'SELECT * FROM valvulas_por_zonas ORDER BY fecha DESC LIMIT 1 ');
            $row2 = mysqli_fetch_assoc($con4);
            while($row2) {
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
            }
            $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),'.$array[1].','.$array[2].','.$array[3].','.$array[4].','.$array[5].','.$array[6].','.$array[7].','.$array[8].','.$array[9].','.$array[10].','.$array[11].','.$array[12].','.$array[13].','.$array[14].','.$array[15].','.$array[16].')');
            }
            if($fecha_actual>$fecha_entrada){
                
               if($row['hora_2'] != 0){
                if($row['hora_2']>12){
                        if($row['hora_2'] == 12){
                                        $riego =$row['hora_2'].":".$row['min_2']." pm"; 
                                        $fecha_entrada = strtotime($riego);
                                        $fecha_actual = strtotime($hora_actual);
                                        }else{
                                    if($row['hora_2']== 24){
                $horafin = $row['hora_2'] -12;
                $riego =$horafin.":".$row['min_2']." am";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime("+1 day",$riego);
            }else{
                $horafin = $row['hora_2'] - 12;
                $riego =$horafin.":".$row['min_2']." pm";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime($riego);
            }
                                    }
                                      if($fecha_actual == $fecha_entrada){
            $con4=mysqli_query($enlace,'SELECT * FROM valvulas_por_zonas ORDER BY fecha DESC LIMIT 1 ');
            $row2 = mysqli_fetch_assoc($con4);
            while($row2) {
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
            }
            $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),'.$array[1].','.$array[2].','.$array[3].','.$array[4].','.$array[5].','.$array[6].','.$array[7].','.$array[8].','.$array[9].','.$array[10].','.$array[11].','.$array[12].','.$array[13].','.$array[14].','.$array[15].','.$array[16].')');
            }
                        if($fecha_actual>$fecha_entrada){
                            
                            if($row['hora_3'] != 0){
                                if($row['hora_3']>12){
                                    if($row['hora_3'] == 12){
                                        $riego =$row['hora_3'].":".$row['min_3']." pm"; 
                                        $fecha_entrada = strtotime($riego);
                                        $fecha_actual = strtotime($hora_actual);
                                        }else{
                                    if($row['hora_3']== 24){
                $horafin = $row['hora_3'] -12;
                $riego =$horafin.":".$row['min_3']." am";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime("+1 day",$riego);
            }else{
                $horafin = $row['hora_3'] - 12;
                $riego =$horafin.":".$row['min_3']." pm";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime($riego);
            }
                                    }
                                      if($fecha_actual == $fecha_entrada){
            $con4=mysqli_query($enlace,'SELECT * FROM valvulas_por_zonas ORDER BY fecha DESC LIMIT 1 ');
            $row2 = mysqli_fetch_assoc($con4);
            while($row2) {
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
            }
            $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),'.$array[1].','.$array[2].','.$array[3].','.$array[4].','.$array[5].','.$array[6].','.$array[7].','.$array[8].','.$array[9].','.$array[10].','.$array[11].','.$array[12].','.$array[13].','.$array[14].','.$array[15].','.$array[16].')');
            }
                                    if($fecha_actual>$fecha_entrada){
                                        
                                       
                                    }else{
                                        
                                    }
                                }else{
                                    $riego = $row['hora_3'].":".$row['min_3']." am";
                                    $fecha_actual = strtotime($hora_actual);
                                    $fecha_entrada = strtotime($riego);
                                    if($fecha_actual>$fecha_entrada){
                                       
                                       
                                        
                                    }else{
                                        
                                    }
                                }
                            }else{
                               
                            }
                        
                        }else{
                             
                        }
                        
                    }else{
                        $riego =$row['hora_2'].":".$row['min_2']." am";
                        $fecha_actual = strtotime($hora_actual);
                        $fecha_entrada = strtotime($riego);
                          if($fecha_actual == $fecha_entrada){
            $con4=mysqli_query($enlace,'SELECT * FROM valvulas_por_zonas ORDER BY fecha DESC LIMIT 1 ');
            $row2 = mysqli_fetch_assoc($con4);
            while($row2) {
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
            }
            $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),'.$array[1].','.$array[2].','.$array[3].','.$array[4].','.$array[5].','.$array[6].','.$array[7].','.$array[8].','.$array[9].','.$array[10].','.$array[11].','.$array[12].','.$array[13].','.$array[14].','.$array[15].','.$array[16].')');
            }
                        if($fecha_actual>$fecha_entrada){
                            
                            if($row['hora_3'] != 0){
                                if($row['hora_3']>12){
                                    if($row['hora_3'] == 12){
                                        $riego =$row['hora_3'].":".$row['min_3']." pm"; 
                                        $fecha_entrada = strtotime($riego);
                                        $fecha_actual = strtotime($hora_actual);
                                        }else{
                                    if($row['hora_3']== 24){
                $horafin = $row['hora_3'] -12;
                $riego =$horafin.":".$row['min_3']." am";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime("+1 day",$riego);
            }else{
                $horafin = $row['hora_3'] - 12;
                $riego =$horafin.":".$row['min_3']." pm";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime($riego);
            }
                                    }
                                     if($fecha_actual == $fecha_entrada){
            $con4=mysqli_query($enlace,'SELECT * FROM valvulas_por_zonas ORDER BY fecha DESC LIMIT 1 ');
            $row2 = mysqli_fetch_assoc($con4);
            while($row2) {
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
            }
            $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),'.$array[1].','.$array[2].','.$array[3].','.$array[4].','.$array[5].','.$array[6].','.$array[7].','.$array[8].','.$array[9].','.$array[10].','.$array[11].','.$array[12].','.$array[13].','.$array[14].','.$array[15].','.$array[16].')');
            }
                                    if($fecha_actual>$fecha_entrada){
                                        
                                       
                                    }else{
                                        
                                    }
                                }else{
                                    $riego = $row['hora_3'].":".$row['min_3']." am";
                                    $fecha_actual = strtotime($hora_actual);
                                    $fecha_entrada = strtotime($riego);
                                     if($fecha_actual == $fecha_entrada){
            $con4=mysqli_query($enlace,'SELECT * FROM valvulas_por_zonas ORDER BY fecha DESC LIMIT 1 ');
            $row2 = mysqli_fetch_assoc($con4);
            while($row2) {
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
            }
            $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),'.$array[1].','.$array[2].','.$array[3].','.$array[4].','.$array[5].','.$array[6].','.$array[7].','.$array[8].','.$array[9].','.$array[10].','.$array[11].','.$array[12].','.$array[13].','.$array[14].','.$array[15].','.$array[16].')');
            }
                                    if($fecha_actual>$fecha_entrada){
                                        
                                       
                                    }else{
                                        
                                    }
                                }
                            }else{
                               
                            }
                        }else{
                            
                        }
                        
                    }
               }else{
                  
               }
            
            }else{
                
            }
        }
    }else{
       
    }
    mysqli_close($enlace);
?>