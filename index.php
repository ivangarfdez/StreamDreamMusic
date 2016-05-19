<html>
<head>
	<title> DREAM </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php include "php/navbar.php"; ?>

	<img src="nahir.png	" align="right">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<h2>Regístrate con Facebook.	
					<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></h2>


					<ol>
						<li>Haz click en el link.</li>
						<li>Aparecerá una nueva ventana.</li>
						<li>Introduce tu usuario y contraseña de Facebook.</li>
					</ol>
					<br>
					<ul type="none">
						<li><i class="glyphicon glyphicon-ok"></i>	Haz tus listas públicas de música de una manera fácil y sencilla</li>
						<li><i class="glyphicon glyphicon-ok"></i>	Podrás ver las listas de éxitos que han hecho otros usuarios</li>
						<li><i class="glyphicon glyphicon-ok"></i>	Escúchalas en Streaming</li>
						<br>
						<li><i class="glyphicon glyphicon-hand-down"></i>	Ya casi puedes crear listas, entra con Facebook para completar la barra.	<i class="glyphicon glyphicon-hand-down"></i></li>
					</ul>



					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
							<span class="sr-only">50% Complete</span>
							50%
						</div>
					</div>

					<?php
					session_start();



					require_once "fbsdk4-5.1.2/src/Facebook/autoload.php";
					require_once "credentials.php";
					require_once "fbsdk4-5.1.2/src/Facebook/Authentication/AccessTokenMetadata.php";



					$fb = new Facebook\Facebook([
						'app_id' => '1608020042821292',
						'app_secret' => '7f527302f68d3bc7ed682c1c17f019e4',
						'default_graph_version' => 'v2.2'
						]);



					$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // permisos
$loginUrl = $helper->getLoginUrl($login_url, $permissions);



echo '<a href="' . htmlspecialchars($loginUrl) . '"class="btn btn-info" role="button">Entrar con Facebook!</a>';

?>


</div>
</div>
</div>
</body>


</html>