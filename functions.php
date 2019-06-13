<?php
// block of code that can be repeatedly called

    function simpleFunction(){
        echo 'Hi';
    };

// simpleFunction();


    function sayHello($name = 'there'){
        echo "Hi $name";
    };

    sayHello();


    function addNo($num1, $num2) {
        return $num1 + $num2;
    };

    echo addNo(1,5);

// by reference
    $num3 = 10;

    function add5($num){
        $num += 5;
    };
    
    function add10(&$num){
        $num += 10;
    };

    add5($num3);
    echo "val = $num3<br>";
    
    add10($num3);
    echo "val = $num3<br>";
?>