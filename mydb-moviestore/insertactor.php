<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลนักแสดง</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
    <div class="container mt-5">
        <h1 class="text-center mb-4">เพิ่มข้อมูลนักแสดง</h1>
        <form method="post" action="insertactorsuccess.php">
            <div class="form-group">
                <label for="ActorID">รหัสดารา</label>
                <input type="text" name="ActorID" id="ActorID" class="form-control" required>
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
                <label for="BirthDate">วันเกิดดารา</label>
                <input type="date" name="BirthDate" id="BirthDate" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Nationality">สัญชาติ</label>
                <input type="text" name="Nationality" id="Nationality" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="AwardsCount">จำนวนรางวัล</label>
                <input type="number" name="AwardsCount" id="AwardsCount" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <a href="actors.php" class="btn btn-secondary">ย้อนกลับ</a>
            </div>
        </form>
    </div>
</body>
</html>
