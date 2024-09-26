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
        $sql_update="UPDATE members SET FirstName='$_POST[FirstName]',LastName='$_POST[LastName]' ,Email='$_POST[Email]' ,PhoneNumber='$_POST[PhoneNumber]' WHERE MemberID='$_POST[MemberID]' ";

        $result= $conn->query($sql_update);

        if(!$result) {
            die("Error God Damn it : ". $conn->error);
        } else {

        echo "Edit Success <br>";
        header("refresh: 1; url=members.php");
        }

    ?>

</body>
</html>