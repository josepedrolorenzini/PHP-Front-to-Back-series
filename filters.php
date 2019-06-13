<?php 

/* 
    FILTER_VALIDATE_BOOLEAN
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_REGEXP
    FILTER_VALIDATE_URL

    FILTER_SANITIZE_EMAIL
    FILTER_SANITIZE_ENCODED
    FILTER_SANITIZE_NUMBER_FLOAT
    FILTER_SANITIZE_NUMBER_IP
    FILTER_SANITIZE_SPECIAL_CHARS
    FILTER_SANITIZE_STRINGS
    FILTER_SANITIZE_URL
*/

//Check for posted data 
    if (filter_has_var(INPUT_POST, 'data')) {
        echo 'Data found';    
    } else {
        echo 'Data not found';    
    }


//validate email     
    if (filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];    
        
        //remove illegal characters
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';    
        } else {
            echo 'Not valid';    
        }
    };    

//validate integer
    $var = '23'; #is an int
    if(filter_var($var, FILTER_VALIDATE_INT)) {
        echo $var.' is an integer';
    } else {
        echo $var.' is not an integer';
    }

    $var = '32asdk44';
    var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT)); #gets rid of letters

//filter special charaters
    $var = '<script>alert(1)</script>';
    $output = filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
        echo $output;

//filter array - needs to pass through criteria
    $filters = array(
        'data' => FILTER_VALIDATE_EMAIL,
        'data2' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array(
                'min_range' => 1,
                'max_range' => 100,
            )
        )
    );

    print_r(filter_input_array(INPUT_POST, $filters));

    $arr = array(
        "name" => 'root tree',
        'age' => 32,
        'email' => 'root@gmail.com'
    );  

    $filters = array(
        "name" => array(
            'filter' => FILTER_CALLBACK,
            'options' => 'ucwords'
        ),
        'age' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array(
                'min_range' => 1,
                'max_range' => 120,
                )
            ),
        'email' => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters));


?> 

<!-- When method = POST, use INPUT_POST
when method = GET, use INPUT_GET -->
<form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Email</label>
    <input type="text" name='data'><br>
    <label>Int</label>
    <input type="text" name='data2'>
    <button type="submit">Submit</button>
</form>

