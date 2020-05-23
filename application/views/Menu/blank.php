
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\css\bootstrap.css">



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


<div class="inner-block">
    <div class="blank">
	
	<!--market updates updates-->
	<div class="market-updates">
		<a alt="Pendiente"  data-toggle="modal" href="#diario">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3>Maestro</h3>
						<h4>Usuario</h4>
						<p>&nbsp</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div></a>

			<a href="">
				<div class="col-md-4 market-update-gd">
					<div class="market-update-block clr-block-2">
						<div class="col-md-8 market-update-left">
							<h3>Generador</h3>
							<h4>Cotizaciones</h4>
							<p>&nbsp</p>
						</div>
						<div class="col-md-4 market-update-right">
							<i class="fa fa-file-text-o"> </i>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div></a>




				<a target="_blank" href="<?php echo base_url(); ?>files/interpretar/INTERPRETAR.pdf">
					<div class="col-md-4 market-update-gd">
						<div class="market-update-block clr-block-3">
							<div class="col-md-8 market-update-left">
								<h3>Modulo</h3>
								<h4>Informes</h4>
								<p>&nbsp</p>
							</div>
							<div class="col-md-4 market-update-right">
								<i class="fa fa-envelope-o"> </i>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div></a>
					<div class="clearfix"> </div><br>


					
					<br><br><br><br><br>
							<div class="clearfix"> </div><br>


						</div>
						<!--market updates end here-->




</div></div>





					</body>
					</html>