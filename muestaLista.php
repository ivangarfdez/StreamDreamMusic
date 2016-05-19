<?php

require_once("php/conexion.php");
require_once("db.php");


$name = ($_POST["name"]);
$favorita = ($_POST["favorita"]);
$one = ($_POST["one"]);
$two = ($_POST["two"]);
$three = ($_POST["three"]);
$four = ($_POST["four"]);
$five = ($_POST["five"]);
$six = ($_POST["six"]);
$seven = ($_POST["seven"]);


$sentencia = "SELECT * FROM Listas (name, favorita, one, two,three,four,five,six,seven) VALUES 
('$name', '$favorita', '$one', '$two', '$three', '$four', '$five', '$six', '$seven')";

// Check connection
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());


	$sql = "SELECT * FROM Listas";
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			echo "<table>";
			echo "<tr>";
			echo "<th>name</th>";
			echo "<th>favorita</th>";            
			echo "<th>one</th>";
			echo "<th>two</th>";
			echo "<th>three</th>";
			echo "<th>four</th>";
			echo "<th>five</th>";
			echo "<th>six</th>";
			echo "<th>seven</th>";
			echo "</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['favorita'] . "</td>";
				echo "<td>" . $row['one'] . "</td>";
				echo "<td>" . $row['two'] . "</td>";
				echo "<td>" . $row['three'] . "</td>";
				echo "<td>" . $row['four'] . "</td>";
				echo "<td>" . $row['five'] . "</td>";
				echo "<td>" . $row['six'] . "</td>";
				echo "<td>" . $row['seven'] . "</td>";

				echo "</tr>";
			}
			echo "</table>";

			//Cerramos el Result Set
			mysqli_free_result($result);
		} else{
			echo "No se han encontrado registros que coincidan.";
		}
	} else{
		echo "ERROR: $sql. " . mysqli_error($link);
	}

	$objeto=new mysqli($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);
	if($objeto->query($sentencia)){

		print "<br>Se muestan los datos de la BD<br>";
	}else{
		print "<br>No han podido mostrarse los datos<br>";
		print "<i>Error a:</i> ". $objeto->error;
		exit(); 
	}

	$objeto->close();




	?>