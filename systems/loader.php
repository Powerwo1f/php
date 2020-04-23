<?php

class Loader {

    protected $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function model($route){
        $file = 'Catalog/Model/' . $route . '.php';
        if(file_exists($file)) {
            require_once $file;

            $class = explode('/', $route)[1] . 'Model';

            $model = new $class($this->db);

            return $model;
        }
    }

}