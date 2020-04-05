<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Ứng dụng chuyển đổi tiền tệ</title>
    <style>
        .container {
            width: 400px;
            height: 170px;
            line-height: 30px;
            padding-left: 10px;
            float: left;
        }
    </style>
</head>
<body>
<form action="index.php" method="post">
    <div class="container">
    <input type="text" name="value">
    <select name="rate">
        <option>USD</option>
        <option>VND</option>
    </select><br>
    <input type="submit" value="Tính"><br>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $value = $_POST["value"];
        $rate = $_POST["rate"];

        switch ($rate){
            case "USD" :
                echo $value . " USD bằng " . $value*23000 . " VND" ;
                break ;
            case "VND" :
                echo $value . " VND bằng " . $value/23000 . " USD";
        }
    }
    ?>
    </div>
</form>
</body>
</html>