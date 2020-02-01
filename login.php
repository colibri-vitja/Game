<?php

require 'vendor/autoload.php';
require "conection.php";

$app = new \atk4\ui\App("kulok");
$app->initLayout("Centered");

$model = new User($db);

$form = $app->add(['Form']);
$form->addField('nickname');
$form->addField('password');
$form->buttonSave->set("log in");

$form->onSubmit(function($from) use ($model) {
$model->tryLoadBy('nickname',$form->model['nickname']);
if (isset($model->id)) {
if ($model["password"]) == $form->model["password"]) {

} else {
    return new at4\ui\jsNonotify(['content'=>'Wrong input','color'=>'red']);
}

} else {
  return new at4\ui\jsNonotify(['content'=>'Wrong input','color'=>'red']);
}
});
