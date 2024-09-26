<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
    <div class="container mt-4">
        <h1 class="text-center mb-4">Members Information</h1>

        <?php
            require 'conn.php';
            $sql = "SELECT * FROM members";
            $result = $conn->query($sql);
            if(!$result){
                die("Error: " . $conn->error);
            }
        ?>

        <table class="table table-secondary table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>รหัสสมาชิก</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>อีเมล</th>
                    <th>เบอร์โทร</th>
                    <th>วันที่เข้าร่วม</th>
                    <th>ธุรกรรม</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["MemberID"] . "</td>
                                    <td>" . $row["FirstName"] . " " . $row["LastName"] . "</td>
                                    <td>" . $row["Email"] . "</td>
                                    <td>" . $row["PhoneNumber"] . "</td>
                                    <td>" . $row["JoinDate"] . "</td>
                                    <td>
                                        <a href='editmember.php?MemberID=" . $row["MemberID"] . "' class='btn btn-sm btn-warning'>Edit</a>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center'>No results found</td></tr>";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>

        <div class="text-center mt-4">
            <a href='insertmember.php' class='btn btn-primary'>Insert New Member</a>
        </div>

        <div class="text-center mt-3">
            <a href='mainmenu.php' class='btn btn-secondary'>Back to Main Menu</a>
        </div>
    </div>
</body>
</html>
