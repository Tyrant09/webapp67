<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Actor Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
    <?php
        if(!isset($_GET['ActorID'])){
            header("refresh: 0; url=actors.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM actors WHERE ActorID='$_GET[ActorID]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    
    <div class="container mt-4">
        <h1 class="text-center mb-4">Edit Actor Information</h1>
        <form method="post" action="editactorsuccess.php">
            <input type="hidden" name="ActorID" value="<?=$row['ActorID'];?>">

            <div class="mb-3">
                <label for="ActorID" class="form-label">รหัสดารา</label>
                <input type="text" name="ActorID" id="ActorID" class="form-control" value="<?=$row['ActorID'];?>" readonly />
            </div>

            <div class="mb-3">
                <label for="FirstName" class="form-label">ชื่อ</label>
                <input type="text" name="FirstName" id="FirstName" class="form-control" value="<?=$row['FirstName'];?>" required />
            </div>

            <div class="mb-3">
                <label for="LastName" class="form-label">นามสกุล</label>
                <input type="text" name="LastName" id="LastName" class="form-control" value="<?=$row['LastName'];?>" required />
            </div>

            <div class="mb-3">
                <label for="BirthDate" class="form-label">วันเกิดดารา</label>
                <input type="date" name="BirthDate" id="BirthDate" class="form-control" value="<?=$row['BirthDate'];?>" required />
            </div>

            <div class="mb-3">
                <label for="Nationality" class="form-label">สัญชาติ</label>
                <input type="text" name="Nationality" id="Nationality" class="form-control" value="<?=$row['Nationality'];?>" required />
            </div>

            <div class="mb-3">
                <label for="AwardsCount" class="form-label">จำนวนรางวัล</label>
                <input type="text" name="AwardsCount" id="AwardsCount" class="form-control" value="<?=$row['AwardsCount'];?>" required />
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <a href='actors.php' class='btn btn-secondary'>ย้อนกลับ</a>
            </div>
        </form>
    </div>
</body>
</html>
