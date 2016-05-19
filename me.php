<?php

session_start();

if(isset($_SESSION["fb_access_token"])){

require_once "fbsdk4-5.1.2/src/Facebook/autoload.php";
require_once "credentials.php";

$fb = new Facebook\Facebook([
  'app_id' => $app_id,
  'app_secret' => $app_secret,
  'default_graph_version' => 'v2.2',
  ]);

$accessToken = $_SESSION['fb_access_token'] ;

if(isset($accessToken)){
$fb->setDefaultAccessToken($accessToken);

try {
  $response = $fb->get('/me');
  $userNode = $response->getGraphUser();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

echo 'Bienvenido ' . $userNode->getName();
echo " <a href='logout.php'>Salir</a>";
}

}else{
  header("Location: login.php");

}

?>