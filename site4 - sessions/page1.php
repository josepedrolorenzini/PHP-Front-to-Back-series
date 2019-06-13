<?php 

    if (isset($_POST['submit'])) {
        //put into session variables;
        session_start(); 
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        //redirect from php
        header('Location: page2.php');
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <input name='name' placeholder='Enter name' type="text"><br>
        <input name='email' placeholder='Enter email' type="text"><br>
        <input name='submit' value='Submit' type="submit"><br>
    </form>
</body>
</html>