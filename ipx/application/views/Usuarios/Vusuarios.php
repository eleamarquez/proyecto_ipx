
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\css\bootstrap.css">

<!---pop-up-box---->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files/form/form/css/util.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files/form/form/css/main.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files/form/css_form/smart-forms.css">


	<title></title>




	<script type="text/javascript">
		function mostrarSaludo(){

			fecha = new Date(); 
			hora = fecha.getHours();

			if(hora >= 0 && hora < 12){
				texto = "Buenos Días";

			}

			if(hora >= 12 && hora < 18){
				texto = "Buenas Tardes";

			}

			if(hora >= 18 && hora < 24){
				texto = "Buenas Noches";

			}



			document.getElementById('txtsaludo').innerHTML = texto;

		}
	</script>


</head>
<body onload="mostrarSaludo()">
	<!--inner block start here-->

	<div id="saludo" class="mb-5 mt-5">

		
		

	</div>
	<br><br><br><br>


	
		<div class="blank">



<!---start-getintouch---->
<div class="get-intouch" id="contact">


	<div class="wrap">

		<div class="get-intouch-grids">

			<div >
				<div class="smart-wrap">
					<div class="smart-forms smart-container wrap-2">



						<form method="post"  id="form"  >

							<div class="form-body">

								
								<br><br>

								<div class="spacer-t20 spacer-b30">
									<div class="tagline"><span> FORMULARIO PARA LA CREACIÓN DE USUARIOS</span></div><!-- .tagline -->
								</div><!-- end section -->




								<!-- end section -->

								<!-- INICIA INFORMACION CLIENTE -->
								<br>

								<div id="contenido">

									
									<div class="frm-row">

										<div class="colm colm6">


											<div class="section">
												<label class="field">
													<label class="control-label">Número de Cedula:</label>
													<input type="text" name="cedula" id="cedula" readonly class="gui-input" value="" required>

												</label>
											</div><!-- end section -->  




											<div class="section">
												<label class="field ">
													<label class="control-label">Fecha:</label>
													<input type="text" name="fecha" id="fecha" class="gui-input" value=" " readonly required>

												</label>
											</div><!-- end section -->                    


										</div><!-- end .colm6 section -->



										<div class="colm colm6">

											<div class="section">
												<label class="field ">
													<label class="control-label">Razón Social / Cliente:</label>
													<input type="text" name="empleado" id="empleado" readonly class="gui-input" value="" required>

												</label>
											</div><!-- end section -->                        

											<div class="section">
												<label class="field ">
													<label class="control-label">Dirección:</label>
													<input type="number" step="0.01" id="temperatura" min="35" max="37.5" name='temperatura' class="gui-input" value=""  required>

												</label>
											</div><!-- end section -->




										</div><!-- end section -->                           

									</div><!-- end .colm6 section -->  

								</div> <!-- end .frm-row section -->



								<br><br>


								<div class="frm-row">



								</div>






								<!-- end section pregunta -->


								<div class="section">
									<p class="medium-text fine-grey">Autorizo el tratamiento de Datos Personales  </p>
								</div><!-- end section -->
								<div class="section">
									<div class="option-group field">
										<label class="option">
											<input type="radio" name="autorizo"  checked  value="SI" >
											<span class="radio" ></span> SI&nbsp;&nbsp;&nbsp;                
										</label>

										<label class="option">
											<input type="radio" name="autorizo" value="NO" >
											<span class="radio"></span> NO&nbsp;&nbsp;&nbsp;                  
										</label>
									</div><!-- end .option-group section -->
								</div> <br><br>
								<!-- end section pregunta -->





							</div> <br>


							<div class="form-footer">





								<input type="submit" formaction="<?php echo base_url(); ?>C_Encuesta/Registerdiario" name="submitForm" id="submitForm" class="button btn-primary" value="Guardar" />
							</div><!-- end .form-footer section -->
						

					</form>

					</div>


				</div></div>



				<br><br>
			</div>








			<!-- aToolTip js -->

		
	</div>














		</div></div>





	</body>
	</html>