<?php 
    if(isset($_POST['apagar'])){
    include_once('conexion.php');
    $con2=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)');
    }
    mysqli_close($enlace);
?>