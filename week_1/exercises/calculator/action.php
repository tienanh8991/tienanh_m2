<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstNum = $_POST["firstNumber"];
    $secondNum = $_POST["secondNumber"];
    $calculation = $_POST["calculation"];

    $cal = new Calculator();

    switch ($calculation) {
        case "+" :
            $cal->sum($firstNum, $secondNum);
            break;
        case "-" :
            $cal->sub($firstNum, $secondNum);
            break;
        case "*" :
            $cal->mul($firstNum, $secondNum);
            break;
        case "/" :
            $cal->di($firstNum, $secondNum);
            break;
    }
}

class Calculator
{
    function sum($a, $b)
    {
        echo $a + $b;
    }
    function sub($a, $b)
    {
        echo $a - $b;
    }
    function mul($a, $b)
    {
        echo $a * $b;
    }
    function di($a, $b)
    {
        echo $a / $b;
    }
}

?>
</body>
</html>
