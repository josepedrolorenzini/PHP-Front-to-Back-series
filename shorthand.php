<?php 
    $loggedIn = true;
    $arr = [1,2,3,4,5];

//Ternary operator
    // echo ($loggedIn) ? 'Logged In' : 'Not Logged in';

    // $isRegistered = ($loggedIn == true) ? true : false;
    
    // $age = 20;
    // $score = 5;

    // echo 'Your score is '.($score > 10 ? (
    //     $age > 10 ? 'Average' : 'Exceptional'
    // ) : (
    //     $age > 10 ? 'Horrible' : 'Average'
    // ));
    ?>
    
    <div>
        <?php if($loggedIn) { ?>
            <h1>Welcome User</h1>
        <?php } else {?>
            <h1>Please login</h1>
        <?php } ?>
    </div>

    <div>
    <?php if($loggedIn): ?>
        <h1>Welcome User</h1>
        <?php else: ?>
        <h1>Please login</h1>
        <?php endif; ?>
    </div>


    <div>
    <?php foreach ($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
    </div>