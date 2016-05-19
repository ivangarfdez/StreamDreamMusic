	
	<html>
	<head>
		<title> DREAM </title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	</head>
	<body>
		<?php include "php/navbarmusic.php"; 
		?>

	<form class="form-horizontal" role="form" method="post" action="añadedb.php">
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Nombre de la lista:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="name" name="name" placeholder="Favoritos" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Canción Favorita:</label>
			<div class="col-sm-5">
				<input type="favorita" class="form-control" id="favorita" name="favorita" placeholder="Work (feat. Drake) - Rihanna" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Otras Canciones:</label>
			<div class="col-sm-5">
				<input type="one" class="form-control" id="one" name="one" placeholder="Major Lazer - Light It Up" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label"></label>
			<div class="col-sm-5">
				<input type="two" class="form-control" id="two" name="two" placeholder="Avicii - Levels" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label"></label>
			<div class="col-sm-5">
				<input type="three" class="form-control" id="three" name="three" placeholder="Sia - Chandelier" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label"></label>
			<div class="col-sm-5">
				<input type="four" class="form-control" id="four" name="four" placeholder="Diplo - Where Are U Now" value="">
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-sm-2 control-label"></label>
			<div class="col-sm-5">
				<input type="five" class="form-control" id="five" name="five" placeholder="Desiigner - Panda" value="">
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-sm-2 control-label"></label>
			<div class="col-sm-5">
				<input type="six" class="form-control" id="six" name="six" placeholder="Major Lazer - Learn on" value="">
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-sm-2 control-label"></label>
			<div class="col-sm-5">
				<input type="seven" class="form-control" id="seven" name="seven" placeholder="Imagine Dragons - Radioactive" value="">
			</div>
		</div>
		
		
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Guardar Lista" a href="muestraLista.php" class="btn btn-primary">

			</div>
		</div>
	</br>
	<a href="index.php" class="btn btn-warning">
		<span class="glyphicon glyphicon-hand-left" aria-hidden="true"> Volver </span>

		
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<!Alert>
			</div>
		</div>

		
		</body>
	</form>
	</html>


