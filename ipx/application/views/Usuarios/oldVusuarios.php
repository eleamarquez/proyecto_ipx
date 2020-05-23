<!DOCTYPE HTML>
<html>
<head>
	<title>:::AUTORIZACIÓN PARA EL TRATAMIENTO DE DATOS PERSONALES:::</title>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>
<!---webfonts--->
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!---pop-up-box---->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="form/css/util.css">
<link rel="stylesheet" type="text/css" href="form/css/main.css">
<link rel="stylesheet" type="text/css" href="css_form/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css_form/smart-forms.css">

<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>


<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
<!---//pop-up-box---->
<!---color-style-switcher---->
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


<script >

	function habilita2(obj){ 

		var valorSeleccionado = obj.options[obj.selectedIndex].value; 
		var nit3 = document.getElementById("nit").value;
		var dv3 = document.getElementById("dv").value;


		window.location.href = window.location.href + "?w1=" + nit3 + "&w2=" + dv3;

		window.location.href = window.location.href + "?w1=" + jsVar1 + "&w2=" + jsVar2;


			//document.cookie ='variable='+nit3+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';
			

		alert(nit3);

//history.back();

//	document.getElementById("ejemplo").innerHTML = mensaje;



}

</script>




<!---//color-style-switcher---->
</head>
<body onload="mostrarSaludo()">
	<!----wrap---->

</div>


<?php $dateTime = new DateTime('now', new DateTimeZone('America/Bogota'));

$fecha = $dateTime->format("Y-m-d  H:i:s "); ?>




