<?php
# $_SERVER SUPER GLOBAL

//Create server array
    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Doc root' => $_SERVER['DOCUMENT_ROOT'],
        'Current page' => $_SERVER['PHP_SELF'],
        'Server script name' =>  $_SERVER['SCRIPT_NAME'],
        "Absolute Path" => $_SERVER['SCRIPT_FILENAME']
    ];

    // print_r($server);

//Create client array
    $client = [
        'Client Server info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote port' => $_SERVER['REMOTE_PORT']
    ];

    // print_r($client);
?>
