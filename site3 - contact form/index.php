<?php
//Message vars
$msg = '';
$msgClass = '';

//check for submit
    if(filter_has_var(INPUT_POST, 'submit')) {
        //get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //check validation
        if(!empty($name) && !empty($email) && !empty($message)) {
            //passed

            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                //fail
                $msg = 'Please enter valid email';
                $msgClass = 'alert-danger';
            } else {
                //passed
                //recipient email
                $toEmail = 'jump3r@mailbox.org';
                $subject = 'Contact request from '.$name;
                $body = 
                '<h4>name:</h4> <p>'.$name.'</p>
                <h4>email</h4>: <p>'.$email.'</p>
                <h4>message</h4>: <p>'.$message.'</p>';

                //set headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";

                //additional headers
                $headers .= "From: " .$name. "<".$email.">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)) {
                    $msg = "Your email has been sent";
                    $msgClass = 'alert-success';
                } else {
                    $msg = "Please try send the message again";
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            //failed
            $msg = 'Please fill in fields';
            $msgClass = 'alert-danger';
        }
    };


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default bg-dark">
        <div class="container">
            <div class="navbar-header">
            <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>

<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name='name' value ='<?php echo isset($_POST['name']) ? $name : ''; ?>' class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name='email' value ="<?php echo isset($_POST['email']) ? $email : ''; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input type="text" name='message' value ="<?php echo isset($_POST['message']) ? $message : ''; ?>" class="form-control">
        </div>
        <button name='submit' type='submit' class='btn btn-primary'>Submit</button>
    </form>
    <br>
<?php if($msg != ''): ?>
    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
<?php endif; ?>
</div>
</body>
</html>

