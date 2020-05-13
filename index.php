<?php
include('Catalog/View/template/loginpage.php');
require_once 'systems/controller.php';

define("DIR_CATALOG",realpath(dirname(__FILE__)));

if(isset($_GET['route'])) {
    $route = explode('/',$_GET['route'] );
    $path = $route[0];
    $file  = $route[1] . '.php';
    $method = $route[2];
    if(is_dir(DIR_CATALOG . $path)) {
        if(file_exists($path . '/' . $file)){
            require_once ($path . '/' . $file);
            //Тут нужно достать имя класса
            $classname = str_replace(array('controller', '.php'), array('',''), $file);
            $class = new $classname();
            if(method_exists($class, $method)) {
                $class->$method();
            }
        }
    }
} else {
    $controller = new Controller();
    $controller->start();
}