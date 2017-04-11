<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nosotros</title>
	<link rel="stylesheet" href="Css/estilos.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body >
	<div class="container">	
		<?php require 'Vistas/Vista_Menu.php'; ?>
		<div class="jumbotron hidden-xs">
		</div>
		<div class="row">
			<div class="col-md-8 col-xs-12">
			<section class="border-shadaw">
				Este sitio es parte de la segunda tarea corta del curso <b>Desarrollos de aplicaciones para internet</b> el cual muestra información general acerca del creador. Fue desarrollado utilizando html, css y php para modelaje. Se utilizó Font Awesome para los iconos de redes sociales y boostrap como frameword de frontend.	
			</section>
			</div>
			<div class="col-md-4 hidden-xs hidden-sm">
				<?php require 'Vistas/Vista_Aside.php'; ?>

			</div>
		</div>
		<?php require 'Vistas/Vista_Footer.php'; ?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/e61e48628a.js"></script>
</body>
</html>


