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
        $sql_update="INSERT INTO members(MemberID,FirstName,LastName,Email,PhoneNumber,JoinDate) 
                     VALUES('$_POST[MemberID]',
                            '$_POST[FirstName]',
                            '$_POST[LastName]',
                            '$_POST[Email]',
                            '$_POST[PhoneNumber]',
                            '$_POST[JoinDate]')";

        $result= $conn->query($sql_update);

        if(!$result) {
            die("Error God Damn it : ". $conn->error);
        } else {

        echo "Insert Success <br>";
        header("refresh: 1; url=members.php");
        }
    ?> 
</body>
</html>