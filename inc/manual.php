<?php 
    if(isset($_POST['manual'])){
    include_once('conexion.php');
    $con=mysqli_query($enlace,'INSERT INTO modo_activo (tiempo,m_manual) values(NOW(),1)');
        if($con){
            echo "modo manual activado";
        }else{
            echo "problema encontrado";
        }
    }

?>