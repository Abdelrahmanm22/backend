<?php
namespace MVC\models;
use MVC\core\model;

class user extends model{


    public function GetAllUsers(){
        $data = model::db()->rows("SELECT * FROM users");
        return $data;
    }
}

?>