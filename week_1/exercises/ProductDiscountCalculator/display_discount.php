<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"];
    $price = $_POST["price"];
    $percent = $_POST["percent"];

    $discountAmount = $price * $percent / 100;
    $discountPrice = $discountAmount * $price;
}
?>
<!
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<table border=0>
    <caption >Product Discount Calculator</caption>
    <tr>
        <td>Product Description: </td>
        <td><?php echo $product?></td>
    </tr>
    <tr>
        <td>List Price:</td>
        <td><?php echo $price?></td>
    </tr>
    <tr>
        <td>Discount Percent:</td>
        <td><?php echo $percent?></td>
    </tr>
    <tr>
        <td>Discount Amount:</td>
        <td><?php echo $discountAmount?></td>
    </tr>
    <tr>
        <td>Discount Price</td>
        <td><?php echo $discountPrice?></td>
    </tr>
</table>
</body>
</html>