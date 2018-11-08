<?php
$config["name"] = $_SERVER['SERVER_NAME'];
$config["url"] = "http://" . $_SERVER["HTTP_HOST"] . "/";
$config['dir'] = "c:\/s";
$config['pages']['connected'] = [
  'dashboard' => ['pin' => 'ti-panel', 'name' => 'Dashboard'],
  'pages' => ['pin' => 'ti-layers-alt', 'name' => 'Pages'],
  'company' => ['pin' => 'ti-user', 'name' => 'Company'],
  'settings' => ['pin' => 'ti-settings', 'name' => 'Settings'],
  'login' => ['pin' => 'ti-power-off', 'name' => 'Logout', 'action' => 'logout']
];
$config['pages']['unconnected'] = [
  'login',
  'resetpassword',
  'signup'
];


require_once("functions.php");
require_once("database.loc.php");
