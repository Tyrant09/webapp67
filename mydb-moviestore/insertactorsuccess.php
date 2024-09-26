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
        $sql_update="INSERT INTO actors(ActorID,FirstName,LastName,BirthDate,Nationality,AwardsCount) 
                     VALUES('$_POST[ActorID]',
                            '$_POST[FirstName]',
                            '$_POST[LastName]',
                            '$_POST[BirthDate]',
                            '$_POST[Nationality]',
                            '$_POST[AwardsCount]')";

        $result= $conn->query($sql_update);

        if(!$result) {
            die("Error God Damn it : ". $conn->error);
        } else {

        echo "Insert Success <br>";
        header("refresh: 1; url=actors.php");
        }
    ?> 
</body>
</html>