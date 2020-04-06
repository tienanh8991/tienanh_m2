<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$array = [11, 3, 55, 7, 5, 10, 9, 2, 45, 60, 19];

function findMin($array)
{
    $min = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    echo "giá trị nhỏ nhất bằng : " . $min;
}

findMin($array);

?>
</body>
</html>
