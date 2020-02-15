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
$val = $col_2->add(['FormField/Line','45']);
$clicker = $col_2 ->add(["Button","Click","green fluid"]);
$clicker->js('click', new \atk4\ui\jsReLoad($val,['val' => $val->jsInput()->val(new \atk4\ui\jsExpression('parseInt([])+1', [$val->jsInput()->val()]), $val->jsInput()->focus())]));
//$save = $col_2->add
$exit = $app->add(["Button","exit","red"]);
$exit->link(['exit']);
$x3 = $col_3->add(["Button","Click x2","inverted violet"]);
$SonEX = $col_3->add(["Button","+0.5 cli/sek","inverted violet"]);
