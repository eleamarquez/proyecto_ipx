<!DOCTYPE html>

<html lang="en">

<head>

	<title>:::IPX Soluciones Tecnologicas:::</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	

	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>Login/images/icons/favicon.ico"/>

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login/vendor/bootstrap/css/bootstrap.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login/fonts/iconic/css/material-design-iconic-font.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login/vendor/animate/animate.css">

<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login/vendor/css-hamburgers/hamburgers.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login/vendor/animsition/css/animsition.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login/vendor/select2/select2.min.css">

<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login/vendor/daterangepicker/daterangepicker.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login/css/util.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login/css/main.css">

<!--===============================================================================================-->

  <style>



    .custom-bottom-margin{

        padding-bottom:50px;

    }



    .error-msg{

        margin:5px auto;

        width:100%;
        font-size: large;

        background:#db3737;

        color:#ffffff;

    }

  </style>

</head>

<body>

	

	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100 p-t-85 p-b-20">

				<form class="login100-form validate-form" action="<?php echo base_url(); ?>Login/LoginUser" method="post">

					
						<div align="center">
						<img width="40%" height="100%" src="<?php echo base_url(); ?>Login/images/logoppal.png"  >
					</div>
					<?php

                                    echo validation_errors();

                                    if (isset($errorMsg)) {

                                        echo '<div class="error-msg">';

                                        echo $errorMsg;

                                        echo '</div>';

                                        unset($errorMsg);

                                    }

                                    ?>
				

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">

						<input class="input100" type="text" name="email">

						<span class="focus-input100" data-placeholder="Correo"></span>

					</div>



					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">

						<input class="input100" type="password" name="password">

						<span class="focus-input100" data-placeholder="Contraseña"></span>

					</div>



					<div class="container-login100-form-btn">

						<div class="col-md-12">
                                            <button type="sumit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Ingresar</button>
                                        </div>

					</div>

					<a href="<?php echo base_url(); ?>Login/#" class="txt2">

								Olvidaste tu contraseña?

							</a>





				</form>

			</div>

		</div>

	</div>

	



	

	


</body>

</html>