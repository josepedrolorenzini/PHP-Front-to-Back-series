<?php 
    require('config/config.php');
    require('config/connect.php');

    //check for submit 
    if(isset($_POST['submit'])) {
        //get form data
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        //create mysql query to send data to db
        $query = "INSERT INTO post(title, author, body) VALUES('$title', '$author', '$body')";

        //if successful, redirect to root
        if(mysqli_query($conn, $query)){ 
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
?>

<?php include('inc/header.php'); ?>

    <div class="container">
        <h1>Create post</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name='title' class='form-control'>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name='author' class='form-control'>
            </div>
            <div class="form-group">
                <label for="body">Post</label>
                <textarea name='body' class='form-control'></textarea>
            </div>
            <input name='submit'class='btn btn-sm btn-dark' type='submit' value='Submit'>
        </form>
    </div>

<?php include('inc/footer.php'); ?>
