<?php 
    if(isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);
        $email = htmlentities($_POST['email']);

        setcookie('username', $username, time()+3600);

        header('Location: page2.php'); #redirects after submit
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <input name='username' placeholder='Enter username' type="text"><br>
        <input name='email' placeholder='Enter email' type="text"><br>
        <input name='submit' value='Submit' type="submit"><br>
    </form>
</body>
</html>