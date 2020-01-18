<?php


require 'vendor/autoload.php';
$app = new \atk4\ui\App("kulok");
$app->initLayout("Centered");
$clicker_name = $app->add(["Header","Colibi Clicer","huge centred"]);
$button_new = $app->add(["Button","Start","cirkular icon blue","icon"=>"power off"]);
$button_new->on("click", function () {
  return new \atk4\ui\jsExpression("document.location = 'main.php'");
});

$button_reg = $app->add(["Button","Registration","green","icon"=>"arrow right"]);
$button_reg ->link("reg.php");
