<?php
if ($_SERVER["REQUEST_METHOD"]=="GET"){
    $num = $_REQUEST["number"];
}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $numArr = $_REQUEST["numArr"];
    $min = $numArr[0];

    for ($j = 0 ; $j < count($numArr) ; $j++ ){
        if ($min > $numArr[$j]){
            $min = $numArr[$j];
        }
    }
    echo "giá trị nhỏ nhất của mảng bằng : " . $min;
}
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Nhập phần tử của mảng :
    <table>
        <?php for ($i = 0 ; $i < $num ; $i++):?>
        <tr>
            <td><input type="text" name="numArr[]" ></td>
        </tr>
        <?php endfor;?>
    </table>
    <button type="submit">Submit</button>
</form>
</body>
</html>