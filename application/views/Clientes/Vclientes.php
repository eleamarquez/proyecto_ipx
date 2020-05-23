
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
									<div class="tagline"><span> REGISTRO DE CLIENTES</span></div><!-- .tagline -->
								</div><!-- end section -->




								<!-- end section -->

								<!-- INICIA INFORMACION CLIENTE -->
								<br>

								<div id="contenido">

									
									<div class="frm-row">

										<div class="colm colm6">


											<div class="section">
												<label class="field">
													<label class="control-label">NIT O CC:</label>
													<input type="text" name="id_nrodoc" id="id_nrodoc"class="gui-input" value="" required>

												</label>
											</div><!-- end section -->  




											<div class="section">
												<label class="field ">
													<label class="control-label">Segundo Nombre:</label>
													<input type="text" name="snombre" id="snombre" class="gui-input" value=" "required>

												</label>
											</div><!-- end section -->                    


										</div><!-- end .colm6 section -->



										<div class="colm colm6">

											<div class="section">
												<label class="field ">
													<label class="control-label">Primer Nombre:</label>
													<input type="text" name="pnombre" id="pnombre"  class="gui-input" value="" required>

												</label>
											</div><!-- end section -->                        

											<div class="section">
												<label class="field ">
													<label class="control-label">Primer Apellido:</label>
													<input type="text" name="papellido" id="papellido"  class="gui-input" value="" required>

												</label>
											</div><!-- end section -->




										</div><!-- end section -->                           

									</div><!-- end .colm6 section -->  

								</div> <!-- end .frm-row section -->

                                <div class="frm-row">

										<div class="colm colm6">


											<div class="section">
												<label class="field">
													<label class="control-label">Segundo Apellido:</label>
													<input type="text" name="sapellido" id="sapellido"class="gui-input" value="" required>

												</label>
											</div><!-- end section -->  




											<div class="section">
												<label class="field ">
													<label class="control-label">Dirección:</label>
													<input type="text" name="direccion" id="direccion" class="gui-input" value=" "required>

												</label>
											</div><!-- end section -->                    


										</div><!-- end .colm6 section -->

                                        <div class="colm colm6">

											<div class="section">
												<label class="field ">
													<label class="control-label">Ciudad:</label>
													<input type="text" name="ciudad" id="ciudad"  class="gui-input" value="" required>

												</label>
											</div><!-- end section -->                        

											<div class="section">
												<label class="field ">
													<label class="control-label">Telefono:</label>
													<input type="text" name="telefono" id="telefono"  class="gui-input" value="" required>

												</label>
											</div><!-- end section -->
           

									</div><!-- end .colm6 section -->  

								</div> <!-- end .frm-row section -->

                                <div id="contenido">

									
									<div class="frm-row">

										<div class="colm colm6">


											<div class="section">
												<label class="field">
													<label class="control-label">Nombre Contacto:</label>
													<input type="text" name="id_nrodoc" id="id_nrodoc"class="gui-input" value="" required>

												</label>
											</div><!-- end section -->  




											<div class="section">
												<label class="field ">
													<label class="control-label">Correo Contacto:</label>
													<input type="text" name="snombre" id="snombre" class="gui-input" value=" "required>

												</label>
											</div><!-- end section -->                    


										</div><!-- end .colm6 section -->

                                        <div class="colm colm6">

											<div class="section">
												<label class="field ">
													<label class="control-label">Apellido Contacto:</label>
													<input type="text" name="pnombre" id="pnombre"  class="gui-input" value="" required>

												</label>
											</div><!-- end section -->                        

											<div class="section">
												<label class="field ">
													<label class="control-label">Nombre Facturación:</label>
													<input type="text" name="papellido" id="papellido"  class="gui-input" value="" required>

												</label>
											</div><!-- end section -->

                                            </div><!-- end section -->

                                             <div id="contenido">

									
									<div class="frm-row">

										<div class="colm colm6">


											<div class="section">
												<label class="field">
													<label class="control-label">Apellido Facturación:</label>
													<input type="text" name="id_nrodoc" id="id_nrodoc"class="gui-input" value="" required>

												</label>
											</div><!-- end section -->  




											<div class="section">
												<label class="field ">
													<label class="control-label">Id Nro Cotización:</label>
													<input type="text" name="snombre" id="snombre" class="gui-input" value=" "required>

												</label>
											</div><!-- end section -->                    


										</div><!-- end .colm6 section -->

                                        <div class="colm colm6">

											<div class="section">
												<label class="field ">
													<label class="control-label">Correo Facturación:</label>
													<input type="text" name="pnombre" id="pnombre"  class="gui-input" value="" required>

												</label>
											</div><!-- end section -->                        

											<div class="section">
												<label class="field ">
													<label class="control-label">Usuario:</label>
													<input type="text" name="papellido" id="papellido"  class="gui-input" value="" required>

												</label>
											</div><!-- end section -->

                                            </div><!-- end section -->
           

                                            </div><!-- end .colm6 section -->  

                                        </div> <!-- end .frm-row section -->

                                        </div><!-- end .colm6 section -->  

                                        </div> <!-- end .frm-row section -->

								<br><br>


								<div class="frm-row">



								</div>






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