<!---start-getintouch---->
<div class="get-intouch" id="contact">


	<div class="wrap">

		<div class="get-intouch-grids">

			<div >
				<div class="smart-wrap">
					<div class="smart-forms smart-container wrap-2">



						<form method="post" action="registrar.php" id="form1" >

							<div class="form-body">

								<div id="saludo" class="mb-5 mt-5">

									<h3><div id="txtsaludo"> </div></h3>

								</div>

								<input type="hidden" name="consecutivo" value="" />


								<div align="center"><img src="images/header-form.jpg" ></div>

								<div class="spacer-t20 spacer-b30">
									<div class="tagline"><span> Autorización para el tratamiento de Datos Personales acorde a la ley estatutaria 1581 de 2012</span></div><!-- .tagline -->
								</div><!-- end section -->


								<br><br>

								<div class="spacer-t20 spacer-b30">
									<div class="tagline"><span> INFORMACIÓN GENERAL </span></div><!-- .tagline -->
								</div><!-- end section -->

							


								<!-- end section -->

								<!-- INICIA INFORMACION CLIENTE -->
								<br>

								<div id="contenido">

									<div class="frm-row">

										<div class="section colm colm6">
											<label >
												<label class="control-label">Nit / Cedula:</label>
												<input type="number" name="nit" id="nit" class="gui-input" placeholder="Ingrese su Nit o Cedula" value="">

											</label>
										</div><!-- end section --> 


										<div class="section colm colm6" >
											<label >
												<label class="control-label">Digito de Verificación:</label>
												<input type="number" name="dv1" id="nit" class="gui-input" placeholder="Ingrese su digito de verificacion" value="">

											</label>
										</div><!-- end section -->               

						
									</div><!-- end section --> 


								



								<div class="frm-row">

									<div class="colm colm6">

										<div class="section">
											<label class="field">
												<label class="control-label">Razón Social / Cliente:</label>
												<input type="text" name="razon" id="razon" class="gui-input" value="" required>

											</label>
										</div><!-- end section -->                       



										<div class="section">
											<label class="field ">
												<label class="control-label">Correo eléctronico:</label>
												<input type="email" name="correo" id="s" class="gui-input" required>

											</label>
										</div><!-- end section -->                            

									</div><!-- end .colm6 section -->

									<div class="colm colm6">

										<div class="section">
											<label class="field ">
												<label class="control-label">Nombre de quien Autoriza :</label>
												<input type="text" name="nombre" id="nombre" class="gui-input" required >

											</label>
										</div><!-- end section -->                        

										<div class="section">
											<label class="field ">
												<label class="control-label">Fecha:</label>
												<input type="text" name="fecha" id="fecha" class="gui-input" value="" readonly required>

											</label>
										</div><!-- end section -->




									</div><!-- end section -->                           

								</div><!-- end .colm6 section -->  

							</div> <!-- end .frm-row section -->


							<!-- FINALIZA INFO CLIENTE -->
	<!-- boton apagado -->
								<div class="section">
									<p class="small-text fine-grey">Tipo de usuario</p>
								</div><!-- end section -->

								<div class="section">

									<div class="option-group field">

										<label class="option">
											<input type="radio" name="USER" checked value="CLIENTE" >
											<span class="radio" checked></span>CLIENTE&nbsp;&nbsp;&nbsp;                
										</label>

										<label class="option">
											<input type="radio" name="USER" value="PROVEEDOR" >
											<span class="radio"></span> PROVEEDOR&nbsp;&nbsp;&nbsp;                  
										</label>

										<label class="option">
											<input type="radio" name="USER" value="CONTRATISTA" >
											<span class="radio"></span> CONTRATISTA&nbsp;&nbsp;&nbsp;                  
										</label>

										<label class="option">
											<input type="radio" name="USER" value="SUBCONTRATISTA" >
											<span class="radio"></span> SUBCONTRATISTA&nbsp;&nbsp;&nbsp;                  
										</label>

										<label class="option">
											<input type="radio" name="USER" value="TRABAJADOR" >
											<span class="radio"></span> TRABAJADOR&nbsp;&nbsp;&nbsp;                  
										</label>


									</div><!-- end .option-group section -->


								</div> <!-- end .frm-row section -->



							<div class="section">
								<p class="small-text fine-grey">Autorizo el tratamiento de Datos Personales </p>
							</div><!-- end section -->

							<div class="section">

								<div class="option-group field">

									<label class="option">
										<input type="radio" name="Autorizo" checked value="SI" >
										<span class="radio" checked></span> SI&nbsp;&nbsp;&nbsp;                
									</label>

									<label class="option">
										<input type="radio" name="Autorizo" value="NO" >
										<span class="radio"></span> NO&nbsp;&nbsp;&nbsp;                  
									</label>



								</div><!-- end .option-group section -->


							</div> <!-- end .frm-row section -->

						</div><!-- end .frm-row section informacion cliente -->

						<!-- end .frm-row section comienza informacion producto -->

						<div class="form-footer">
							<input type="submit" name="submitForm" id="submitForm" class="button btn-primary" />
						</div><!-- end .form-footer section -->

					</form>


				</div></div>



				<br><br>
			</div>



			<div >

				<p>Respetado Cliente, proveedor, contratista, subcontratista o trabajador<span></span></p>

				<br>
				<p>En cumplimiento a lo establecido en el artículo 10 del decreto 1377 de 2013, reglamento de la ley estatutaria 1581 de 2012, por medio de la cual se dictaron las disposiciones generales para la protección de datos personales y cuyo objeto es “desarrollar el derecho constitucional que tiene todas las personas a conocer, actualizar y rectificar las informaciones que se hayan recogido sobre ellas en la base de datos o archivos, y los demás derechos, libertades y garantías constitucionales al que se refiere el artículo 15 de la constitución política; así como el derecho a la información consagrado en el artículo 20 de la misma”.
					Nos permitimos informarle que con anterioridad a la publicación del citado decreto, la empresa MU MECÁNICOS UNIDOS S.A.S a través de entrevistas telefónicas o personales, transacciones económicas de venta o compra, hemos recolectado y procesado datos personales de los visitantes, clientes, proveedores o trabajadores los cuales se encuentran en nuestras bases de datos.
					Teniendo en cuenta la citada normatividad, nos permitimos solicitarle autorización para continuar con el almacenamiento, uso, transferencia, transmisión, actualización, procesamiento, disposición, recolección, exclusión–TRATAMIENTO- de la información o datos personales de manera leal, lícita, segura y confiable, con el fin de desarrollar nuestro objeto social.
					La información suministrada por usted, se utilizará para los siguientes fines:<br><br>
					<li> Cumplir con las obligaciones legales y contractuales, con trabajadores y familiares de estos, accionistas, consumidores, clientes, distribuidores, proveedores, acreedores y deudores, sin que la enumeración signifique limitación.</li>
					<li>Para la atención de consultas, peticiones, quejas y reclamos.</li>
					<li>Para la evaluación de la calidad de su servicio al cliente.</li>
					<li>Para la invitación a eventos organizados o patrocinados por MU MECÁNICOS UNIDOS SAS</li>
					<li>Para la interacción de sus obligaciones legales con sus trabajadores, entre otros</li>
					<li>Para consolidar un suministro oportuno y de calidad con sus proveedores, a través de la invitación a participar en procesos de selección y la evaluación del cumplimiento de sus obligaciones</li>
					<li>Para la determinación de obligaciones pendientes, la consulta de información financiera e historia crediticia y el  reporte a centrales de información.</li>
					<li>Para actividades de mercadeo, estadísticas, de investigación y demás propósitos comerciales que no contravengan la legislación vigente en Colombia.</li>
					<li>Para la intención de requerimientos judiciales o administrativos y el cumplimiento de mandatos judiciales o legales.</li>
					<li>Para contactarse, vía correo electrónico, o por cualquier otro medio, para las finalidades antes mencionadas.</li>
					<li>Le comunicamos que usted, en calidad de titular de los Datos Personales suministrados, tiene los siguientes derechos, los cuales puede ejercer en cualquier momento:</li>
					<li>Conocer los Datos Personales sobre los cuales MU MECÁNICOS UNIDOS SAS está realizando el tratamiento. De igual manera, el titular puede solicitar en cualquier momento, que sus datos sean actualizados o rectificados, por ejemplo, si encuentra que sus datos son parciales, inexactos, incompletos, fraccionados, induzcan a error, o aquellos cuyo tratamiento este expresamente prohibido o no haya sido autorizado.</li>
					<li>Solicitar pruebas de la autorización otorgada a MU MECÁNICOS UNIDOS SAS para el tratamiento de sus datos personales.</li>
					<li>Ser informado por MU MECÁNICOS UNIDOS SAS previa solicitud, respecto del uso que ésta le ha dado sus Datos Personales.</li>
					<li>Presentar ante la Superintendencia de industria y comercio quejas por infracciones a lo dispuesto en la ley de protección de datos personales.</li>
					<li>Solicitar a MU MECÁNICOS UNIDOS SAS la supresión de sus datos personales y/o revocar la autorización otorgada para el tratamiento de los mismos, mediante la presentación de un reclamo, de acuerdo con los procedimientos establecidos por MU MECÁNICOS UNIDOS SAS. No obstante, la solicitud de la información y la revocatoria de la autorización no procederán cuando el titular de la información tenga un deber legal o contractual de permanecer en la base de datos y/o archivo, ni mientras se encuentre vigente la relación entre el titular y MU MECÁNICOS UNIDOS SAS en virtud de la cual fueron recolectados sus datos.</li>

					<li>Acceder de forma gratuita a sus datos personales objeto de tratamiento.</li><br>

					En caso de preguntas, consultas, quejas, solicitudes, actualizaciones, y/o reclamos en relación con sus datos personales, puede dirigirse a través de nuestro correo electrónico, servicioalcliente@victoria.com.co; mecanicos.unidos@victoria.com.co o mediante comunicación escrita dirigida a esta dirección Carrera 42 # 33-173 Itagüí, Antioquia.
					Si desea que sus datos personales sean suprimidos de nuestra base de datos, lo deberá solicitar por cualquiera de los medios anteriormente mencionados dentro de los treinta(30) días hábiles siguientes al recibo de la presente comunicación; de lo contrario MU MECÁNICOS UNIDOS SAS, continuará realizando el TRATAMIENTO de dichos datos, de acuerdo a lo establecido en el artículo 10 del Decreto 1377 de2013.
					Las políticas del TRATAMIENTO de los datos personales podrán ser consultadas en la siguiente página web del encargado del tratamiento: http://www.victoria.com.co/politica-de-privacidad/


				</p>
				<br><br>
			</div>





			<DIV>

			</DIV>




			<!-- aToolTip js -->
			<script type="text/javascript" src="js/jquery.atooltip.js"></script>
			<script type="text/javascript">
				$(function(){ 
					$('a.normalTip').aToolTip();
				}); 
			</script>
			<div class="clear"> </div>
		</div>
	</div>




</div>
<!---//End-getintouch---->
<!----start-copy-right--->
<div class="copy-right">
	<div class="wrap">
		<div class="copy-right-left">
			<p>&#169; 2019 <span>www.victoria.com.co</span> All Rights Reserved.</p>
		</div>

	</div>
	<!----//End-copy-right--->

	<!---//End-content--->
	<!----//wrap---->
</body>
</html>

