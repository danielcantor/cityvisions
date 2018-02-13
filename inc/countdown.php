<?php
    //se declaran las variables y se hace el llamado a la base de datos
    $hora_actual = date('h:i a', time());
    include('conexion.php');
    $con=mysqli_query($enlace,'SELECT * FROM nuevo_horario ORDER BY fecha DESC LIMIT 1 ');
    $row = mysqli_fetch_assoc($con);
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
               $riego =$row['hora_1'].":".$row['min_1']." pm"; 
               $fecha_entrada = strtotime($riego);
               $fecha_actual = strtotime($hora_actual);
            }else{
            if($row['hora_1']== 24){
                $horafin = $row['hora_1'] -12;
                $riego =$horafin.":".$row['min_1']." am";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime("+1 day",$riego);
            }else{
                $horafin = $row['hora_1'] - 12;
                $riego =$horafin.":".$row['min_1']." pm";
                $fecha_actual = strtotime($hora_actual);
                $fecha_entrada = strtotime($riego);
            }
            }
            if($fecha_actual>=$fecha_entrada){
                
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
                        if($fecha_actual>=$fecha_entrada){
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
                                    if($fecha_actual>=$fecha_entrada){
                                         //al no haber mas horarios configurables salta a esto
                                        echo "N/P";
                                    }else{
                                        echo $riego;
                                    }
                                }else{
                                    $riego = $row['hora_3'].":".$row['min_3']." am";
                                    $fecha_actual = strtotime($hora_actual);
                                    $fecha_entrada = strtotime($riego);
                                    if($fecha_actual>=$fecha_entrada){
                                        //al no haber mas horarios configurables salta a esto
                                        echo "N/P";
                                    }else{
                                        echo $riego;
                                    }
                                }
                            }else{
                                //si no esta programado imprimira esto
                                echo "N/P";
                            }
                        }else{
                            //impresion de la hora del segundo horario en cuyo caso
                            echo $riego;
                        }
                    }else{
                        //segundo horario sin necesidad de conversion de hora
                        $riego =$row['hora_2'].":".$row['min_2']." am";
                        $fecha_actual = strtotime($hora_actual);
                        $fecha_entrada = strtotime($riego);
                        if($fecha_actual>=$fecha_entrada){
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
                                    if($fecha_actual>$fecha_entrada){
                                        //respuesta final
                                        echo "N/P";
                                    }else{
                                        echo $riego;
                                    }
                                }else{
                                    $riego = $row['hora_3'].":".$row['min_3']." am";
                                    $fecha_actual = strtotime($hora_actual);
                                    $fecha_entrada = strtotime($riego);
                                    if($fecha_actual>$fecha_entrada){
                                        echo "N/P";
                                    }else{
                                        echo $riego;
                                    }
                                }
                            }else{
                                echo "N/P";
                            }
                        }else{
                            echo $riego;
                        }
                    }
               }else{
                   echo "N/P";
               } 
            }else{
                // si no es mayor se imprime la hora del riego
                echo $riego;
            }
        }else{
            //mismo procedimiento anterior pero sin necesidad de la conversion de 12 horas
           $riego =$row['hora_1'].":".$row['min_1']." am"; 
           $fecha_actual = strtotime($hora_actual);
            $fecha_entrada = strtotime($riego);

            if($fecha_actual>$fecha_entrada){
            if($row['hora_1']>= 1 && $row['hora_1'] < 12 ){ 
                  echo $riego; 
            }else{
            
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
                        if($fecha_actual>=$fecha_entrada){
                             if($row['hora_2']>= 1 && $row['hora_2'] < 12 ){ 
                                echo $riego; 
                            }else{

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
                                    if($fecha_actual>$fecha_entrada){
                                         if($row['hora_3']>= 1 && $row['hora_3'] < 12 ){ 
                                        echo $riego; 
                                        }else{
                                        echo "N/P";
                                        }
                                    }else{
                                        echo $riego;
                                    }
                                }else{
                                    $riego = $row['hora_3'].":".$row['min_3']." am";
                                    $fecha_actual = strtotime($hora_actual);
                                    $fecha_entrada = strtotime($riego);
                                    if($fecha_actual>$fecha_entrada){
                                        if($row['hora_3']>= 1 && $row['hora_3'] < 12 ){ 
                                        echo $riego; 
                                        }else{
                                        echo "N/P";
                                        }
                                    }else{
                                        echo date('h:i a',$riego);
                                    }
                                }
                            }else{
                                echo "N/P";
                            }
                        }
                        }else{
                             echo date('h:i a',$riego);
                        }
                        
                    }else{
                        $riego =$row['hora_2'].":".$row['min_2']." am";
                        $fecha_actual = strtotime($hora_actual);
                        $fecha_entrada = strtotime($riego);
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
                                    if($fecha_actual>$fecha_entrada){
                                         if($row['hora_3']>= 1 && $row['hora_3'] < 12 ){ 
                                        echo $riego; 
                                        }else{
                                        echo "N/P";
                                        }
                                    }else{
                                        echo $riego;
                                    }
                                }else{
                                    $riego = $row['hora_3'].":".$row['min_3']." am";
                                    $fecha_actual = strtotime($hora_actual);
                                    $fecha_entrada = strtotime($riego);
                                    if($fecha_actual>$fecha_entrada){
                                        if($row['hora_3']>= 1 && $row['hora_3'] < 12 ){ 
                                        echo $riego; 
                                        }else{
                                        echo "N/P";
                                        }
                                    }else{
                                        echo $riego;
                                    }
                                }
                            }else{
                                echo "N/P";
                            }
                        }else{
                            echo $riego;
                        }
                        
                    }
               }else{
                   echo "N/P";
               }
            }
            }else{
                echo $riego;
            }
        }
    }else{
        echo "N/P";
    }
    mysqli_close($enlace);
?>