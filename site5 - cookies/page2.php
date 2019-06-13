<?php 
//update cookie
    setcookie('username', 'frank', time()+(86400 * 30));
//delete cookie - set to an hour ago
    setcookie('username', 'frank', time()-3600);


    if(count($_COOKIE) > 0) {
        echo 'There are '.count($_COOKIE).' cookies saved<br>';
    } else {
        echo 'No cookies saved<br>';
    }

//check if cookie is set
    if(isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
        echo "Welcome $username";
    } else {
        echo 'Please try login again';
    };

    
?>