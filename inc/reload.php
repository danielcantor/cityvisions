								<?php 
                include('conexion.php');
                $con=mysqli_query($enlace,'SELECT * FROM estados_valvula1 ORDER BY Fecha DESC LIMIT 1 ');
                $row=mysqli_fetch_assoc($con);
                include_once('color.php');
                $i = 01;
                while ($row) {
                  ?>
                      <div class="col-2">
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
                mysqli_close($enlace);
              ?>
									