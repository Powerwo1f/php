<?php

class db {

    private $db;

    function __construct($host, $user, $password, $db) {
        $this->db = new mysqli($host, $user, $password, $db);
        if ($this->db->connect_error) {
            trigger_error('Error: Could not make a database link (' . $this->db->connect_errno . ') ' . $this->db->connect_error);
        }
    }

    public function query($sql) {
        $result = $this->db->query($sql);

        if ($result != FALSE) {
            if (is_object($result)) {
                $i = 0;
                $data = array();

                while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $data[$i] = $row;
                    $i++;
                }

                return $data;
            }
        } else {
            echo 'it doesnt work</br>';
        }
    }
}
