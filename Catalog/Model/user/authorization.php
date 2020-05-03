<?php

class AuthorizationModel {
    protected $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getUsers() {
        $query = $this->db->query("SELECT * FROM user_list ORDER BY id DESC");

        return $query;
    }
}