									<div class="Section-content">
										<div class="row">
                                    <?php 
                include('inc/conexion.php');
                $con=mysqli_query($enlace,'SELECT * FROM estados_valvula1 ORDER BY Fecha ASC LIMIT 1 ');
                $row=mysqli_fetch_assoc($con);
                include_once('inc/color.php');
                $i = 01;
                while ($row) {
                  ?>
                      <div class="col-2">
												<div class="Section-article">
													<img class="img-fluid" src="img/modo-valvula-<?php echo color($row['estado_val'.$i]); ?>.png" alt="Válvula 01 <?php echo color($row['estado_valv'.$i]); ?>"/>
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
										</div>