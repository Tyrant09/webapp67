<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มภาพยนตร์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
    <div class="container mt-5">
        <h1 class="text-center mb-4">เพิ่มข้อมูลภาพยนตร์</h1>
        <form method="post" action="insertmoviesuccess.php">
            <div class="form-group">
                <label for="MovieID">รหัสภาพยนตร์</label>
                <input type="text" name="MovieID" id="MovieID" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="Title">ชื่อภาพยนตร์</label>
                <input type="text" name="Title" id="Title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Genre">ประเภท</label>
                <input type="text" name="Genre" id="Genre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="ReleaseYear">ปี ค.ศ.ที่ออกฉาย</label>
                <input type="number" name="ReleaseYear" id="ReleaseYear" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Price">ราคา</label>
                <input type="text" name="Price" id="Price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="StockQuantity">จำนวนในสต็อก</label>
                <input type="number" name="StockQuantity" id="StockQuantity" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <a href="movies.php" class="btn btn-secondary">ย้อนกลับ</a>
            </div>
        </form>
    </div>
</body>
</html>
