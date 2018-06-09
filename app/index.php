<?php $title = "LEMP (Docker) - Code with Don Peter";?>
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