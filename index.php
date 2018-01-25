<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title>CITYVISION - Desarrollo de control y sistemas de riego.</title>
	<meta name="description" content="Desarrollo de control y sistemas de riego."/>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet"/>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/main.rds.css" rel="stylesheet"/>
</head>
<body>
	<div class="container-fluid">
		<div class="row no-gutters">
			<header class="col-2 Header">
				<figure>
					<img class="img-fluid" src="img/logo-cityvision.png" alt="CityVision"/>
				</figure>
				<nav>
					<ul class="Nav-main">
						<li><a href="#Inicio"><span class="icon inicio"></span>Inicio</a></li>
						<li class="Nav-submenu">Modo de Funcionamiento
							<ul>
								<li><a href="#"><span class="icon automatico"></span>Automático</a></li>
								<li><a href="#"><span class="icon manual"></span>Manual</a></li>
								<li><a href="#"><span class="icon apagado"></span>Apagado</a></li>
							</ul>
						</li>
						<li><a href="#Programador"><span class="icon programador"></span>Programador</a></li>
						<li><a href="#Humedad"><span class="icon humedad"></span>Humedad</a></li>
					</ul>
				</nav>
			</header>
			<main class="col-10 Main" id="Inicio">
				<div class="Dashboard">
					<div class="container">
						<div class="row">
							<div class="col-8">
								<h1 class="Dashboard-title">Dashboard</h1>
								<h2 class="Dashboard-subtitle">Desarrollo de control y sistemas de riego.</h2>							
							</div>
							<div class="col-2">
								<p class="Dashboard-title" id="timer"></p>
								<p>hora actual</p>
							</div>
							<div class="col-2">
								<p class="Dashboard-title riego">2:20 a.m.</p>
								<p>próximo riego</p>
							</div>
						</div>
					</div>
				</div>
				<section class="Modo" id="Modo">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="Section-container">
									<div class="Section-header">
										<div class="row justify-content-between">
											<div class="col-7">
												<h2 class="Section-title">Modo de Funcionamiento del Sistema: <span class="modo-activo">Manual</span></h2>												
											</div>
											<div class="col-5">
												<div class="Section-extra">
													<a href="">Iniciar todas las válvulas</a>
													<a href="#" data-toggle="modal" data-target="#shutdown-modal">Apagar todas las válvulas</a>
												</div>
											</div>
										</div>
									</div>
                                    <?php include('inc/tabla.php') ?>
                                    
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="Modo" id="Programador">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="Section-container">
									<div class="Section-header">
										<div class="row justify-content-between">
											<div class="col-7">
												<h2 class="Section-title">Programador de Válvulas</h2>
											</div>
											<div class="col-5">
												<div class="Section-extra">
													<p class="Section-descripcion">Clic para activar la vávula en dicha zona</p>
												</div>
											</div>
										</div>
									</div>
									<div class="Section-content">
										<div class="row">
											<div class="col-12">
												<div class="zone">
													<h4 class="zone-description">Seleccione la Zona para Programar la Válvula</h4>
													<div class="row">
														<div class="col-2">
															<p class="zone-title">Zona 1</p>
														</div>
														<div class="col-10">
															<div class="radio">
																<input id="radio-z1-1" name="radio" type="checkbox" checked>
																<label for="radio-z1-1" class="radio-label">1</label>
															</div>
															<div class="radio">
																<input id="radio-z1-2" name="radio" type="checkbox">
																<label  for="radio-z1-2" class="radio-label">2</label>
															</div>
															<div class="radio">
																<input id="radio-z1-3" name="radio" type="checkbox">
																<label for="radio-z1-3" class="radio-label">3</label>
															</div>
															<div class="radio">
																<input id="radio-z1-4" name="radio" type="checkbox">
																<label  for="radio-z1-4" class="radio-label">4</label>
															</div>
															<div class="radio">
																<input id="radio-z1-5" name="radio" type="checkbox">
																<label for="radio-z1-5" class="radio-label">5</label>
															</div>
															<div class="radio">
																<input id="radio-z1-6" name="radio" type="checkbox">
																<label  for="radio-z1-6" class="radio-label">6</label>
															</div>
															<div class="radio">
																<input id="radio-z1-7" name="radio" type="checkbox" checked>
																<label for="radio-z1-7" class="radio-label">7</label>
															</div>
															<div class="radio">
																<input id="radio-z1-8" name="radio" type="checkbox">
																<label  for="radio-z1-8" class="radio-label">8</label>
															</div>
															<div class="radio">
																<input id="radio-z1-9" name="radio" type="checkbox" checked>
																<label for="radio-z1-9" class="radio-label">9</label>
															</div>
															<div class="radio">
																<input id="radio-z1-10" name="radio" type="checkbox">
																<label  for="radio-z1-10" class="radio-label">10</label>
															</div>
															<div class="radio">
																<input id="radio-z1-11" name="radio" type="checkbox">
																<label for="radio-z1-11" class="radio-label">11</label>
															</div>
															<div class="radio">
																<input id="radio-z1-12" name="radio" type="checkbox">
																<label  for="radio-z1-12" class="radio-label">12</label>
															</div>
															<div class="radio">
																<input id="radio-z1-13" name="radio" type="checkbox" checked>
																<label for="radio-z1-13" class="radio-label">13</label>
															</div>
															<div class="radio">
																<input id="radio-z1-14" name="radio" type="checkbox">
																<label  for="radio-z1-14" class="radio-label">14</label>
															</div>
															<div class="radio">
																<input id="radio-z1-15" name="radio" type="checkbox">
																<label for="radio-z1-15" class="radio-label">15</label>
															</div>
															<div class="radio">
																<input id="radio-z1-16" name="radio" type="checkbox">
																<label  for="radio-z1-16" class="radio-label">16</label>
															</div>
														</div>
													</div>													
												</div>
												<div class="zone">
													<div class="row">
														<div class="col-2">
															<p class="zone-title">Zona 2</p>
														</div>
														<div class="col-10">
															<div class="radio">
																<input id="radio-z2-1" name="radio" type="checkbox" checked>
																<label for="radio-z2-1" class="radio-label">1</label>
															</div>
															<div class="radio">
																<input id="radio-z2-2" name="radio" type="checkbox">
																<label  for="radio-z2-2" class="radio-label">2</label>
															</div>
															<div class="radio">
																<input id="radio-z2-3" name="radio" type="checkbox">
																<label for="radio-z2-3" class="radio-label">3</label>
															</div>
															<div class="radio">
																<input id="radio-z2-4" name="radio" type="checkbox">
																<label  for="radio-z2-4" class="radio-label">4</label>
															</div>
															<div class="radio">
																<input id="radio-z2-5" name="radio" type="checkbox">
																<label for="radio-z2-5" class="radio-label">5</label>
															</div>
															<div class="radio">
																<input id="radio-z2-6" name="radio" type="checkbox">
																<label  for="radio-z2-6" class="radio-label">6</label>
															</div>
															<div class="radio">
																<input id="radio-z2-7" name="radio" type="checkbox" checked>
																<label for="radio-z2-7" class="radio-label">7</label>
															</div>
															<div class="radio">
																<input id="radio-z2-8" name="radio" type="checkbox">
																<label  for="radio-z2-8" class="radio-label">8</label>
															</div>
															<div class="radio">
																<input id="radio-z2-9" name="radio" type="checkbox" checked>
																<label for="radio-z2-9" class="radio-label">9</label>
															</div>
															<div class="radio">
																<input id="radio-z2-10" name="radio" type="checkbox">
																<label  for="radio-z2-10" class="radio-label">10</label>
															</div>
															<div class="radio">
																<input id="radio-z2-11" name="radio" type="checkbox">
																<label for="radio-z2-11" class="radio-label">11</label>
															</div>
															<div class="radio">
																<input id="radio-z2-12" name="radio" type="checkbox">
																<label  for="radio-z2-12" class="radio-label">12</label>
															</div>
															<div class="radio">
																<input id="radio-z2-13" name="radio" type="checkbox" checked>
																<label for="radio-z2-13" class="radio-label">13</label>
															</div>
															<div class="radio">
																<input id="radio-z2-14" name="radio" type="checkbox">
																<label  for="radio-z2-14" class="radio-label">14</label>
															</div>
															<div class="radio">
																<input id="radio-z2-15" name="radio" type="checkbox">
																<label for="radio-z2-15" class="radio-label">15</label>
															</div>
															<div class="radio">
																<input id="radio-z2-16" name="radio" type="checkbox">
																<label  for="radio-z2-16" class="radio-label">16</label>
															</div>
														</div>
													</div>													
												</div>
												<div class="zone">
													<div class="row">
														<div class="col-2">
															<p class="zone-title">Zona 3</p>
														</div>
														<div class="col-10">
															<div class="radio">
																<input id="radio-z3-1" name="radio" type="checkbox">
																<label for="radio-z3-1" class="radio-label">1</label>
															</div>
															<div class="radio">
																<input id="radio-z3-2" name="radio" type="checkbox" checked>
																<label  for="radio-z3-2" class="radio-label">2</label>
															</div>
															<div class="radio">
																<input id="radio-z3-3" name="radio" type="checkbox">
																<label for="radio-z3-3" class="radio-label">3</label>
															</div>
															<div class="radio">
																<input id="radio-z3-4" name="radio" type="checkbox">
																<label  for="radio-z3-4" class="radio-label">4</label>
															</div>
															<div class="radio">
																<input id="radio-z3-5" name="radio" type="checkbox" checked>
																<label for="radio-z3-5" class="radio-label">5</label>
															</div>
															<div class="radio">
																<input id="radio-z3-6" name="radio" type="checkbox">
																<label  for="radio-z3-6" class="radio-label">6</label>
															</div>
															<div class="radio">
																<input id="radio-z3-7" name="radio" type="checkbox">
																<label for="radio-z3-7" class="radio-label">7</label>
															</div>
															<div class="radio">
																<input id="radio-z3-8" name="radio" type="checkbox">
																<label  for="radio-z3-8" class="radio-label">8</label>
															</div>
															<div class="radio">
																<input id="radio-z3-9" name="radio" type="checkbox">
																<label for="radio-z3-9" class="radio-label">9</label>
															</div>
															<div class="radio">
																<input id="radio-z3-10" name="radio" type="checkbox" checked>
																<label  for="radio-z3-10" class="radio-label">10</label>
															</div>
															<div class="radio">
																<input id="radio-z3-11" name="radio" type="checkbox">
																<label for="radio-z3-11" class="radio-label">11</label>
															</div>
															<div class="radio">
																<input id="radio-z3-12" name="radio" type="checkbox">
																<label  for="radio-z3-12" class="radio-label">12</label>
															</div>
															<div class="radio">
																<input id="radio-z3-13" name="radio" type="checkbox">
																<label for="radio-z3-13" class="radio-label">13</label>
															</div>
															<div class="radio">
																<input id="radio-z3-14" name="radio" type="checkbox">
																<label  for="radio-z3-14" class="radio-label">14</label>
															</div>
															<div class="radio">
																<input id="radio-z3-15" name="radio" type="checkbox">
																<label for="radio-z3-15" class="radio-label">15</label>
															</div>
															<div class="radio">
																<input id="radio-z3-16" name="radio" type="checkbox">
																<label  for="radio-z3-16" class="radio-label">16</label>
															</div>
														</div>
													</div>													
												</div>
												<div class="zone">
													<div class="row">
														<div class="col-2">
															<p class="zone-title">Zona 4</p>
														</div>
														<div class="col-10">
															<div class="radio">
																<input id="radio-z4-1" name="radio" type="checkbox">
																<label for="radio-z4-1" class="radio-label">1</label>
															</div>
															<div class="radio">
																<input id="radio-z4-2" name="radio" type="checkbox">
																<label  for="radio-z4-2" class="radio-label">2</label>
															</div>
															<div class="radio">
																<input id="radio-z4-3" name="radio" type="checkbox">
																<label for="radio-z4-3" class="radio-label">3</label>
															</div>
															<div class="radio">
																<input id="radio-z4-4" name="radio" type="checkbox">
																<label  for="radio-z4-4" class="radio-label">4</label>
															</div>
															<div class="radio">
																<input id="radio-z4-5" name="radio" type="checkbox">
																<label for="radio-z4-5" class="radio-label">5</label>
															</div>
															<div class="radio">
																<input id="radio-z4-6" name="radio" type="checkbox" checked>
																<label  for="radio-z4-6" class="radio-label">6</label>
															</div>
															<div class="radio">
																<input id="radio-z4-7" name="radio" type="checkbox">
																<label for="radio-z4-7" class="radio-label">7</label>
															</div>
															<div class="radio">
																<input id="radio-z4-8" name="radio" type="checkbox">
																<label  for="radio-z4-8" class="radio-label">8</label>
															</div>
															<div class="radio">
																<input id="radio-z4-9" name="radio" type="checkbox">
																<label for="radio-z4-9" class="radio-label">9</label>
															</div>
															<div class="radio">
																<input id="radio-z4-10" name="radio" type="checkbox">
																<label  for="radio-z4-10" class="radio-label">10</label>
															</div>
															<div class="radio">
																<input id="radio-z4-11" name="radio" type="checkbox">
																<label for="radio-z4-11" class="radio-label">11</label>
															</div>
															<div class="radio">
																<input id="radio-z4-12" name="radio" type="checkbox">
																<label  for="radio-z4-12" class="radio-label">12</label>
															</div>
															<div class="radio">
																<input id="radio-z4-13" name="radio" type="checkbox">
																<label for="radio-z4-13" class="radio-label">13</label>
															</div>
															<div class="radio">
																<input id="radio-z4-14" name="radio" type="checkbox">
																<label  for="radio-z4-14" class="radio-label">14</label>
															</div>
															<div class="radio">
																<input id="radio-z4-15" name="radio" type="checkbox">
																<label for="radio-z4-15" class="radio-label">15</label>
															</div>
															<div class="radio">
																<input id="radio-z4-16" name="radio" type="checkbox" checked>
																<label  for="radio-z4-16" class="radio-label">16</label>
															</div>
														</div>
													</div>													
												</div>
												<div class="zone">
													<div class="row">
														<div class="col-2">
															<p class="zone-title">Zona 5</p>
														</div>
														<div class="col-10">
															<div class="radio">
																<input id="radio-z5-1" name="radio" type="checkbox">
																<label for="radio-z5-1" class="radio-label">1</label>
															</div>
															<div class="radio">
																<input id="radio-z5-2" name="radio" type="checkbox">
																<label  for="radio-z5-2" class="radio-label">2</label>
															</div>
															<div class="radio">
																<input id="radio-z5-3" name="radio" type="checkbox">
																<label for="radio-z5-3" class="radio-label">3</label>
															</div>
															<div class="radio">
																<input id="radio-z5-4" name="radio" type="checkbox" checked>
																<label  for="radio-z5-4" class="radio-label">4</label>
															</div>
															<div class="radio">
																<input id="radio-z5-5" name="radio" type="checkbox">
																<label for="radio-z5-5" class="radio-label">5</label>
															</div>
															<div class="radio">
																<input id="radio-z5-6" name="radio" type="checkbox">
																<label  for="radio-z5-6" class="radio-label">6</label>
															</div>
															<div class="radio">
																<input id="radio-z5-7" name="radio" type="checkbox">
																<label for="radio-z5-7" class="radio-label">7</label>
															</div>
															<div class="radio">
																<input id="radio-z5-8" name="radio" type="checkbox">
																<label  for="radio-z5-8" class="radio-label">8</label>
															</div>
															<div class="radio">
																<input id="radio-z5-9" name="radio" type="checkbox">
																<label for="radio-z5-9" class="radio-label">9</label>
															</div>
															<div class="radio">
																<input id="radio-z5-10" name="radio" type="checkbox">
																<label  for="radio-z5-10" class="radio-label">10</label>
															</div>
															<div class="radio">
																<input id="radio-z5-11" name="radio" type="checkbox">
																<label for="radio-z5-11" class="radio-label">11</label>
															</div>
															<div class="radio">
																<input id="radio-z5-12" name="radio" type="checkbox">
																<label  for="radio-z5-12" class="radio-label">12</label>
															</div>
															<div class="radio">
																<input id="radio-z5-13" name="radio" type="checkbox">
																<label for="radio-z5-13" class="radio-label">13</label>
															</div>
															<div class="radio">
																<input id="radio-z5-14" name="radio" type="checkbox" checked>
																<label  for="radio-z5-14" class="radio-label">14</label>
															</div>
															<div class="radio">
																<input id="radio-z5-15" name="radio" type="checkbox" checked>
																<label for="radio-z5-15" class="radio-label">15</label>
															</div>
															<div class="radio">
																<input id="radio-z5-16" name="radio" type="checkbox">
																<label  for="radio-z5-16" class="radio-label">16</label>
															</div>
														</div>
													</div>													
												</div>
												<div class="zone">
													<div class="row">
														<div class="col-2">
															<p class="zone-title">Zona 6</p>
														</div>
														<div class="col-10">
															<div class="radio">
																<input id="radio-z6-1" name="radio" type="checkbox">
																<label for="radio-z6-1" class="radio-label">1</label>
															</div>
															<div class="radio">
																<input id="radio-z6-2" name="radio" type="checkbox">
																<label  for="radio-z6-2" class="radio-label">2</label>
															</div>
															<div class="radio">
																<input id="radio-z6-3" name="radio" type="checkbox">
																<label for="radio-z6-3" class="radio-label">3</label>
															</div>
															<div class="radio">
																<input id="radio-z6-4" name="radio" type="checkbox">
																<label  for="radio-z6-4" class="radio-label">4</label>
															</div>
															<div class="radio">
																<input id="radio-z6-5" name="radio" type="checkbox">
																<label for="radio-z6-5" class="radio-label">5</label>
															</div>
															<div class="radio">
																<input id="radio-z6-6" name="radio" type="checkbox">
																<label  for="radio-z6-6" class="radio-label">6</label>
															</div>
															<div class="radio">
																<input id="radio-z6-7" name="radio" type="checkbox">
																<label for="radio-z6-7" class="radio-label">7</label>
															</div>
															<div class="radio">
																<input id="radio-z6-8" name="radio" type="checkbox">
																<label  for="radio-z6-8" class="radio-label">8</label>
															</div>
															<div class="radio">
																<input id="radio-z6-9" name="radio" type="checkbox">
																<label for="radio-z6-9" class="radio-label">9</label>
															</div>
															<div class="radio">
																<input id="radio-z6-10" name="radio" type="checkbox">
																<label  for="radio-z6-10" class="radio-label">10</label>
															</div>
															<div class="radio">
																<input id="radio-z6-11" name="radio" type="checkbox" checked>
																<label for="radio-z6-11" class="radio-label">11</label>
															</div>
															<div class="radio">
																<input id="radio-z6-12" name="radio" type="checkbox" checked>
																<label  for="radio-z6-12" class="radio-label">12</label>
															</div>
															<div class="radio">
																<input id="radio-z6-13" name="radio" type="checkbox">
																<label for="radio-z6-13" class="radio-label">13</label>
															</div>
															<div class="radio">
																<input id="radio-z6-14" name="radio" type="checkbox">
																<label  for="radio-z6-14" class="radio-label">14</label>
															</div>
															<div class="radio">
																<input id="radio-z6-15" name="radio" type="checkbox">
																<label for="radio-z6-15" class="radio-label">15</label>
															</div>
															<div class="radio">
																<input id="radio-z6-16" name="radio" type="checkbox">
																<label  for="radio-z6-16" class="radio-label">16</label>
															</div>
														</div>
													</div>													
												</div>
											</div>
											<div class="col-12">
												<div class="zone">
													<h4 class="zone-description">Tiempo del Ciclo <small>Los valores van desde 1 a 24 minutos</small></h4>
													<div class="row">
														<div class="col-2">
															<div class="form-group">
																<label class="zone-title">Zona 1</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-2">
															<div class="form-group">
																<label class="zone-title">Zona 2</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-2">
															<div class="form-group">
																<label class="zone-title">Zona 3</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-2">
															<div class="form-group">
																<label class="zone-title">Zona 4</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-2">
															<div class="form-group">
																<label class="zone-title">Zona 5</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-2">
															<div class="form-group">
																<label class="zone-title">Zona 6</label>
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="Modo" id="Humedad">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="Section-container">
									<div class="Section-header">
										<div class="row justify-content-between">
											<div class="col-7">
												<h2 class="Section-title">Estado de los Sensores</h2>
											</div>
											<div class="col-5">
												<div class="Section-extra">
													<p class="Section-descripcion">Clic en el sensor para ver su histórico diario</p>
												</div>
											</div>
										</div>
									</div>
									<div class="Section-content">
										<div class="row">
                                            <?php 
                                            include('inc/valvulas.php');
                                            ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="Footer">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<p>CityVisions 2018  | Powered by Tetrabid</p>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
    </div>
	<div class="modal fade" id="sensor-history" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Sensor <span id="sensor"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                    
					<div id="curve_chart" style="width: 100%"></div>
				</div>
				<div class="modal-footer">
                    <button type="button" class="btn btn-success reload"  id="">Recargar</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="shutdown-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Advertencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <p>Esta seguro que desea apagar todas las valvulas activas y no apagar una en particular?</p>
          
      </div>
      <div class="modal-footer">
              <button class="btn btn-success px-3">Si</button> <button class="btn btn-danger px-3" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div> 
    <script src="js/jquery.2.2.4.min.js"></script>
    <script type="text/javascript" src="js/llamada.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
	$(document).ready( ()  => {
		$('.valvula').click(function() {
		var	id = $(this).attr('id');
		var data = $.ajax({
			type: "post",
			url: "inc/graficas.php",
			data:{'sensor' : 'sensor'+id},
			dataType:"json",
			async: false
		}).responseText;
		console.log(data);
		$('#sensor').text(id);
		$('.reload').attr('id',id);
		var infoGraf = JSON.parse(data);
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
			var datas = google.visualization.arrayToDataTable(infoGraf);
			var options = {
				curveType: 'function',
				legend: { position: 'top' }
			};

			var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
			chart.draw(datas, options);
		}
			});
		
		$('.reload').click(function() {
		var	id = $(this).attr('id');
		var data = $.ajax({
			type: "post",
			url: "inc/graficas.php",
			data:{'sensor' : 'sensor'+id},
			dataType:"json",
			async: false
		}).responseText;
		$('#sensor').text(id);
		var infoGraf = JSON.parse(data);
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
			var datas = google.visualization.arrayToDataTable(infoGraf);
			var options = {
				curveType: 'function',
				legend: { position: 'top' }
			};

			var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
			chart.draw(datas, options);
		}
			});

		});

    </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scroll.js"></script>
	<script src="js/main.rds.js"></script>
</body>
</html>
