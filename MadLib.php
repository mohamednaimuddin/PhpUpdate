<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madlib game</title>
</head>
<body>
    <form action="MadLib.php" method="get">
        Color:<input type="text" name="color" ><br>
        Plular Noun:<input type="text" name="plural_noun" ><br>
        Celebrity :<input type="text" name="celebrity" ><br>
        <input type="submit">
    </form>
    <br><br>
    <?php  
    $color = $_GET["color"];
    $plural_noun = $_GET["plural_noun"];
    $celebrity = $_GET["celebrity"];

    echo "Roses are $color <br>" ;
    echo "$plural_noun are blue <br>";
    echo "i love $celebrity<br>"; 
    ?>
</body>
</html>