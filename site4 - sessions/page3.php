<?php 
session_start();

print_r($_SESSION);

$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest'; #check to avoid error
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not subscribed';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP SESSION</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>
    <a href='page4.php'>Go to page 4</a>
</body>
</html>