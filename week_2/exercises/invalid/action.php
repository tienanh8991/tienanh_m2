<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $firstNum = $_GET["firstNumber"];
    $secondNum = $_GET["secondNumber"];
    $calculation = $_GET["cal"];

    try {
        switch ($calculation) {
            case "+" :
                echo $firstNum + $secondNum;
                break;
            case "-" :
                echo $firstNum - $secondNum;
                break;
            case "*" :
                echo $firstNum * $secondNum;
                break;
            case "/" :
                echo $firstNum / $secondNum;
                throw new Exception($secondNum == 0);
                break;

        }
    } catch (Exception $e) {
        echo "Massage : số nhập vào không đúng ! " . $e->getMessage();
    }

}

