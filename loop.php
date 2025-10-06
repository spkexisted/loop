<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 1;
    do {
        echo $x;
        $x++;
    } while ($x <= 10)
    ?>

 <br>

    <?php
    for ($x = 1; $x <= 10; $x++)
        echo " $x <br>"
    ?>

<br>

    <?php
    $x = 1;
    while ($x <= 10) {
        echo $x;
        $x++;
    }
    ?>  
</body>
</html>