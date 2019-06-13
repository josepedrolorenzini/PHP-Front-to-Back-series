<?php 

$user = [
    'name' => 'Brad',
    'email' => 'test@gmail.com',
    'test' => 25
];

$user = serialize($user);

setcookie('user', $user, time()+3600);

$output = unserialize($_COOKIE['user']);

echo $output['name']."<br>";
print_r($output);

?>