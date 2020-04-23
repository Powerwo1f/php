<?php

    if(isset($_POST["submit"])) {
    $conn = new mysqli("127.0.0.1", "root", "", 'users');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(!empty($_POST["password"]) && !empty($_POST["login"])) {

        $password = md5(htmlspecialchars($_POST["password"]));
        $login = htmlspecialchars($_POST["login"]);
        $sql = "SELECT login FROM user_list WHERE password = '{$password}' AND login = '{$login}'";
        if ($conn->query($sql) == TRUE) {
            setcookie('login',$login,time()+(60*60*24*30));
            echo 'Welcome '.$login;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}


