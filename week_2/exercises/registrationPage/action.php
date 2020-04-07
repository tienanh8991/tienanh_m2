<?php
if ($_SERVER["REQUEST_METHOD"]=='POST'){
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $phoneNumber = $_REQUEST["phoneNumber"];

    include "function.php";

    if (empty($name)||empty($email)||empty($phoneNumber)){
        echo "vui lòng điền đầy đủ thông tin !";
    }else if (filter_var($email,FILTER_VALIDATE_EMAIL)){
        saveDataJSON('users.json',$name,$email,$phoneNumber);
    }else {
        echo "Emai không đúng !";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Stt</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
    </tr>
    <?php foreach (getDataJson('users.json') as $index => $registration):?>
    <tr>
        <td><?php echo $index;?></td>
        <td><?php echo $registration -> name;?></td>
        <td><?php echo $registration -> email;?></td>
        <td><?php echo $registration -> phone;?></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>