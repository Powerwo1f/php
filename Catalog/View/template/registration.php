<?php


    if(isset($_POST["submit"])) {
        $conn = new mysqli("127.0.0.1", "root", "", 'users');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if(!empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["passwordcheck"]) && !empty($_POST["login"])) {
            if ($_POST["password"] === $_POST["passwordcheck"]) {

                $email = htmlspecialchars($_POST["email"]);
                $password = md5(htmlspecialchars($_POST["password"]));
                $login = htmlspecialchars($_POST["login"]);

                $sql = "INSERT INTO user_list (login, email, password)
                    VALUES ('$login', '$email', '$password')";
                if ($conn->query($sql) == TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

            } else echo "Passwords don't match";
        }
    }





