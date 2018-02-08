<?php 
    if(isset($_POST['manual'])){
    include_once('conexion.php');
    $con=mysqli_query($enlace,'INSERT INTO modo_activo (tiempo,m_manual) values(NOW(),1)');
    $con3=mysqli_query($enlace,'INSERT INTO estados_valvula1(Fecha, estado_val1, estado_val2, estado_val3, estado_val4, estado_val5, estado_val6, estado_val7, estado_val8, estado_val9, estado_val10, estado_val11, estado_val12, estado_val13,estado_val14, estado_val15, estado_val16) VALUES (NOW(),1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1)');
        if($con){
            echo "todas las valvulas han sido activadas";
        }else{
            echo "problema encontrado";
        }
    }

?>