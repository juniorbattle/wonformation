<?php

if(!$session->Exist($config['name']) &&  !in_array($config['actvPage'],$config['pages']['unconnected'])) {
  Utils::Redirect($config["url"] . "login");
  exit();
} elseif($session->Exist($config['name']) && in_array($config['actvPage'],$config['pages']['unconnected']) && $action != "logout") {
  Utils::Redirect($config["url"]);
  exit();
}
