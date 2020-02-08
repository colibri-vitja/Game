<?php
session_start();
require 'vendor/autoload.php';
$app = new \atk4\ui\App("KULoK");
$app->initLayout("Centered");
$m = 1;
$columns = $app->add ('Columns');
$col_1 = $columns ->addColumn(3);
$col_2 = $columns ->addColumn(10);
$col_3 = $columns ->addColumn(3);
$clicker = $col_2 ->add(["Button",$_SESSION["i"],"green fluid"]);
$clicker ->on('click',function($m){
  $_SESSION["i"] = $_SESSION["i"] + 1;
  return $m;
});
//$save = $col_2->add
$exit = $app->add(["Button","exit","red"]);
$exit->link(['exit']);
