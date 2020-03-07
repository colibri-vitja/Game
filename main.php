<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script>
    window.onload = functon() {
      var click = document.getElementById("clicke")
      var limpopo = "<?=session_start(); ?>"
      var val = "<?= $_SESSION['coockie']; ?>";
      click.value = val;
    }
    </script>
  </head>
  <body>

  </body>
</html>

















<?php
require 'vendor/autoload.php';
require 'connection.php'
$app = new \atk4\ui\App('KULoK');
$app->initLayout('Centered');
$user = new User($db);
user->load($_SESSION['user_id']);
$_SESSION['cookie'] = $user['clicker_count'];
$user->unload();






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
$slicer = $col_2->add(['View','template' => new \atk4\ui\Template('
<div id="{$_id}" class="ui statistic">
  <input type="button" id="clicke" value=0 onclick=Clicker() style="width:500px;height:100px;background-color:violet;color:white;font-size:35px;">
</div>
<script>
  function Clicker() {
    var click = document.getElementById("clicke");
    click.value = parseInt(click.value) + 9999999999;
    ;
  }
</script>')]);
$save = $col_2->add(['View','template' => new \atk4\ui\Template('
<div id="{$_id}" class="ui statistic">
 <input type="button" id="clicke" value="Save" onclick=Save() style="width:500px;height:100px;background-color:green;color:white;font-size:35px;">
</div>
<script>
 function Save() {
   var click = document.getElementById("clicke");
   var link = \'save.php?val=\'+click.value;
   window.open(link);
 }
</script>')]);
$val = $col_2->add(['FormField/Line','45']);
//$clicker = $col_2 ->add(["Button","Click","green fluid"]);
//$clicker->js('click', new \atk4\ui\jsReLoad($val,['val' => $val->jsInput()->val(new \atk4\ui\jsExpression('parseInt([])+1', [$val->jsInput()->val()]), $val->jsInput()->focus())]));
//$save = $col_2->add
$exit = $app->add(["Button","exit","red"]);
$exit->link(['exit']);
$x3 = $col_3->add(["Button","Click x2","inverted violet"]);
$SonEX = $col_3->add(["Button","+0.5 cli/sek","inverted violet"]);
