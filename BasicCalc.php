<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="BasicCalc.php" method="post">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">

        Answer: <?php echo $_POST ["num1"] + $_POST["num2"] ?>
</body>
</html>