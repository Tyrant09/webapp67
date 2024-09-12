<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Function Calls</title>
</head>
<body>
    <?php
        function seyHello(){
            echo "Hello PHP <br />";  
        }
        $function_holder = "seyHello";
        $function_holder();
    ?>
</body>
</html>