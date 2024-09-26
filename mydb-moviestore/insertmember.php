<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
    <div class="container mt-5">
        <h1 class="text-center mb-4">เพิ่มสมาชิก</h1>
        <form method="post" action="insertmembersuccess.php">
            <div class="form-group">
                <label for="MemberID">รหัสสมาชิก</label>
                <input type="text" name="MemberID" id="MemberID" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="FirstName">ชื่อ</label>
                <input type="text" name="FirstName" id="FirstName" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="LastName">นามสกุล</label>
                <input type="text" name="LastName" id="LastName" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Email">อีเมล</label>
                <input type="email" name="Email" id="Email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="PhoneNumber">เบอร์โทร</label>
                <input type="tel" name="PhoneNumber" id="PhoneNumber" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="JoinDate">วันที่เข้าร่วม</label>
                <input type="date" name="JoinDate" id="JoinDate" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <a href="members.php" class="btn btn-secondary">ย้อนกลับ</a>
            </div>
        </form>
    </div>
</body>
</html>
