<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movie Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
    <?php
        if(!isset($_GET['MovieID'])){
            header("refresh: 0; url=movies.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM movies WHERE MovieID='$_GET[MovieID]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    
    <div class="container mt-4">
        <h1 class="text-center mb-4">Edit Movie Information</h1>
        <form method="post" action="editmoviesuccess.php">
            <input type="hidden" name="MovieID" value="<?=$row['MovieID'];?>">

            <div class="mb-3">
                <label for="MovieID" class="form-label">รหัสภาพยนตร์</label>
                <input type="text" name="MovieID" id="MovieID" class="form-control" value="<?=$row['MovieID'];?>" readonly />
            </div>

            <div class="mb-3">
                <label for="Title" class="form-label">ชื่อภาพยนตร์</label>
                <input type="text" name="Title" id="Title" class="form-control" value="<?=$row['Title'];?>" required />
            </div>

            <div class="mb-3">
                <label for="Genre" class="form-label">ประเภท</label>
                <input type="text" name="Genre" id="Genre" class="form-control" value="<?=$row['Genre'];?>" required />
            </div>

            <div class="mb-3">
                <label for="ReleaseYear" class="form-label">ปี ค.ศ.ที่ออกฉาย</label>
                <input type="number" name="ReleaseYear" id="ReleaseYear" class="form-control" value="<?=$row['ReleaseYear'];?>" required />
            </div>

            <div class="mb-3">
                <label for="Price" class="form-label">ราคา</label>
                <input type="text" name="Price" id="Price" class="form-control" value="<?=$row['Price'];?>" required />
            </div>

            <div class="mb-3">
                <label for="StockQuantity" class="form-label">จำนวนในสต็อก</label>
                <input type="text" name="StockQuantity" id="StockQuantity" class="form-control" value="<?=$row['StockQuantity'];?>" required />
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <a href="movies.php" class="btn btn-secondary">ย้อนกลับ</a>
            </div>
        </form>
    </div>
</body>
</html>
