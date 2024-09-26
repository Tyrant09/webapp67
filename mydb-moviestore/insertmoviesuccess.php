<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'conn.php';
        $sql_update="INSERT INTO movies(MovieID,Title,Genre,ReleaseYear,Price,StockQuantity) 
                     VALUES('$_POST[MovieID]',
                            '$_POST[Title]',
                            '$_POST[Genre]',
                            '$_POST[ReleaseYear]',
                            '$_POST[Price]',
                            '$_POST[StockQuantity]')";

        $result= $conn->query($sql_update);

        if(!$result) {
            die("Error God Damn it : ". $conn->error);
        } else {

        echo "Insert Success <br>";
        header("refresh: 1; url=movies.php");
        }
    ?> 
</body>
</html>