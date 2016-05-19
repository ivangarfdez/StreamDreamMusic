<html>
<head>
	<title> DREAM </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	 <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include "php/navbarmusic.php"; ?>


	<div class="container">
		<h2>Aquí tienes tus listas</h2>
		<table class="table table-bordered">
		</body>


		<?php

		$link = mysqli_connect("localhost", "root", "tonphp", "dreamMusic");

// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		$sql = "SELECT * FROM Listas";


		if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){	
				echo "<table>";
				echo "<tr>";
				echo "<th>Lista</th>";
				echo "<th>Favorita</th>";            
				echo '<th>1ª</th>';
				echo "<th>2ª</th>";
				echo "<th>3ª</th>";
				echo "<th>4ª</th>";
				echo "<th>5ª</th>";
				echo "<th>6ª</th>";
				echo "<th>7ª</th>";
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
		mysqli_close($link);




		?>