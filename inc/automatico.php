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
         if($zona == 'pm'){
        $hora = $hora + 12;
      }
        if($zona2 == 'pm'){
        $hora2 = $hora2 + 12;
      }
        include_once('conexion.php');
        $compro = mysqli_query($enlace,'SELECT * FROM nuevo_horario ORDER BY fecha DESC LIMIT 1 ');
      $row = mysqli_fetch_assoc($compro);
      $id = $row['id'];
      if($row['hora_2'] == 0){
        $con2=mysqli_query($enlace,'INSERT INTO modo_activo (tiempo,m_automatico) values(NOW(),1)');
        $con=mysqli_query($enlace,'INSERT INTO nuevo_horario (fecha,hora_1,min_1,seg_1,duracion_1,hora_2,min_2,seg_2,duracion_2) VALUES (NOW(),'.$hora.','.$minuto.','.$segundo.','.$duracion.','.$hora2.','.$minuto2.','.$segundo2.','.$duracion2.')');
      }else{
       $con=mysqli_query($enlace,'UPDATE nuevo_horario SET hora_2 = '.$hora2.', min_2 = '.$minuto2.', seg_2 = '.$segundo2.' , duracion_2 = '.$duracion2.' WHERE id='.$id.' ');
      }
    
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
        if($zona == 'pm'){
        $hora = $hora + 12;
      }
        if($zona2 == 'pm'){
        $hora2 = $hora2 + 12;
      }
       if($zona3 == 'pm'){
        $hora2 = $hora2 + 12;
      }
        include_once('conexion.php');
        $compro = mysqli_query($enlace,'SELECT * FROM nuevo_horario ORDER BY fecha DESC LIMIT 1 ');
      $row = mysqli_fetch_assoc($compro);
      $id = $row['id'];
      if($row['hora_3'] == 0){
        $con2=mysqli_query($enlace,'INSERT INTO modo_activo (tiempo,m_automatico) values(NOW(),1)');
        $con=mysqli_query($enlace,'INSERT INTO nuevo_horario (fecha,hora_1,min_1,seg_1,duracion_1,hora_2,min_2,seg_2,duracion_2,hora_3,min_3,seg_3,duracion_3) VALUES (NOW(),'.$hora.','.$minuto.','.$segundo.','.$duracion.','.$hora2.','.$minuto2.','.$segundo2.','.$duracion2.','.$hora3.','.$minuto3.','.$segundo3.','.$duracion3.')');
      }else{
        $con=mysqli_query($enlace,'UPDATE nuevo_horario SET hora_3 = '.$hora3.', min_3 = '.$minuto3.', seg_3 = '.$segundo3.' , duracion_3 = '.$duracion3.' WHERE id='.$id.' ');
      }

    break;
    
  default:
      $hora = $_POST['hora'];
      $minuto = $_POST['minuto'];
      $segundo = $_POST['segundo'];
      $zona = $_POST['zona'];
      $duracion = $_POST['duracion'];
      if($zona == 'pm'){
        $hora = $hora + 12;
      }
      include_once('conexion.php');
      $compro = mysqli_query($enlace,'SELECT * FROM nuevo_horario ORDER BY fecha DESC LIMIT 1 ');
      $row = mysqli_fetch_assoc($compro);
      $id = $row['id'];
      if($row['hora_1'] == 0){
       $con=mysqli_query($enlace,'INSERT INTO nuevo_horario (fecha,hora_1,min_1,seg_1,duracion_1) VALUES (NOW(),'.$hora.','.$minuto.','.$segundo.','.$duracion.')');
       $con2=mysqli_query($enlace,'INSERT INTO modo_activo (tiempo,m_automatico) values(NOW(),1)');
      }else{
       $con=mysqli_query($enlace,'UPDATE nuevo_horario SET hora_1 = '.$hora.', min_1 = '.$minuto.', seg_1 = '.$segundo.' , duracion_1 = '.$duracion.' WHERE id='.$id.' ');
      }
      break;
}
        if($con){
         echo "configuracion automatica hecha exitosamente";
         mysqli_close($enlace);
       }else{
         echo "configuracion automatica devolvio un error por favor intente mas tarde";
         mysqli_close($enlace);
       }
?>