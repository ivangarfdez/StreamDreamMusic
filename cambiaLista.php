<?php 
include "php/navbarmusic.php"; 
?>


<html>
<head>
	<title> DREAM </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>

	<form class="form-horizontal" role="form" method="post" action="update.php">
		<div class="form-group">
			<label for="odio" class="col-sm-2 control-label">Nombre de la lista Nueva:</label>
			<div class="col-sm-5">
				<input type="odio" class="form-control" id="odio" name="odio" placeholder="Lista Exitos 2016" value="">
			</div>
		</div>

		<div class="form-group">
			<label for="favorita" class="col-sm-2 control-label">Nombre de la lista Vieja:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="favorita" name="favorita" placeholder="Lista Exitos 2015" value="">
			</div>
			<br>
			<br>
			<br>
			
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<input id="submit" name="submit" type="submit" value="Guardar Lista" class="btn btn-primary" <a href="muestraCambiaLista.php">

				</div>		</div>
			</body>
		</form>
		</html>
		