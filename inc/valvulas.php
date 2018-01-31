<?php 
            include('conexion.php');
            $query = mysqli_query($enlace,"SELECT * FROM medicion_humedad  order by id desc limit 1");
            $assoc= mysqli_fetch_assoc($query);
            $i = 1;
            while($assoc){
            ?>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<div class="Section-article">
					<a data-toggle="modal" data-target="#sensor-history" class="valvula Sensor<?php echo $i; ?>" id="<?php echo $i; ?>">
                        <div class="article-sensor">
        					<img class="img-fluid" src="img/sensor.png" alt="Sensor <?php echo $i; ?>: <?php echo $assoc['sensor'.$i]; ?> humedad"/>
        					<p class="article-value" id="nombre-valv"><?php echo $assoc['sensor'.$i]; ?></p>
                        </div>
			        <p class="article-name">Sensor <?php echo $i; ?></p>
				</a>
			</div>
		</div>
        <?php
        $i++;
        if($i == 17){
             break;
        }
    }
    mysqli_close($enlace);
?>
