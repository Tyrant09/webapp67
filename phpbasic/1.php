<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
    <?php
        echo "Hello PHP";
        echo "<br>";
        echo "This is my first time to write PHP langage";
        echo "<br>";
        echo "<br>";
        define("MINSIZE", 50);
        echo MINSIZE;
        echo "<br>";
        echo "This is value minsize => ", constant("MINSIZE");
    ?>
</body>
</html>