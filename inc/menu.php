<li><a href="#Inicio"><span class="icon inicio"></span>Inicio</a></li>
						<li class="Nav-submenu d-none d-sm-block">Modo de Funcionamiento
							<ul>
								<li><a href="#" data-toggle="modal" data-target="#automatico-single"><span class="icon automatico"></span><?php
        include_once('conexion.php');
    $con=mysqli_query($enlace,'SELECT * FROM modo_activo ORDER BY tiempo DESC LIMIT 1 ');
    $row=mysqli_fetch_assoc($con);
    if($row['m_automatico'] == 1){
        echo "<strong>"."Automatico"."</strong>";
    }else{
        echo "Automatico";
    }
    
?></a></li>
                                <li><a href="#" id="manualv"><span class="<?php
    include_once('conexion.php');
    $con=mysqli_query($enlace,'SELECT * FROM modo_activo ORDER BY tiempo DESC LIMIT 1 ');
    $row=mysqli_fetch_assoc($con);
    if($row['m_manual'] == 1){
        echo "icon apagado";
    }else{
        echo "icon manual";
    }
    
?>"></span><?php
    $con=mysqli_query($enlace,'SELECT * FROM modo_activo ORDER BY tiempo DESC LIMIT 1 ');
    $row=mysqli_fetch_assoc($con);
    if($row['m_manual'] == 1){
        echo "<strong>"."Manual"."</strong>";
    }else{
        echo "Manual";
    }
    
?></a></li>
								<li><a href="#" id="" data-toggle="modal" data-target="#shutdown-modal"><span class="<?php
    include_once('conexion.php');
    $con=mysqli_query($enlace,'SELECT * FROM modo_activo ORDER BY tiempo DESC LIMIT 1 ');
    $row=mysqli_fetch_assoc($con);
    if($row['m_apagado'] == 1){
        echo "icon apagado";
    }else{
        echo "icon manual";
    }
    
?>"></span><?php
    $con=mysqli_query($enlace,'SELECT * FROM modo_activo ORDER BY tiempo DESC LIMIT 1 ');
    $row=mysqli_fetch_assoc($con);
    if($row['m_apagado'] == 1){
        echo "<strong>"."Apagado"."</strong>";
    }else{
        echo "Apagado";
    }
    
?></a></li>
							</ul>
						</li>
						<li><a href="#Programador"><span class="icon programador"></span>Programado</a></li>
						<li><a href="#Humedad"><span class="icon humedad"></span>Humedad</a></li>
						<li class="Nav-submenu d-block d-sm-none">
							<ul>
								<li><a href="#" data-toggle="modal" data-target="#automatico-single"><span class="icon automatico"></span>Automático</a></li>
                                <li><a href="#"><span class="<?php 
    $con=mysqli_query($enlace,'SELECT * FROM modo_activo ORDER BY tiempo DESC LIMIT 1 ');
    $row=mysqli_fetch_assoc($con);
    if($row['m_manual'] == 1){
        echo "icon apagado";
    }else{
        echo "icon manual";
    }   
?>"></span>Manual</a></li>
								<li><a href="#" data-toggle="modal" data-target="#shutdown-modal"><span class="<?php
    include_once('conexion.php');
    $con=mysqli_query($enlace,'SELECT * FROM modo_activo ORDER BY tiempo DESC LIMIT 1 ');
    $row=mysqli_fetch_assoc($con);
    if($row['m_apagado'] == 1){
        echo "icon apagado";
    }else{
        echo "icon manual";
    }
    
?>"></span><?php
    $con=mysqli_query($enlace,'SELECT * FROM modo_activo ORDER BY tiempo DESC LIMIT 1 ');
    $row=mysqli_fetch_assoc($con);
    if($row['m_apagado'] == 1){
        echo "<strong>"."Apagado"."</strong>";
    }else{
        echo "Apagado";
    }
    
?></a></li>
							</ul>
						</li>