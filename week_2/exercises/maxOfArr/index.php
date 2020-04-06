<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$array = [
    [1, 3, 60, 14, 5],
    [15, 6, 7, 6, 25],
    [70, 32, 8, 1, 22],
    [10,4,40,26]
];

function findMax($array){
    $max = $array[0][0];
    for ($i = 0 ; $i < count($array);$i++ ){
        for ($j = 0 ; $j < count($array[$i]) ; $j++){
            if ($max < $array[$i][$j] ){
                $max = $array[$i][$j];
            }
        }
    }
    echo "giá trị lớn nhất bằng : " . $max;
}

findMax($array);

?>

<form method="post">

</form>

</body>
</html>