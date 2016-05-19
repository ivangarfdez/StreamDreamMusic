<?php

session_start();
require_once "fbsdk4-5.1.2/src/Facebook/autoload.php";
require_once "credentials.php";

$fb = new Facebook\Facebook([
  'app_id' => '1608020042821292', // Replace {app-id} with your app id
  'app_secret' => '7f527302f68d3bc7ed682c1c17f019e4',
  'default_graph_version' => 'v2.2'
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // permisos
$loginUrl = $helper->getLoginUrl($login_url, $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Entrar con Facebook!</a>';

// Get the base class GraphObject from the response
$object = $response->getGraphObject();

// Get the response typed as a GraphUser
$user = $response->getGraphObject(GraphUser::className());
// or convert the base object previously accessed
// $user = $object->cast(GraphUser::className());

// Get the response typed as a GraphLocation
$loc = $response->getGraphObject(GraphLocation::className());
// or convert the base object previously accessed
// $loc = $object->cast(GraphLocation::className());

// User example
echo $object->getProperty('name');
echo $user->getName();

// Location example
echo $object->getProperty('country');
echo $loc->getCountry();

// SessionInfo example
$info = $session->getSessionInfo();
echo $info->getxpiresAt();

?>