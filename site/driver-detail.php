<?php

require 'database.php';

$sql = "SELECT * FROM drivers";

$result = mysqli_query($conn, $sql);

$driver = mysqli_fetch_assoc($result);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>
        <?php echo $driver["driverRef"] ?>
    </h1>
    <h1>
        <?php echo $driver["forename"] ?>
    </h1>
    <h1>
        <?php echo $driver["surname"] ?>
    </h1>
    <h1>
        <?php echo $driver["nationality"] ?>
    </h1>
    <h1>
        <?php echo $driver["dob"] ?>
    </h1>

</body>

</html>