<html>
<body>

<?php 



$conn=mysqli_connect("localhost", "root", "tonphp", "dreamMusic");

   $sql = "UPDATE Listas SET name='$_POST[odio]'WHERE name='$_POST[favorita]'";
   $resultado = mysqli_query($conn,$sql);
   if ($resultado==true) {
   	//echo "Se ha completado correctamente el cambio";
   }else{
   	//echo "Algo va mal...";
   }



?>		

<html>
<head>
	<title> DREAM </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>

	<div class="alert alert-success" role="alert"<span class="glyphicon glyphicon-search" aria-hidden="true"></span>Se ha actualizado la lista correctamente</div>


</body>
</html> 

<?php

$enlace= "Select.php";
		echo '<a href="' . htmlspecialchars($enlace) . '"class="btn btn-info" role="button">Muestra la Lista</a>';
?>