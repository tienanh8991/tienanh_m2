
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form action="action.php" method="get">
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
