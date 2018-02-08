<?php
    include_once('conexion.php');
    $con=mysqli_query($enlace,'SELECT * FROM modo_activo ORDER BY tiempo DESC LIMIT 1 ');
    $row=mysqli_fetch_assoc($con);
    if($row['m_manual'] == 1){
        echo "Manual";
    }
    if($row['m_automatico'] == 1){
        echo "Automatico";
    }
    if($row['m_programado'] == 1){
        echo "Programado";
    }
    if($row['m_apagado'] == 1){
        echo "Apagado";
    }
    mysqli_close($enlace);
?>