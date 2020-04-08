<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $number = $_REQUEST["number"];

    $arr = [];
    for ($i = 0; $i < 100; $i++) {
        array_push($arr, floor(rand(10, 100)));
    }
    if ($number > 100 || $number <0){
        throw new Exception(' số nhập vào vượt quá giới hạn !');
    }else{
        foreach ($arr as $key => $value) {
            try {
                if ($key == $number) {
                    echo "phần tử tại vị trí " . $key . " có giá trụ bằng " . $value;
                }
            } catch (Exception $e) {
                echo " Massage : " . $e->getMessage() , "\n";
            }
        }
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
<form action="" method="get">
    Nhập vị trí phần tử cần kiểm tra :
    <input type="text" name="number">
    <button type="submit"> Submit</button>
</form>
</body>
</html>
