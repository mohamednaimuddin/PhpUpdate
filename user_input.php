<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Input</title>
</head>
<body>
    
    <form action="user_input.php" method="get">
        Name :<input type="text" name="name">
        Age :<input type="number" name="age">
        <input type="submit">
    </form>

    <br>
    <?php 
    print("name :");
    echo $_GET["name"];
    echo "<br>";
    print("age :"); 
    echo $_GET ["age"];
    ?>

</body>
</html>