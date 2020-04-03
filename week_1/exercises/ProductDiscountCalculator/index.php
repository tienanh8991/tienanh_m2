
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="display_discount.php" >
    <table border=0>
        <caption >Product Discount Calculator</caption>
        <tr>
            <td>Product Description: </td>
            <td><input type="text" name="product" ></td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td><input type="text" name="price" ></td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td><input type="text" name="percent" placeholder="%"></td>
        </tr>
    </table>
    <input type="submit" name="Tính">
</form>
</body>
</html>