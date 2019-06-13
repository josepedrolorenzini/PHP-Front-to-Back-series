<?php

//for loop
// @params - init, condition, incre
for( $i = 0 ; $i < 10 ; $i++ ){
    echo $i;
    echo ' ';
};

//while
$i = 0;
while ($i < 10) {
    echo "$i <br>";
    $i += 2;
};


//do while
$i = 1;

do {
    echo "$i<br>";
    $i*=2;
} while ($i <= 20);


//for each loop
$people = ['bat', 'lit', 'dum'];

foreach ($people as $person) {
        echo $person;
    };
    
$people = ['bat' => 'gmail.com', 'lit' => 'hotmail.com', 'dum' => 'yahoo.com'];
    
foreach ($people as $person => $email) {
    echo "my name is $person and my email is $email<br>";
};

?>