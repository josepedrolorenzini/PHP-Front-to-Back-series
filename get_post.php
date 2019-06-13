<?php 
//GET
    if(isset($_GET['name'])){
        //htmlentities prevents script tags from running in client inputs
        $name = htmlentities($_GET['name']);
        echo $name;
    }
    
//POST - data sent through header not url
    if(isset($_POST['name'])){
        $name = htmlentities($_POST['name']);
        echo $name;
    }

//REQUEST - not used very often   
    if(isset($_REQUEST['name'])){
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <form method='POST' action='get_post.php'>
        <div>
            <label for="name">Name</label><br>
            <input type="text" name='name'>
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="text" name='email'>
        </div>
        <input type="submit" value='Submit'>
    </form>
    <ul>
        <li><a href="get_post.php?name=Ben">Ben</a></li>
        <li><a href="get_post.php?name=Lin">Lin</a></li>
    </ul>
    <h1>
        <?php echo "{$name}'s Profile" ?>
    </h1>


</body>
</html>