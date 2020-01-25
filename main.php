<?php
session_start();
require 'vendor/autoload.php';
$app = new \atk4\ui\App("KULoK");
$app->initLayout("Centered");
$columns = $app->add ('Columns');
$col_1 = $columns ->addColumn(3);
$col_2 = $columns ->addColumn(10);
$col_3 = $columns ->addColumn(3);

$clicker = $col_2 ->add(["Button","0","green fluid"]);
$clicker ->on('click',function($clicker){
$clicker ->set("Test");
});
$save = $col_2->add
