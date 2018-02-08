<?php
        $val_final1 = explode('-',$_POST['zona_val1']);
        $val_final2 = explode('-',$_POST['zona_val2']);
        $val_final3 = explode('-',$_POST['zona_val3']);
        $val_final4 = explode('-',$_POST['zona_val4']);
        $val_final5 = explode('-',$_POST['zona_val5']);
        $val_final6 = explode('-',$_POST['zona_val6']);
        $val_final7 = explode('-',$_POST['zona_val7']);
        $val_final8 = explode('-',$_POST['zona_val8']);
        $val_final9 = explode('-',$_POST['zona_val9']);
        $val_final10 = explode('-',$_POST['zona_val10']);
        $val_final11 = explode('-',$_POST['zona_val11']);
        $val_final12 = explode('-',$_POST['zona_val12']);
        $val_final13 = explode('-',$_POST['zona_val13']);
        $val_final14 = explode('-',$_POST['zona_val14']);
        $val_final15 = explode('-',$_POST['zona_val15']);
        $val_final16 = explode('-',$_POST['zona_val16']);
        $zona1 = $_POST['zona1'];
        $zona2 = $_POST['zona2'];
        $zona3 = $_POST['zona3'];
        $zona4 = $_POST['zona4'];
        $zona5 = $_POST['zona5'];
        $zona6 = $_POST['zona6'];
        $val1 = $val_final1[1];
        $val2 = $val_final2[1];
        $val3 = $val_final3[1];
        $val4 = $val_final4[1];
        $val5 = $val_final5[1];
        $val6 = $val_final6[1];
        $val7 = $val_final7[1];
        $val8 = $val_final8[1];
        $val9 = $val_final9[1];
        $val10 = $val_final10[1];
        $val11 = $val_final11[1];
        $val12 = $val_final12[1];
        $val13 = $val_final13[1];
        $val14 = $val_final14[1];
        $val15 = $val_final15[1];
        $val16 = $val_final16[1];
        function valor($valvula){
            switch ($valvula) {
              case 'z1':
                $valvula = 1;
                break;
              case 'z2':
                $valvula = 2;
                break;
              case 'z3':
                $valvula = 3;
                break;
              case 'z4':
                $valvula = 4;
                break;
              case 'z5':
                $valvula = 5;
                break;
              case 'z6':
                $valvula = 6;
                break;
            }
            return $valvula;
        }

        include_once('conexion.php');
        $con=mysqli_query($enlace,'INSERT INTO valvulas_por_zonas (fecha,zona_val1,zona_val2,zona_val3,zona_val4,zona_val5,zona_val6,zona_val7,zona_val8,zona_val9,zona_val10,zona_val11,zona_val12,zona_val13,zona_val14,zona_val15,zona_val16) VALUES (NOW(),'.valor($val1).','.valor($val2).','.valor($val3).','.valor($val4).','.valor($val5).','.valor($val6).','.valor($val7).','.valor($val8).','.valor($val9).','.valor($val10).','.valor($val11).','.valor($val12).','.valor($val13).','.valor($val14).','.valor($val15).','.valor($val16).')');
        $con2=mysqli_query($enlace,'INSERT INTO modo_activo (tiempo,m_programado) values(NOW(),1)');
        $con4=mysqli_query($enlace,'INSERT INTO tiempo_zona (tiempo, zona_1, zona_2, zona_3, zona_4, zona_5, zona_6) values(NOW(),'.$zona1.','.$zona2.','.$zona3.','.$zona4.','.$zona5.','.$zona6.')');
        $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1)');
        if($con){
         echo "configuracion programada hecha exitosamente";
         mysqli_close($enlace);
       }else{
         echo "configuracion programada devolvio un error por favor intente mas tarde";
         mysqli_close($enlace);
       }
  

?>