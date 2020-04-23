<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <STYLE type="text/css">
        body {
            background-color: #999999;
            font-family: 'Open Sans', sans-serif;
            color: #777;
        }
        form {
            background-color: white;
            margin-left : 35%;
            margin-right : 35%;
        }
        form .header {
            text-align: center;
            border:1px solid #ff801d;
            border-style: dashed;
            padding-top:20px;
            padding-bottom: 20px;
        }
        form .register{
            padding-bottom: 40px;
        }
        a {
            color: #ff801d
        }
        input {
            margin:0% 10% 0% 10%;
            box-shadow: inset 0 2px 5px rgba(0,0,0,0.2);
            text-align:center;
            width:80%;
            border:none;
            height: 50px;
        }
        button {
            color: #484848;
            float:right;
            background-color: #ff801d;
            border:none;
            height: 40px;
            width:30%;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: inset 0 2px 5px rgba(0,0,0,0.2);
        }
        label {
            margin:0% 10% 0% 10%;
        }
        div {
            margin:5% 5% 5% 5%;
        }

    </STYLE>
</head>
<body>

    <form action= "login.php" method="post" >
        <p class = "header"> LOGIN </p>
        <div>
            <label for="loginfield">Login:</label>
            <input type="text" name="login" id="loginfield">
        </div>
        <div>
            <label for="passwordfield">Password:</label>
            <input type="password" name="password" id="passwordfield">
        </div>
        <div class="bottom">
            <button type="submit" name="submit" >Login</button>
            <p class="register">Don't have an account?<a href="authorization.html">Register</a>!</p>
        </div>
    </form>

    <?php
        require '../../Controller/authorization.php';
        $new = new controller;
        $new->getUsers();
    ?>

</body>

</html>