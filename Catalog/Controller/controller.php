<?php

require 'd:/OSPanel/OSPanel/domains/localhost/systems/DB.php';

class Controller {

    protected $connection;
    protected $userList;

    function __construct() {
        $this->connection = new db;
        $this->userList = $this->connection->query('SELECT login FROM user_list');
    }

    public function getUsers() {

        foreach($this->userList as $value) {
            echo $value[0]. '</br>';
        }
    }


}
