<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $x = $_REQUEST["array1"];
    $y = $_REQUEST["array2"];

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $xArray = $_REQUEST["xArray"];
    $yArray = $_REQUEST["yArray"];

    $zArray = array_merge($xArray, $yArray);

    foreach ($zArray as $value){
        echo $value . " " ;
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
<form  method="post">
    <table>
        <tr>
            <?php for ($i = 0; $i < $x; $i++): ?>
                <td><input type="text" name="xArray[]"></td>
            <?php endfor; ?>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <?php for ($i = 0; $i < $y; $i++): ?>
                <td><input type="text" name="yArray[]"></td>
            <?php endfor; ?>
        </tr>
    </table>
    <button type="submit">Merge</button>
</form>
</body>
</html>