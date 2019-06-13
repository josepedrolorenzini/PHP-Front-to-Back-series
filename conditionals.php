<?php
    /*
        ==
        ===
        < 
        >
        <=
        >=
        !=
        !==
    */

$num = 5;

if($num == '5') # true

if($num === '5') # false


if($num == '5'){
    echo 'Dis true';
} else {
    echo 'Dis false';
};


//Nested ifs
    if($num > 4) {
        if($num < 10) {
            echo 'nested ifs';
        }
    }


//Local Operators
    and &&
    or ||
    xor XOR # one true but not both

//Switches

$fav = 'pink';

switch($fav) {
    case 'red':
        echo "fav is red";
        break;
    case 'blue':
        echo "fav is blue";
        break;
    case 'green':
        echo "fav is green";
        break;
    default: 
        echo "fav is not known";
};

?>