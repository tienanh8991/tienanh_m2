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
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <table>
        <caption>Calculator</caption>
        <tr>
            <td>First Operand :</td>
            <td><input type="text" name="firstNumber"></td>
        </tr>
        <tr>
            <td>Operator:</td>
            <td><select name="cal">
                    <option value="+">summation</option>
                    <option value="-">Subtraction</option>
                    <option value="*">multiplication</option>
                    <option value="/">division</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Second Operand:</td>
            <td><input type="text" name="secondNumber"></td>
        </tr>
        <tr>
            <td><input type="submit" name="Tính"></td>
        </tr>
    </table>

</form>
</body>
</html>
