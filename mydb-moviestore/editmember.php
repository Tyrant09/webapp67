<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
    <?php
        if(!isset($_GET['MemberID'])){
            header("refresh: 0; url=member.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM members WHERE MemberID='$_GET[MemberID]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Edit Member Information</h1>
        <form method="post" action="editmembersuccess.php">
            <input type="hidden" name="MemberID" value="<?=$row['MemberID'];?>">

            <div class="mb-3">
                <label for="FirstName" class="form-label">ชื่อ</label>
                <input type="text" name="FirstName" id="FirstName" class="form-control" value="<?=$row['FirstName'];?>" required />
            </div>

            <div class="mb-3">
                <label for="LastName" class="form-label">นามสกุล</label>
                <input type="text" name="LastName" id="LastName" class="form-control" value="<?=$row['LastName'];?>" required />
            </div>

            <div class="mb-3">
                <label for="Email" class="form-label">อีเมล</label>
                <input type="email" name="Email" id="Email" class="form-control" value="<?=$row['Email'];?>" required />
            </div>

            <div class="mb-3">
                <label for="PhoneNumber" class="form-label">เบอร์โทร</label>
                <input type="tel" name="PhoneNumber" id="PhoneNumber" class="form-control" value="<?=$row['PhoneNumber'];?>" required />
            </div>

            <div class="mb-3">
                <label for="JoinDate" class="form-label">วันที่เข้าร่วม</label>
                <input type="date" name="JoinDate" id="JoinDate" class="form-control" value="<?=$row['JoinDate'];?>" required />
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <a href='members.php' class='btn btn-secondary'>ย้อนกลับ</a>
            </div>
        </form>
    </div>
</body>
</html>
