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
			<header class="col-sm-4 col-md-3 col-lg-2 Header">
				<figure>
					<img class="img-fluid" src="img/logo-cityvision.png" alt="CityVision"/>
				</figure>
				<nav>
					<ul class="Nav-main">
						<li><a href="#Inicio"><span class="icon inicio"></span>Inicio</a></li>
						<li class="Nav-submenu d-none d-sm-block">Modo de Funcionamiento
							<ul>
								<li><a href="#" data-toggle="modal" data-target="#automatico-single"><span class="icon automatico"></span>Automático</a></li>
								<li><a href="#" id="actmanual"><span class="icon manual"></span>Manual</a></li>
								<li><a href="#" id="apagar"><span class="icon apagado"></span>Apagado</a></li>
							</ul>
						</li>
						<li><a href="#Programador"><span class="icon programador"></span>Programador</a></li>
						<li><a href="#Humedad"><span class="icon humedad"></span>Humedad</a></li>
						<li class="Nav-submenu d-block d-sm-none">
							<ul>
								<li><a href="#" data-toggle="modal" data-target="#automatico-single"><span class="icon automatico"></span>Automático</a></li>
								<li><a href="#"><span class="icon manual"></span>Manual</a></li>
								<li><a href="#"><span class="icon apagado"></span>Apagado</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</header>
			<main class="col-sm-8 col-md-9 col-lg-10 Main" id="Inicio">
				<div class="container">
					<div class="row d-none" id="resp-down">
						<div class="alert alert-primary lert-dismissible fade show col-12" id="respuesta" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
				<div class="Dashboard">
					<div class="container">
						<div class="row align-items-center no-gutters">
							<div class="col-12 col-md-6 col-lg-8">
								<h1 class="Dashboard-title">Dashboard</h1>
								<h2 class="Dashboard-subtitle">Desarrollo de control y sistemas de riego.</h2>
							</div>
							<div class="col-6 col-md-3 col-lg-2">
								<p class="Dashboard-title time" id="timer"></p>
								<p>hora actual</p>
							</div>
							<div class="col-6 col-md-3 col-lg-2">
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
										<div class="row justify-content-between align-items-center">
											<div class="col-12 col-sm-7 col-md-5">
												<h2 class="Section-title">Modo de Funcionamiento del Sistema: <span class="modo-activo" id="modo"><?php include('inc/modo.php'); ?></span></h2>
											</div>
											<div class="col-12 col-sm-5 col-md-7">
												<div class="Section-extra">
													<a href="#" data-toggle="modal" data-target="#automatico-single">Iniciar todas las válvulas</a>
													<a href="#" data-toggle="modal" data-target="#shutdown-modal">Apagar todas las válvulas</a>
												</div>
											</div>
										</div>
									</div id="">
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
										<div class="row justify-content-between align-items-center">
											<div class="col-12 col-sm-6">
												<h2 class="Section-title">Programador de Válvulas</h2>
											</div>
											<div class="col-12 col-sm-6">
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
													<p class="zone-subtitle">Cada valvula puede ser asignada a solo una zona</p>
													<div class="row align-items-center">
														<div class="col-12 col-md-2">
															<p class="zone-title">Zona 1</p>
														</div>
														<div class="col-12 col-md-10">
															<div class="radio">
																<input id="radio-z1-1" name="radio" type="checkbox" class="uno">
																<label for="radio-z1-1" class="radio-label">1</label>
															</div>
															<div class="radio">
																<input id="radio-z1-2" name="radio" type="checkbox" class="dos">
																<label  for="radio-z1-2" class="radio-label">2</label>
															</div>
															<div class="radio">
																<input id="radio-z1-3" name="radio" type="checkbox" class="tres">
																<label for="radio-z1-3" class="radio-label">3</label>
															</div>
															<div class="radio">
																<input id="radio-z1-4" name="radio" type="checkbox" class="cuatro">
																<label  for="radio-z1-4" class="radio-label">4</label>
															</div>
															<div class="radio">
																<input id="radio-z1-5" name="radio" type="checkbox" class="cinco">
																<label for="radio-z1-5" class="radio-label">5</label>
															</div>
															<div class="radio">
																<input id="radio-z1-6" name="radio" type="checkbox" class="seis">
																<label  for="radio-z1-6" class="radio-label">6</label>
															</div>
															<div class="radio">
																<input id="radio-z1-7" name="radio" type="checkbox" class="siete">
																<label for="radio-z1-7" class="radio-label">7</label>
															</div>
															<div class="radio">
																<input id="radio-z1-8" name="radio" type="checkbox" class="ocho">
																<label  for="radio-z1-8" class="radio-label">8</label>
															</div>
															<div class="radio">
																<input id="radio-z1-9" name="radio" type="checkbox" class="nueve">
																<label for="radio-z1-9" class="radio-label">9</label>
															</div>
															<div class="radio">
																<input id="radio-z1-10" name="radio" type="checkbox" class="diez">
																<label  for="radio-z1-10" class="radio-label">10</label>
															</div>
															<div class="radio">
																<input id="radio-z1-11" name="radio" type="checkbox" class="once">
																<label for="radio-z1-11" class="radio-label">11</label>
															</div>
															<div class="radio">
																<input id="radio-z1-12" name="radio" type="checkbox" class="doce">
																<label  for="radio-z1-12" class="radio-label">12</label>
															</div>
															<div class="radio">
																<input id="radio-z1-13" name="radio" type="checkbox" class="trece">
																<label for="radio-z1-13" class="radio-label">13</label>
															</div>
															<div class="radio">
																<input id="radio-z1-14" name="radio" type="checkbox" class="catorce">
																<label  for="radio-z1-14" class="radio-label">14</label>
															</div>
															<div class="radio">
																<input id="radio-z1-15" name="radio" type="checkbox" class="quince">
																<label for="radio-z1-15" class="radio-label">15</label>
															</div>
															<div class="radio">
																<input id="radio-z1-16" name="radio" type="checkbox" class="dieciseis">
																<label  for="radio-z1-16" class="radio-label">16</label>
															</div>
														</div>
													</div>
												</div>
												<div class="zone">
													<div class="row align-items-center">
														<div class="col-12 col-md-2">
															<p class="zone-title">Zona 2</p>
														</div>
														<div class="col-12 col-md-10">
															<div class="radio">
																<input id="radio-z2-1" name="radio" type="checkbox" class="uno">
																<label for="radio-z2-1" class="radio-label">1</label>
															</div>
															<div class="radio">
																<input id="radio-z2-2" name="radio" type="checkbox" class="dos">
																<label  for="radio-z2-2" class="radio-label">2</label>
															</div>
															<div class="radio">
																<input id="radio-z2-3" name="radio" type="checkbox" class="tres">
																<label for="radio-z2-3" class="radio-label">3</label>
															</div>
															<div class="radio">
																<input id="radio-z2-4" name="radio" type="checkbox" class="cuatro">
																<label  for="radio-z2-4" class="radio-label">4</label>
															</div>
															<div class="radio">
																<input id="radio-z2-5" name="radio" type="checkbox" class="cinco">
																<label for="radio-z2-5" class="radio-label">5</label>
															</div>
															<div class="radio">
																<input id="radio-z2-6" name="radio" type="checkbox" class="seis">
																<label  for="radio-z2-6" class="radio-label">6</label>
															</div>
															<div class="radio">
																<input id="radio-z2-7" name="radio" type="checkbox" class="siete">
																<label for="radio-z2-7" class="radio-label">7</label>
															</div>
															<div class="radio">
																<input id="radio-z2-8" name="radio" type="checkbox" class="ocho">
																<label  for="radio-z2-8" class="radio-label">8</label>
															</div>
															<div class="radio">
																<input id="radio-z2-9" name="radio" type="checkbox" class="nueve">
																<label for="radio-z2-9" class="radio-label">9</label>
															</div>
															<div class="radio">
																<input id="radio-z2-10" name="radio" type="checkbox" class="diez">
																<label  for="radio-z2-10" class="radio-label">10</label>
															</div>
															<div class="radio">
																<input id="radio-z2-11" name="radio" type="checkbox" class="once">
																<label for="radio-z2-11" class="radio-label">11</label>
															</div>
															<div class="radio">
																<input id="radio-z2-12" name="radio" type="checkbox" class="doce">
																<label  for="radio-z2-12" class="radio-label">12</label>
															</div>
															<div class="radio">
																<input id="radio-z2-13" name="radio" type="checkbox" class="trece">
																<label for="radio-z2-13" class="radio-label">13</label>
															</div>
															<div class="radio">
																<input id="radio-z2-14" name="radio" type="checkbox" class="catorce">
																<label  for="radio-z2-14" class="radio-label">14</label>
															</div>
															<div class="radio">
																<input id="radio-z2-15" name="radio" type="checkbox" class="quince">
																<label for="radio-z2-15" class="radio-label">15</label>
															</div>
															<div class="radio">
																<input id="radio-z2-16" name="radio" type="checkbox" class="dieciseis">
																<label  for="radio-z2-16" class="radio-label">16</label>
															</div>
														</div>
													</div>
												</div>
												<div class="zone">
													<div class="row align-items-center">
														<div class="col-12 col-md-2">
															<p class="zone-title">Zona 3</p>
														</div>
														<div class="col-12 col-md-10">
															<div class="radio">
																<input id="radio-z3-1" name="radio" type="checkbox" class="uno">
																<label for="radio-z3-1" class="radio-label">1</label>
															</div>
															<div class="radio">
																<input id="radio-z3-2" name="radio" type="checkbox" class="dos">
																<label  for="radio-z3-2" class="radio-label">2</label>
															</div>
															<div class="radio">
																<input id="radio-z3-3" name="radio" type="checkbox"class="tres">
																<label for="radio-z3-3" class="radio-label">3</label>
															</div>
															<div class="radio">
																<input id="radio-z3-4" name="radio" type="checkbox"class="cuatro">
																<label  for="radio-z3-4" class="radio-label">4</label>
															</div>
															<div class="radio">
																<input id="radio-z3-5" name="radio" type="checkbox" class="cinco">
																<label for="radio-z3-5" class="radio-label">5</label>
															</div>
															<div class="radio">
																<input id="radio-z3-6" name="radio" type="checkbox"class="seis">
																<label  for="radio-z3-6" class="radio-label">6</label>
															</div>
															<div class="radio">
																<input id="radio-z3-7" name="radio" type="checkbox"class="siete">
																<label for="radio-z3-7" class="radio-label">7</label>
															</div>
															<div class="radio">
																<input id="radio-z3-8" name="radio" type="checkbox"class="ocho">
																<label  for="radio-z3-8" class="radio-label">8</label>
															</div>
															<div class="radio">
																<input id="radio-z3-9" name="radio" type="checkbox"class="nueve">
																<label for="radio-z3-9" class="radio-label">9</label>
															</div>
															<div class="radio">
																<input id="radio-z3-10" name="radio" type="checkbox" class="diez">
																<label  for="radio-z3-10" class="radio-label">10</label>
															</div>
															<div class="radio">
																<input id="radio-z3-11" name="radio" type="checkbox"class="once">
																<label for="radio-z3-11" class="radio-label">11</label>
															</div>
															<div class="radio">
																<input id="radio-z3-12" name="radio" type="checkbox"class="doce">
																<label  for="radio-z3-12" class="radio-label">12</label>
															</div>
															<div class="radio">
																<input id="radio-z3-13" name="radio" type="checkbox"class="trece">
																<label for="radio-z3-13" class="radio-label">13</label>
															</div>
															<div class="radio">
																<input id="radio-z3-14" name="radio" type="checkbox"class="catorce">
																<label  for="radio-z3-14" class="radio-label">14</label>
															</div>
															<div class="radio">
																<input id="radio-z3-15" name="radio" type="checkbox"class="quince">
																<label for="radio-z3-15" class="radio-label">15</label>
															</div>
															<div class="radio">
																<input id="radio-z3-16" name="radio" type="checkbox"class="dieciseis">
																<label  for="radio-z3-16" class="radio-label">16</label>
															</div>
														</div>
													</div>
												</div>
												<div class="zone">
													<div class="row align-items-center">
														<div class="col-12 col-md-2">
															<p class="zone-title">Zona 4</p>
														</div>
														<div class="col-12 col-md-10">
															<div class="radio">
																<input id="radio-z4-1" name="radio" type="checkbox"class="uno">
																<label for="radio-z4-1" class="radio-label">1</label>
															</div>
															<div class="radio">
																<input id="radio-z4-2" name="radio" type="checkbox"class="dos">
																<label  for="radio-z4-2" class="radio-label">2</label>
															</div>
															<div class="radio">
																<input id="radio-z4-3" name="radio" type="checkbox"class="tres">
																<label for="radio-z4-3" class="radio-label">3</label>
															</div>
															<div class="radio">
																<input id="radio-z4-4" name="radio" type="checkbox"class="cuatro">
																<label  for="radio-z4-4" class="radio-label">4</label>
															</div>
															<div class="radio">
																<input id="radio-z4-5" name="radio" type="checkbox"class="cinco">
																<label for="radio-z4-5" class="radio-label">5</label>
															</div>
															<div class="radio">
																<input id="radio-z4-6" name="radio" type="checkbox" class="seis">
																<label  for="radio-z4-6" class="radio-label">6</label>
															</div>
															<div class="radio">
																<input id="radio-z4-7" name="radio" type="checkbox"class="siete">
																<label for="radio-z4-7" class="radio-label">7</label>
															</div>
															<div class="radio">
																<input id="radio-z4-8" name="radio" type="checkbox"class="ocho">
																<label  for="radio-z4-8" class="radio-label">8</label>
															</div>
															<div class="radio">
																<input id="radio-z4-9" name="radio" type="checkbox"class="nueve">
																<label for="radio-z4-9" class="radio-label">9</label>
															</div>
															<div class="radio">
																<input id="radio-z4-10" name="radio" type="checkbox"class="diez">
																<label  for="radio-z4-10" class="radio-label">10</label>
															</div>
															<div class="radio">
																<input id="radio-z4-11" name="radio" type="checkbox"class="once">
																<label for="radio-z4-11" class="radio-label">11</label>
															</div>
															<div class="radio">
																<input id="radio-z4-12" name="radio" type="checkbox"class="doce">
																<label  for="radio-z4-12" class="radio-label">12</label>
															</div>
															<div class="radio">
																<input id="radio-z4-13" name="radio" type="checkbox"class="trece">
																<label for="radio-z4-13" class="radio-label">13</label>
															</div>
															<div class="radio">
																<input id="radio-z4-14" name="radio" type="checkbox"class="catorce">
																<label  for="radio-z4-14" class="radio-label">14</label>
															</div>
															<div class="radio">
																<input id="radio-z4-15" name="radio" type="checkbox"class="quince">
																<label for="radio-z4-15" class="radio-label">15</label>
															</div>
															<div class="radio">
																<input id="radio-z4-16" name="radio" type="checkbox"class="dieciseis" >
																<label  for="radio-z4-16" class="radio-label">16</label>
															</div>
														</div>
													</div>
												</div>
												<div class="zone">
													<div class="row align-items-center">
														<div class="col-12 col-md-2">
															<p class="zone-title">Zona 5</p>
														</div>
														<div class="col-12 col-md-10">
															<div class="radio">
																<input id="radio-z5-1" name="radio" type="checkbox"class="uno">
																<label for="radio-z5-1" class="radio-label">1</label>
															</div>
															<div class="radio">
																<input id="radio-z5-2" name="radio" type="checkbox"class="dos">
																<label  for="radio-z5-2" class="radio-label">2</label>
															</div>
															<div class="radio">
																<input id="radio-z5-3" name="radio" type="checkbox"class="tres">
																<label for="radio-z5-3" class="radio-label">3</label>
															</div>
															<div class="radio">
																<input id="radio-z5-4" name="radio" type="checkbox" class="cuatro">
																<label  for="radio-z5-4" class="radio-label">4</label>
															</div>
															<div class="radio">
																<input id="radio-z5-5" name="radio" type="checkbox"class="cinco">
																<label for="radio-z5-5" class="radio-label">5</label>
															</div>
															<div class="radio">
																<input id="radio-z5-6" name="radio" type="checkbox"class="seis">
																<label  for="radio-z5-6" class="radio-label">6</label>
															</div>
															<div class="radio">
																<input id="radio-z5-7" name="radio" type="checkbox"class="siete">
																<label for="radio-z5-7" class="radio-label">7</label>
															</div>
															<div class="radio">
																<input id="radio-z5-8" name="radio" type="checkbox"class="ocho">
																<label  for="radio-z5-8" class="radio-label">8</label>
															</div>
															<div class="radio">
																<input id="radio-z5-9" name="radio" type="checkbox"class="nueve">
																<label for="radio-z5-9" class="radio-label">9</label>
															</div>
															<div class="radio">
																<input id="radio-z5-10" name="radio" type="checkbox"class="diez">
																<label  for="radio-z5-10" class="radio-label">10</label>
															</div>
															<div class="radio">
																<input id="radio-z5-11" name="radio" type="checkbox"class="once">
																<label for="radio-z5-11" class="radio-label">11</label>
															</div>
															<div class="radio">
																<input id="radio-z5-12" name="radio" type="checkbox"class="doce">
																<label  for="radio-z5-12" class="radio-label">12</label>
															</div>
															<div class="radio">
																<input id="radio-z5-13" name="radio" type="checkbox"class="trece">
																<label for="radio-z5-13" class="radio-label">13</label>
															</div>
															<div class="radio">
																<input id="radio-z5-14" name="radio" type="checkbox" class="catorce">
																<label  for="radio-z5-14" class="radio-label">14</label>
															</div>
															<div class="radio">
																<input id="radio-z5-15" name="radio" type="checkbox" class="quince">
																<label for="radio-z5-15" class="radio-label">15</label>
															</div>
															<div class="radio">
																<input id="radio-z5-16" name="radio" type="checkbox"class="dieciseis">
																<label  for="radio-z5-16" class="radio-label">16</label>
															</div>
														</div>
													</div>
												</div>
												<div class="zone">
													<div class="row align-items-center">
														<div class="col-12 col-md-2">
															<p class="zone-title">Zona 6</p>
														</div>
														<div class="col-12 col-md-10">
															<div class="radio">
																<input id="radio-z6-1" name="radio" type="checkbox"class="uno">
																<label for="radio-z6-1" class="radio-label">1</label>
															</div>
															<div class="radio">
																<input id="radio-z6-2" name="radio" type="checkbox"class="dos">
																<label  for="radio-z6-2" class="radio-label">2</label>
															</div>
															<div class="radio">
																<input id="radio-z6-3" name="radio" type="checkbox"class="tres">
																<label for="radio-z6-3" class="radio-label">3</label>
															</div>
															<div class="radio">
																<input id="radio-z6-4" name="radio" type="checkbox"class="cuatro">
																<label  for="radio-z6-4" class="radio-label">4</label>
															</div>
															<div class="radio">
																<input id="radio-z6-5" name="radio" type="checkbox"class="cinco">
																<label for="radio-z6-5" class="radio-label">5</label>
															</div>
															<div class="radio">
																<input id="radio-z6-6" name="radio" type="checkbox"class="seis">
																<label  for="radio-z6-6" class="radio-label">6</label>
															</div>
															<div class="radio">
																<input id="radio-z6-7" name="radio" type="checkbox"class="siete">
																<label for="radio-z6-7" class="radio-label">7</label>
															</div>
															<div class="radio">
																<input id="radio-z6-8" name="radio" type="checkbox"class="ocho">
																<label  for="radio-z6-8" class="radio-label">8</label>
															</div>
															<div class="radio">
																<input id="radio-z6-9" name="radio" type="checkbox"class="nueve">
																<label for="radio-z6-9" class="radio-label">9</label>
															</div>
															<div class="radio">
																<input id="radio-z6-10" name="radio" type="checkbox"class="diez">
																<label  for="radio-z6-10" class="radio-label">10</label>
															</div>
															<div class="radio">
																<input id="radio-z6-11" name="radio" type="checkbox" class="once">
																<label for="radio-z6-11" class="radio-label">11</label>
															</div>
															<div class="radio">
																<input id="radio-z6-12" name="radio" type="checkbox" class="doce">
																<label  for="radio-z6-12" class="radio-label">12</label>
															</div>
															<div class="radio">
																<input id="radio-z6-13" name="radio" type="checkbox"class="trece">
																<label for="radio-z6-13" class="radio-label">13</label>
															</div>
															<div class="radio">
																<input id="radio-z6-14" name="radio" type="checkbox"class="catorce">
																<label  for="radio-z6-14" class="radio-label">14</label>
															</div>
															<div class="radio">
																<input id="radio-z6-15" name="radio" type="checkbox"class="quince">
																<label for="radio-z6-15" class="radio-label">15</label>
															</div>
															<div class="radio">
																<input id="radio-z6-16" name="radio" type="checkbox"class="dieciseis">
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
														<div class="col-6 col-sm-4 col-lg-2">
															<div class="form-group">
																<label class="zone-title">Zona 1</label>
																<input type="number" class="form-control" min="1" max="24">
															</div>
														</div>
														<div class="col-6 col-sm-4 col-lg-2">
															<div class="form-group">
																<label class="zone-title">Zona 2</label>
																<input type="number" class="form-control" min="1" max="24">
															</div>
														</div>
														<div class="col-6 col-sm-4 col-lg-2">
															<div class="form-group">
																<label class="zone-title">Zona 3</label>
																<input type="number" class="form-control" min="1" max="24">
															</div>
														</div>
														<div class="col-6 col-sm-4 col-lg-2">
															<div class="form-group">
																<label class="zone-title">Zona 4</label>
																<input type="number" class="form-control" min="1" max="24">
															</div>
														</div>
														<div class="col-6 col-sm-4 col-lg-2">
															<div class="form-group">
																<label class="zone-title">Zona 5</label>
																<input type="number" class="form-control" min="1" max="24">
															</div>
														</div>
														<div class="col-6 col-sm-4 col-lg-2">
															<div class="form-group">
																<label class="zone-title">Zona 6</label>
																<input type="number" class="form-control" min="1" max="24">
																
															</div>
														</div>
														<div class="col-12">
														<button class="btn btn-primary mx-auto d-block" id="autom">Activar</button>
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
										<div class="row justify-content-between align-items-center">
											<div class="col-12 col-sm-6">
												<h2 class="Section-title">Estado de los Sensores</h2>
											</div>
											<div class="col-12 col-sm-6">
												<div class="Section-extra">
													<p class="Section-descripcion">Clic en el sensor para ver su histórico diario</p>
												</div>
											</div>
										</div>
									</div>
									<div class="Section-content">
										<div class="row">
											<?php include('inc/valvulas.php'); ?>
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
					<button type="button" class="btn btn-primary reload"  id="">Recargar</button>
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
					<p>¿Está seguro qué desea apagar todas las válvulas activas y no apagar una en particular?</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-success px-3" id="si">Si</button> <button class="btn btn-danger px-3" data-dismiss="modal">No</button>
				</div>
			</div>
		</div>
	</div> 
	<div class="modal fade" id="automatico-single" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Configuración</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<p class=""><small>Si va a activar varios modulos configure los tiempos y use el boton de activar segun el modulo final</small></p>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" data-toggle="tab" href="#modulo-1" role="tab" aria-selected="true">Módulo 1</a>
						<a class="nav-item nav-link" data-toggle="tab" href="#modulo-2" role="tab" aria-selected="false">Módulo 2</a>
						<a class="nav-item nav-link" data-toggle="tab" href="#modulo-3" role="tab" aria-selected="false">Módulo 3</a>
					</div>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="modulo-1" role="tabpanel">
							<form class="form-row">
								<div class="form-group col-md-12">
									<h4>Primer Ciclo</h4>
								</div>
								<!-- <div class="form-group col-md-6">
									<label for="horarios">Número de horarios</label>
									<select class="form-control" id="horarios">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</div> -->
								<div class="form-group col-md-3">
									<label for="hora1">Hora</label>
									<select class="form-control" id="hora1">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="min1">Minutos</label>
									<select class="form-control" id="min1">
										<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="seg1">Segundos</label>
									<select class="form-control" id="seg1">
										<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="hor1">AM / PM</label>
									<select class="form-control" id="hor1">
										<option value="am">AM</option>
										<option value="pm">PM</option>
									</select>
								</div>
								<div class="form-group col-md-12">
									<label for="tim1">Tiempo del ciclo (minutos)</label>
									<select class="form-control" id="ciclo1">
										<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option>
									</select>
								</div>
								<button type="submit" class="btn btn-primary mx-auto d-block" data-dismiss="modal" id="activar1">Activar Módulo</button>
							</form>
						</div>
						<div class="tab-pane fade" id="modulo-2" role="tabpanel">
							<form class="form-row">
								<div class="form-row" id="horario2">
									<div class="form-group col-md-12">
										<h4>Segundo Ciclo</h4>
									</div>
									<div class="form-group col-md-3">
										<label for="hora2">Hora</label>
										<select class="form-control" id="hora2">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="min2">Minutos</label>
										<select class="form-control" id="min2">
											<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="seg2">Segundos</label>
										<select class="form-control" id="seg2">
											<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="hor2">AM / PM</label>
										<select class="form-control" id="hor2">
											<option value="am">AM</option>
											<option value="pm">PM</option>
										</select>
									</div>
									<div class="form-group col-md-12">
										<label for="tim2">Tiempo del ciclo (minutos)</label>
										<select class="form-control" id="ciclo2">
											<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option>
										</select>
									</div>
								</div>
								<button type="submit" class="btn btn-primary mx-auto d-block" data-dismiss="modal" id="activar2">Activar Módulo</button>
							</form>
						</div>
						<div class="tab-pane fade" id="modulo-3" role="tabpanel">
							<form class="form-row">
								<div class="form-row" id="horario3">
									<div class="form-group col-md-12">
										<h4>Tercer Ciclo</h4>
									</div>
									<div class="form-group col-md-3">
										<label for="hora3">Hora</label>
										<select class="form-control" id="hora3">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="min3">Minutos</label>
										<select class="form-control" id="min3">
											<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="seg3">Segundos</label>
										<select class="form-control" id="seg3">
											<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="hor3">AM / PM</label>
										<select class="form-control" id="hor3">
											<option value="am">AM</option>
											<option value="pm">PM</option>
										</select>
									</div>        
									<div class="form-group col-md-12">
										<label for="ciclo3">Tiempo del ciclo (minutos)</label>
										<select class="form-control" id="ciclo3">
											<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option>
										</select>
									</div>
								</div>
								<button type="submit" class="btn btn-primary mx-auto d-block" data-dismiss="modal" id="activar3">Activar Módulo</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.2.2.4.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="js/llamada.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scroll.js"></script>
	<script src="js/main.rds.js"></script>
</body>
</html>