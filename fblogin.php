<?php

require_once('fbsdk4-5.1.2/src/Facebook/Facebook.php');
require_once('fbsdk4-5.1.2/src/Facebook/FacebookApp.php');
require_once('fbsdk4-5.1.2/src/Facebook');



// manejar codigo de error, si esta presente
if (isset($_REQUEST['error_reason'])) {
	 echo("<script>self.close();</script>");
	 exit;
}

// construir el objecto sdk de facebook
$login_url = 'http://localhost/DAW/Final/añadeLista.php';
$fb_apikey = '1608020042821292';
$fb_secret = '7f527302f68d3bc7ed682c1c17f019e4';

$facebook = new Facebook(array(
	'appId' => $fb_apikey,
	'secret' => $$fb_secret
));

// obtener el codigo de respuesta
$code = $_REQUEST["code"];


// construir el URL de login de Facebook
$loginUrl = $facebook->getLoginUrl(array(
	'scope' => 'email',
	'display' => 'popup',
	'redirect_uri' => $login_url
));


// si no existe codigo de retorno de facebook, enviarmos al usuario al formulario
// de login de Facebook
if(empty($code)) {
	echo("<script> top.location.href='$loginUrl'</script>");
	exit;
} else {

		// obtener el token de autenticacion a partir de Facebook Graph
		$token_url = "https://graph.facebook.com/oauth/access_token?"
		   . "client_id=" . $fb_apikey . "&redirect_uri=" . urlencode($login_url)
		   . "&client_secret=" . $fb_secret . "&code=" . $code;

		// obteenemos la respuesta y la interpretamos
		$response = @file_get_contents($token_url);
		$params = null;
		parse_str($response, $params);

		// asignamos al objecto Facebook el token para proceder a realizar
		// llamadas al API posteriormente
		$facebook->setAccessToken($params['access_token']);
		$fbme = $this->facebook->api('/me', 'GET');
		if ($fbme) {
			// teniendo el objeto Facebook ME (datos del usuario) procedemos
            // a realizar nuestro proceso ya sea de login o registro.			
			proceed_login_or_register($fbme);
		} 

}
?>