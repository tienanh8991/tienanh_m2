<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num = $_REQUEST["number"];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numArr = $_REQUEST["numArr"];
    $deleteNum = $_REQUEST["deleteNum"];
    try {
        foreach ($numArr as $key => $value) {
            if ($deleteNum == $value) {
                unset($numArr[$key]);
            }
        }
    } catch (Exception  $e) {
        echo "không có phần tử " . $deleteNum . " nào trong mảng ";
    }
    var_dump($numArr);
}
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Nhập phần tử của mảng :
    <table>
        <?php for ($i = 0; $i < $num; $i++): ?>
            <tr>
                <td><input type="text" name="numArr[]"></td>
            </tr>
        <?php endfor; ?>
    </table>
    Nhập phần tử cần xóa :
    <input type="text" name="deleteNum">
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>