									<div class="Section-content">
										<div class="row" id="reload">
                                    <?php 
                include('inc/conexion.php');
                $con=mysqli_query($enlace,'SELECT * FROM estados_valvula1 ORDER BY Fecha DESC LIMIT 1 ');
                $row=mysqli_fetch_assoc($con);
                include_once('inc/color.php');
                $con2=mysqli_query($enlace,'SELECT * FROM modo_activo ORDER BY tiempo DESC LIMIT 1 ');
                $row2=mysqli_fetch_assoc($con2);
                if($row2['m_manual'] == 1){
	$i = 01;
	while ($row) {
	?>
	<div class="col-6 col-sm-4 col-md-3 col-lg-2">
		<div class="Section-article">
			<a id="estado_val<?php echo $i; ?>" class="manual-toggle"><img class="img-fluid" src="img/modo-valvula-<?php echo color($row['estado_val'.$i]); ?>.png" alt="<?php echo color($row['estado_val'.$i]); ?>"/></a>
			<p class="article-name">Válvula <?php echo $i; ?></p>
		</div>
	</div>
	<?php
	$i++;
	if($i == 17){
		break;
	}
}
}else{
	$i = 01;
while ($row) {
	?>
	<div class="col-6 col-sm-4 col-md-3 col-lg-2">
		<div class="Section-article">
			<img class="img-fluid" src="img/modo-valvula-<?php echo color($row['estado_val'.$i]); ?>.png" alt="<?php echo color($row['estado_val'.$i]); ?>"/>
			<p class="article-name">Válvula <?php echo $i; ?></p>
		</div>
	</div>
	<?php
	$i++;
	if($i == 17){
		break;
	}
}
}

                mysqli_close($enlace);
              ?>
										</div>