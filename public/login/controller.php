<?php

switch($action)
{
  default :
    $contentHTML = getContent($config['dir'] . 'public/' . $config['actvPage'] . '/views/default.php');
    break;
  case 'log':
    $companyObj->loginWoncreative = Secure::GetValue($_POST, 'username');
    $companyObj->passwordWoncreative = Secure::GetValue($_POST, 'password');

    if($companyObj->SetLog()) {
      $session->{$config['name']} = $companyObj;

      Utils::Redirect($config["url"] . "index.php");
      exit();
    }

    Utils::Redirect($config["url"] . "index.php?p=" . $config['actvPage'] . "&error=1");
    exit();
    break;
  case 'logout':
    $session->Destroy();

    Utils::Redirect($config["url"] . "index.php");
    exit();
    break;
}
