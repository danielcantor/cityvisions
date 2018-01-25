<?php 
function color($estado){
    switch ($estado) {
        case 1:
            echo "activa";
            break;

        case 0:

            echo "inactiva";
            break;

        default:
            echo "ERR";
            break;
    }
}
?>