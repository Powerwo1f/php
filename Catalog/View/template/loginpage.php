<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>@import url("loginpagestyle.css")</style>
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