<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["userName"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "admin"){
         echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
    }else {
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
}
?>

<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <div class="login">
        <h2 Login ></h2>
        User Name :
        <label>
            <input type="text" name="userName" >
        </label>
        Password :
        <label>
            <input type="password" name="password">
        </label>
        <input type="submit" value="Sign in">
    </div>
</form>
</body>
</html>