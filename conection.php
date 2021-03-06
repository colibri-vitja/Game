<?php


require 'vendor/autoload.php';
if (isset($_ENV['CLEARDB_DATABASE_URL'])) {
     $db = \atk4\data\Persistence::connect($_ENV['CLEARDB_DATABASE_URL']);
 } else {
     $db = \atk4\data\Persistence::connect('mysql:host=127.0.0.1;dbname=colibri_clicker;charset=utf8', 'root', '');
 }


class User extends \atk4\data\Model {
    public $table = 'user';
    function init() {
        parent::init();
        $this->addField("nickname",["required"=>TRUE]);
        $this->addField("name");
        $this->addField("surname");
        $this->addField("email",["required"=>TRUE]);
        $this->addField("clicker_count",['default'=>0]);
        $this->addField("password",["type"=>"password","required"=>TRUE]);
    }
}
