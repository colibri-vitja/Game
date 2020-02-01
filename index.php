<?php


require 'vendor/autoload.php';
$app = new \atk4\ui\App("kulok");
$app->initLayout("Centered");
$clicker_name = $app->add(["Header","Colibi Clicer","huge centred"]);
$button_log_in = $app->add(["Button","log in","cirkular icon blue","icon"=>"power off"]);
$button_log_in->on("click", function () {
  return new \atk4\ui\jsExpression("document.location = 'login.php'");
});

$button_reg = $app->add(["Button","Registration","green","icon"=>"arrow right"]);
$button_reg ->link("reg.php");
