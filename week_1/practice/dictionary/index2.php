<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form action="index2.php" method="get">
    <h2>Từ Điển Anh - Việt</h2>
    <label>
        <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
    </label>
    <input type="submit" id="submit" value="Tìm"/>
</form>
</body>
</html>

<?php
$dictionary = array(
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển vở",
    "computer" => "máy tính");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $searchWord = $_GET["search"];
    $flag = "";
    foreach ($dictionary as $word => $result) {
        if ($searchWord == $word){
            echo "Từ :" . $searchWord . " có nghĩa là : " . $result ;
            echo "<br>";
            $flag = 1 ;
        }
    }
    if ($flag == 0 ){
        echo    "không tìm thấy từ cần tra";
    }
}
