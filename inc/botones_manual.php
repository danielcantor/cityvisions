<?php
  if(isset($_POST['valv']) && isset($_POST['estado'])){
      $valvula = $_POST['valv'];
      $estado = $_POST['estado'];
       include('conexion.php');
        $con=mysqli_query($enlace,'SELECT * FROM estados_valvula1 ORDER BY Fecha DESC LIMIT 1 ');
        $row=mysqli_fetch_assoc($con);
        $id = $row['ID'];
        switch ($estado) {
          case 'activa':
            $query = mysqli_query($enlace,'UPDATE estados_valvula1 SET '.$valvula.'=0 WHERE ID ='.$id.' ');
            if($query){
              echo "realizado";
            }else{
              echo "no realizado";
            }
            mysqli_close($enlace);
            break;

          case 'inactiva':
            $query = mysqli_query($enlace,'UPDATE estados_valvula1 SET '.$valvula.' = 1 WHERE ID = '.$id.' ');
            if($query){
              echo "realizado";
            }else{
              echo "no realizado";
            } 
            mysqli_close($enlace);
            break;
          
        }
  }

?>