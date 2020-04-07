<?php
if ($_SERVER["REQUEST_METHOD"]== "GET"){
    $text = $_REQUEST['text'];
    $str = "hello every body";

    if (isset($text)){
        echo "số phần tử " .$text. " bằng " . checkKey($str,$text);
    }

}
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php
function checkKey($str,$key){
    $count = 0 ;
    for ($i = 0 ; $i < strlen($str) ; $i++ ){
        if ($key == substr($str,$i,1)){
            $count ++;
        }
    }return $count;
}
?>
<form method="get">
    Nhập ký tự kiểm tra :
    <input type="text" name="text">
    <button type="submit">Kiểm tra</button>
</form>
</body>
</html>
