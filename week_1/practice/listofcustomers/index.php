
<?php
    $customerList = array(
        "1" => array("ten" => "Nguyễn Văn A",
            "ngaysinh" => "1998-12-10",
            "diachi" => "Hà Nội",
            "anh" => "images/img1.jpg"),
        "2" => array("ten" => "Nguyễn Văn N",
            "ngaysinh" => "1998-12-10",
            "diachi" => "Bắc Giang",
            "anh" => "images/img2.jpg"),
        "3" => array("ten" => "Nguyễn Văn X",
            "ngaysinh" => "1998-12-10",
            "diachi" => "Nam Định",
            "anh" => "images/img3.jpg")
    );
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table>
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
        foreach ($customerList as $key => $values) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $values['ten'] . "</td>";
            echo "<td>" . $values['ngaysinh'] . "</td>";
            echo "<td>" . $values['diachi'] . "</td>";
            echo "<td><image src ='" . $values['anh'] . "' width = '60px' height ='60px'/></td>";
            echo "</tr>";
            echo "<br>";
        }
    ?>
</table>
</body>
</html>
