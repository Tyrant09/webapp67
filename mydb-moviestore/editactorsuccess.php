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
        $sql_update="UPDATE actors SET FirstName='$_POST[FirstName]',LastName='$_POST[LastName]' ,BirthDate='$_POST[BirthDate]' ,Nationality='$_POST[Nationality]' ,AwardsCount='$_POST[AwardsCount]' WHERE ActorID='$_POST[ActorID]' ";

        $result= $conn->query($sql_update);

        if(!$result) {
            die("Error God Damn it : ". $conn->error);
        } else {

        echo "Edit Success <br>";
        header("refresh: 1; url=actors.php");
        }

    ?>

</body>
</html>