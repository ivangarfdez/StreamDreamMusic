	<html>
	<head>
		<title> DREAM </title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>

		<?php include "php/navbar.php"; ?>




	</body>


	<?php

	require_once("php/conexion.php");


	$name = ($_POST["name"]);
	$favorita = ($_POST["favorita"]);
	$one = ($_POST["one"]);
	$two = ($_POST["two"]);
	$three = ($_POST["three"]);
	$four = ($_POST["four"]);
	$five = ($_POST["five"]);
	$six = ($_POST["six"]);
	$seven = ($_POST["seven"]);


	$sentencia = "INSERT INTO Listas (name, favorita, one, two,three,four,five,six,seven) VALUES 
	('$name', '$favorita', '$one', '$two', '$three', '$four', '$five', '$six', '$seven')";


	$objeto=new mysqli($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);
	if($objeto->query($sentencia)){

		//print "<br>Se ha insertado un registro en la base de datos<br>";

		echo'<div class="alert alert-success" role="alert">Se ha guardado la lista.</div>';

		
		$enlace= "Select.php";
		echo '<a href="' . htmlspecialchars($enlace) . '"class="btn btn-info" role="button">Muestra la Lista</a>';
		echo "<br>";
		echo "<br>";

		echo "<br>";


		echo'<div class="progress">
		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
			<span class="sr-only">100% Complete</span>
			100%
		</div>';


	}else{
		echo'<div class="alert alert-danger" role="alert">No se ha podido guardar la lista.</div>';
		echo'<a href="index.php" class="btn btn-warning">
		<span class="glyphicon glyphicon-hand-left" aria-hidden="true"> Volver </span>';

		//print "<br>No ha podido insertarse en la base de datos<br>";
		//print "<i>Error a:</i> ". $objeto->error;
		exit(); 
	}


	$objeto->close();




	?>