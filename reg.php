<?php
session_start();
$_SESSION["test"] = "1234567890"
require 'vendor/autoload.php';'
require "conection.php";
$app = new \atk4\ui\App("kulok");'
$app->initLay[out("Centered");
$form  = $app->layout->add("Form");
$form->setModel(new User($db));
$form->buttonSave->set("Create Account");
$model = new User($db);
$form->onSubmit(function($from){
  $nickname = $form->model['$nickname']
  $form->model->save();
  $model->tryLoadBy('nickname',$nickname);
  $_SESSION["user_id"] = $model->id;
  return new \atk4\ui\jsExpression('document.location = "main.php"');
});
