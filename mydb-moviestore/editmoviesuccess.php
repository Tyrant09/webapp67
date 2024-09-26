<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is webpage show editing data</title>
</head>
<body>
    <?php
        require 'conn.php';
        $sql_update="UPDATE movies SET Title='$_POST[Title]',Genre='$_POST[Genre]' ,ReleaseYear='$_POST[ReleaseYear]' ,Price='$_POST[Price]' ,StockQuantity='$_POST[StockQuantity]' WHERE MovieID='$_POST[MovieID]' ";

        $result= $conn->query($sql_update);

        if(!$result) {
            die("Error God Damn it : ". $conn->error);
        } else {

        echo "Edit Success <br>";
        header("refresh: 1; url=movies.php");
        }

    ?>

</body>
</html>