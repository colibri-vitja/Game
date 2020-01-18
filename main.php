<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App("ko;ko;koo;ko;oko;oko;ok;ko;ko;ko;k;k;k;k;k;kko;");
$app->initLayout("Centered");
$columns = $app->add ('Columns');
$col_1 = $columns ->addColumn(3);
$col_2 = $columns ->addColumn(10);
$col_3 = $columns ->addColumn(3);

$clicker = $col_2 ->add(["Button","0","green fluid"])
$clicker ->on('click',function($clicker){
$clicker ->set("Test");
$clicker ->js()->reload();
});
