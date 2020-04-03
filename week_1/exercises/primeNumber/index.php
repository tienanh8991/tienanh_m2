<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function checkPrime($n)
{
    if ($n < 2) {
        return false;
    }
    if ($n >= 2) {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

echo "các số nguyên tố nhỏ hơn 100 là : ";

for ($number = 2; $number < 100; $number++) {
    if (checkPrime($number)) {
        echo $number . " , ";
    }
}

?>
</body>
</html>
