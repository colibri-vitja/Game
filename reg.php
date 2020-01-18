<?php
require 'vendor/autoload.php';
require "conection.php";
$app = new \atk4\ui\App("kulok");
$app->initLayout("Centered");
$form  = $app->layout->add("Form");
$form->setModel(new User($db));
$form->buttonSave->set("Create Account");

$form->onSubmit(function($from){
return new \atk4\ui\jsExpression('document.location = "main.php"');
});
