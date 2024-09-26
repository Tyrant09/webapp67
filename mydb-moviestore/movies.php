<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
    <div class="container mt-4">
        <h1 class="text-center mb-4">Movies Information</h1>

        <?php
            require 'conn.php';
            $sql = "SELECT * FROM movies";
            $result = $conn->query($sql);
            if(!$result){
                die("Error: " . $conn->error);
            }
        ?>

        <table class="table table-secondary table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>รหัสภาพยนตร์</th>
                    <th>ชื่อภาพยนตร์</th>
                    <th>ประเภท</th>
                    <th>ปี ค.ศ.ที่ออกฉาย</th>
                    <th>ราคา</th>
                    <th>จำนวนในสต็อก</th>
                    <th>ธุรกรรม</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["MovieID"] . "</td>
                                    <td>" . $row["Title"] . "</td>
                                    <td>" . $row["Genre"] . "</td>
                                    <td>" . $row["ReleaseYear"] . "</td>
                                    <td>" . $row["Price"] . "</td>
                                    <td>" . $row["StockQuantity"] . "</td>
                                    <td>
                                        <a href='editmovie.php?MovieID=" . $row["MovieID"] . "' class='btn btn-sm btn-warning'>Edit</a>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7' class='text-center'>No results found</td></tr>";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>

        <div class="text-center mt-4">
            <a href='insertmovie.php' class='btn btn-primary'>Insert New Movie</a>
        </div>

        <div class="text-center mt-3">
            <a href='mainmenu.php' class='btn btn-secondary'>Back to Main Menu</a>
        </div>
    </div>
</body>
</html>
