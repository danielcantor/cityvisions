<?php
switch ($_POST['horario']) {
  case '2':
        $hora = $_POST['hora'];
        $minuto = $_POST['minuto'];
        $segundo = $_POST['segundo'];
        $zona = $_POST['zona'];
        $duracion = $_POST['duracion'];
        $hora2 = $_POST['hora2'];
        $minuto2 = $_POST['minuto2'];
        $segundo2 = $_POST['segundo2'];
        $zona2 = $_POST['zona2'];
        $duracion2 = $_POST['duracion2'];
         if($horario == 'pm'){
        $hora = $hora + 12;
      }
        if($horario2 == 'pm'){
        $hora2 = $hora2 + 12;
      }
        include_once('conexion.php');
        $con=mysqli_query($enlace,'INSERT INTO nuevo_horario (fecha,hora_1,min_1,seg_1,duracion_1,hora_2,min_2,seg_2,duracion_2) VALUES (NOW(),'.$hora.','.$minuto.','.$segundo.','.$duracion.','.$hora2.','.$minuto2.','.$segundo2.','.$duracion2.')');

    break;
  case '3':
        $hora = $_POST['hora'];
        $minuto = $_POST['minuto'];
        $segundo = $_POST['segundo'];
        $zona = $_POST['zona'];
        $duracion = $_POST['duracion'];
        $hora2 = $_POST['hora2'];
        $minuto2 = $_POST['minuto2'];
        $segundo2 = $_POST['segundo2'];
        $zona2 = $_POST['zona2'];
        $duracion2 = $_POST['duracion2'];
        $hora3 = $_POST['hora3'];
        $minuto3 = $_POST['minuto3'];
        $segundo3 = $_POST['segundo3'];
        $zona3 = $_POST['zona3'];
        $duracion3 = $_POST['duracion3'];
        if($horario == 'pm'){
        $hora = $hora + 12;
      }
        if($horario2 == 'pm'){
        $hora2 = $hora2 + 12;
      }
       if($horario3 == 'pm'){
        $hora2 = $hora2 + 12;
      }
        include_once('conexion.php');
        $con=mysqli_query($enlace,'INSERT INTO nuevo_horario (fecha,hora_1,min_1,seg_1,duracion_1,hora_2,min_2,seg_2,duracion_2,hora_3,min_3,seg_3,duracion_3) VALUES (NOW(),'.$hora.','.$minuto.','.$segundo.','.$duracion.','.$hora2.','.$minuto2.','.$segundo2.','.$duracion2.','.$hora3.','.$minuto3.','.$segundo3.','.$duracion3.')');

    break;
    
  default:
      $hora = $_POST['hora'];
      $minuto = $_POST['minuto'];
      $segundo = $_POST['segundo'];
      $zona = $_POST['zona'];
      $duracion = $_POST['duracion'];
      if($horario == 'pm'){
        $hora = $hora + 12;
      }
      include_once('conexion.php');
      $con=mysqli_query($enlace,'INSERT INTO nuevo_horario (fecha,hora_1,min_1,seg_1,duracion_1) VALUES (NOW(),'.$hora.','.$minuto.','.$segundo.','.$duracion.')');

    break;
}
        if($con){
         echo "configuracion automatica hecha exitosamente";
         mysqli_close($enlace);
       }else{
         echo "configuracion automatica devolvio un error por favor intente mas tarde";
         mysqli_close($enlace);
       }
  }

?>