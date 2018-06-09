<?php
$title = "LEMP (Docker) - Code with Don Peter";
$host = "db"; // Database host               -> Same as service name in the docker-compose file
$dbname= "lemp-db"; // Database name         -> Set as an enviroment variable in the docker-compose file
$user = "lemp-user"; // Database user        -> Set as an enviroment variable in the docker-compose file
$pass = "lemp-pass"; // Database password    -> Set as an enviroment variable in the docker-compose file

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title?></title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1><?= $title?></h1>
    <p>This page is been server by Nginx in a docker container </p>
    <?php echo "According to PHP today's date and time is <strong>" . date("D jS M, Y h:i:sa")."</strong>"?>
</body>
</html>