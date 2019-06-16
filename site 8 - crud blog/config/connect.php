<?php 
    include 'db.php';

    //Create connection
    $conn = mysqli_connect('localhost', $DBUSER, $DBPASSWORD, 'phpblog');

    //Check connection
    if(mysqli_connect_errno()){
        echo 'Failed to connect to mySQL '. mysqli_connect_errno();
    }
?>