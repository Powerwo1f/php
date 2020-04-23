<?php

class Controller {
    protected $db;
    protected $load;

    public function __construct(){
        require_once 'db.php';
        $this->db = new DB('localhost', 'root', '', 'users');

        require_once 'loader.php';
        $this->load = new Loader($this->db);
    }

    public function start(){
        require_once 'catalog/controller/user/authorization.php';

        $controller = new Authorization();

        call_user_func(array($controller, 'index'), array());
    }
}

?>