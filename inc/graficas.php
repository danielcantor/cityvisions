<?php 
            $sensor = $_POST['sensor'];
            include('conexion.php');
            $query = mysqli_query($enlace,"SELECT $sensor,fecha FROM medicion_humedad  order by id");
            $datos[0] = array('fecha','humedad'); 
        $i = 1;
        while($assoc=mysqli_fetch_array($query, MYSQLI_BOTH)){
        $hora = date('h:i a',strtotime(str_replace('-','/', $assoc['fecha'])));
        $datos[$i] = array($hora,(int)$assoc[$sensor]);
        $i++; 
        }
    echo json_encode($datos);
    mysqli_close($enlace);
?>
