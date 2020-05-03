<?php

class Authorization extends Controller {

    protected $model;

    public function index() {
        $this->model = $this->load->model('user/authorization');

        $users = $this->model->getUsers();
        var_dump($users);die();
    }

}
