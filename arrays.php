<?php
// Array holds multiple values
/*
        Indexed
        Associative
        Multidimensional
    */

//Indexed
    $people = array('JJ', 'Jez', 'Jaz');
    $num = array(1, 44, 282);
    $car = ['Honda', 'Ford'];
//Add to array
    $car[2] = 'Toy';
    $car[] = 'GM';
// print_r($car);

//debug
var_dump($car);

//Associative
    $person = array('brad' => 35, 'bret' => 24);
    $person['ben'] = 33;
    //Add to array
    // echo $person['ben'];

//Multidimensional
$cars = array(
    array('Honda', 20, 5),
    array('Lambo', 10, 1),
    array('Nissan', 5, 9),
);

echo $cars[2][1];


?>