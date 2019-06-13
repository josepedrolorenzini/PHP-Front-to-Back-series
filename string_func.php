<?php 
// substr()
    // $output = substr('Hello', 1);

//strlen()
    // $output = strlen('Hello World');

//strpos() - finds first occurence
    // $output = strpos('world', 'd');
    
// strrpos() - finds lastoccurence
    // $output = strrpos('world star', 's');
    
//trim() - gets rid of whitespace only at end of string
    // $output = trim('Hell o   ');

    // var_dump($output)
    
// strtoupper and strtolower
    // $output = strtoupper('oo there it goes into the dark');
    
// ucwords - first letter capitalize
    // $output = ucwords('yoo there my friend');

// str_replace();
    // $output = str_replace('2', '5', 'John has 2 fingers');
    
// is_string() - returns 1 or nothing
    // $output = 'Do';
    // echo is_string($output)

    // $values = [3, 'Test', true, 22.1, null, 0, '', " ", '3'];
    // foreach ($values as $val) {
    //     if (is_string($val)) {
    //         echo "$val is a string <br>";
    //     } else {
    //         echo "$val is not a string <br>";
    //     }
    // };

// gzcompress()
    $str = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci esse, ullam nihil dolor omnis dolores porro sint voluptate distinctio, vel maiores perspiciatis, nam fuga. Enim illo quidem cum ex consequuntur.
    Totam voluptatem iusto doloribus incidunt culpa deserunt. Dolor suscipit dolorum tempora quaerat id, quisquam quae nostrum ut sapiente quidem quos, dicta explicabo aliquam non maiores velit ullam soluta, molestias necessitatibus.
    Animi suscipit tempore ducimus quaerat corporis omnis labore laboriosam dolore facere tenetur consequatur veniam sit modi ea amet odit doloribus similique, possimus, reprehenderit, eum beatae ipsam aspernatur dolorum. Corporis, natus!';

    $output = gzcompress($str);

    echo gzuncompress($output);
    ?>