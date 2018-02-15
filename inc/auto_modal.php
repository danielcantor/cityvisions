<?php 
    include('conexion.php');
     $con=mysqli_query($enlace,'SELECT * FROM nuevo_horario ORDER BY fecha DESC LIMIT 1 ');
     $row = mysqli_fetch_assoc($con);
?>
<div class="modal fade" id="automatico-single" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Configuración</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="auto_modo">
					<?php
     include('conexion.php');
     $con=mysqli_query($enlace,'SELECT * FROM nuevo_horario ORDER BY fecha DESC LIMIT 1 ');
     $row = mysqli_fetch_assoc($con);
?>
<div class="alert alert-warning"> 
					<p>Seleccione la cantidad de horarios a configurar y use el boton de activar al terminar de configurar el ultimo ciclo
					</p>
			
					</div>
					<div class="form-group col-md-6">
									<label for="horarios">Número de horarios</label>
									<select class="form-control" id="horarios">
										<option value="0">seleccione</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
					</div>					
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" data-toggle="tab" href="#modulo-1" role="tab" aria-selected="true" id="horar1">Horario 1</a>
						<a class="nav-item nav-link" data-toggle="tab" href="#modulo-2" role="tab" aria-selected="false" id="horar2">Horario 2</a>
						<a class="nav-item nav-link" data-toggle="tab" href="#modulo-3" role="tab" aria-selected="false" id="horar3">Horario 3</a>
					</div>
					<div id="contenido">
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="modulo-1" role="tabpanel">
						<?php if($row['hora_1'] != 0){?>
							<form class="form-row" id="blocked1">
						<?php }else{ ?>
							<form class="form-row">
						<?php } ?>
								<div class="form-group col-md-12">
                                    <h4>Primer Ciclo <?php 
                                    if($row['hora_1'] != 0){
                                        ?>
                                    <span class="badge badge-success">Activo</span></h4>
                                    <?php if($row['hora_1'] >12){
                                        $row['hora_1'] = $row['hora_1'] -12;
                                        $hor = "pm";
                                    }else{
                                        $hor = "am";
                                    }
                                    if($row['hora_1']==12){
                                        $hor = "pm";
									}
									if($row['min_1']<10){
										$row['min_1'] = "0".$row['min_1'];
									}
									?>
                                    <small><?php echo "Esta configurado para activarse a: ".$row['hora_1'].":".$row['min_1'].$hor;  ?></small>
                                    <?php }else{ ?>
                                    <span class="badge badge-danger">Inactivo</span></h4>
                                  <?php  } ?>
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
										<option value="0">0</option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="seg1">Segundos</label>
									<select class="form-control" id="seg1">
										<option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
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
								<?php if($row['hora_1'] != 0){?>
								<button class="btn btn-danger mx-auto d-block" id="editar1">Editar Ciclo</button>
						<?php }else{ ?>
							<form class="form-row">
						<?php } ?>
								<button type="submit" class="btn btn-primary mx-auto d-block" data-dismiss="modal" id="activar1">Activar Horario</button>
							</form>
						</div>
						<div class="tab-pane fade" id="modulo-2" role="tabpanel">
							<?php if($row['hora_2'] != 0){?>
							<form class="form-row" id="blocked2">
						<?php }else{ ?>
							<form class="form-row">
						<?php } ?>
								<div class="form-row" id="horario2">
									<div class="form-group col-md-12">
										<h4>Segundo Ciclo <?php 
                                    if($row['hora_2'] != 0){
                                        ?>
                                    <span class="badge badge-success">Activo</span></h4>
                                    <?php if($row['hora_2'] >12){
                                        $row['hora_2'] = $row['hora_2'] -12;
                                        $hor = "pm";
                                    }else{
                                        $hor = "am";
                                    }
                                    if($row['hora_2']==12){
                                        $hor = "pm";
									}
									if($row['min_2']<10){
										$row['min_2'] = "0".$row['min_2'];
									}
                                    ?>
                                    <small><?php echo "Esta configurado para activarse a: ".$row['hora_2'].":".$row['min_2'].$hor;  ?></small>
                                    <?php }else{ ?>
                                    <span class="badge badge-danger">Inactivo</span></h4>
                                  <?php  } ?>
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
											<option value="0">0</option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="seg2">Segundos</label>
										<select class="form-control" id="seg2">
											<option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
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
								<?php if($row['hora_2'] != 0){?>
								<button  class="btn btn-danger mx-auto d-block" id="editar2">Editar Ciclo</button>
						<?php }else{ ?>
							<form class="form-row">
						<?php } ?>
								<button type="submit" class="btn btn-primary mx-auto d-block" data-dismiss="modal" id="activar2">Activar Horario</button>
							</form>
						</div>
						<div class="tab-pane fade" id="modulo-3" role="tabpanel">
							<?php if($row['hora_3'] != 0){?>
							<form class="form-row" id="blocked3">
						<?php }else{ ?>
							<form class="form-row">
						<?php } ?>
								<div class="form-row" id="horario3">
									<div class="form-group col-md-12">
										<h4>Tercer Ciclo <?php 
                                    if($row['hora_3'] != 0){
                                        ?>
                                    <span class="badge badge-success">Activo</span></h4>
                                    <?php if($row['hora_3'] >12){
                                        $row['hora_3'] = $row['hora_3'] -12;
                                        $hor = "pm";
                                    }else{
                                        $hor = "am";
                                    }
                                    if($row['hora_3']==12){
                                        $hor = "pm";
									}
									if($row['min_3']<10){
										$row['min_3'] = "0".$row['min_3'];
									}
									?>
                                    <small><?php echo "Esta configurado para activarse a: ".$row['hora_3'].":".$row['min_3'].$hor;  ?></small>
                                    <?php }else{ ?>
                                    <span class="badge badge-danger">Inactivo</span></h4>
                                  <?php  } ?></h4>
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
											<option value="0">0</option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="seg3">Segundos</label>
										<select class="form-control" id="seg3">
											<option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
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
								<?php if($row['hora_3'] != 0){?>
								<button  class="btn btn-danger mx-auto d-block" id="editar3">Editar Ciclo</button>
						<?php }else{ ?>
							<form class="form-row">
						<?php } ?>
								<button type="submit" class="btn btn-primary mx-auto d-block" data-dismiss="modal" id="activar3">Activar Horario</button>
							</form>
</div>
					</div>
				</div>

					</div>
								</div>
		</div>
	</div>