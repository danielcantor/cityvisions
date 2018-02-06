<?php 
    if(isset($_POST['apagar'])){
    include_once('conexion.php');
    $con=mysqli_query($enlace,'INSERT INTO modo_activo (tiempo,m_apagado) values(NOW(),1)');
        if($con){
            echo "sistema apagado satisfactoriamente";
        }else{
            echo "problema encontrado";
        }
    }

?>