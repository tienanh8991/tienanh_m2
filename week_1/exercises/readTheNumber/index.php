<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $number = $_GET["number"];

    function readANumber ($number){
        switch ($number) {
            case 0:
                return "không" ;
            case 1 :
                return "một" ;
            case 2 :
                return "hai" ;
            case 3 :
                return "ba" ;
            case 4 :
                return "bốn" ;
            case 5 :
                return "năm" ;
            case 6 :
                return "sáu" ;
            case 7 :
                return "bảy" ;
            case 8 :
                return "tám" ;
            case 9 :
                return "chín" ;
        }
    }
    if ($number < 0 || $number > 999) {
        echo "out of ability";
    }
    if ($number < 10){
        echo readANumber($number);
    }
    else if ($number < 20 && $number >= 10 ){
        if (substr($number,-1) == 0){
            echo "mười";
        }
        else{
            echo " mười " . readANumber(substr($number,-1));
        }
    }
    else if ($number < 100){
        if (substr($number,-1) == 0){
            echo readANumber(substr($number,0,1)) ." mươi " ;
        }else{
            echo readANumber(substr($number,0,1)) ." mươi ". readANumber(substr($number,-1));
        }
    }
    else if ($number < 1000){
        if (substr($number,1,1) == 0){
            echo  readANumber(substr($number,0,1))." trăm "." linh " . readANumber(substr($number,-1));
        }else{
            echo readANumber(substr($number,0,1))." trăm ". readANumber(substr($number,1,1)) ." mươi ". readANumber(substr($number,-1));
        }
    }
    readANumber($number);
}

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form method="get">
    <label>
        <input type="text" name="number" placeholder="nhập số cần đọc">
    </label>
    <input type="submit" name="kiểm tra">
</form>
</body>
</html>