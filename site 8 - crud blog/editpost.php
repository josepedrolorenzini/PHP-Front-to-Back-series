<?php 
    require('config/config.php');
    require('config/connect.php');
    
    //Resubmit to DB
    if(isset($_POST['submit'])) {
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        
        $query = "UPDATE post SET 
                    title='$title', 
                    author='$author', 
                    body='$body'
                  WHERE id = {$update_id}";
        
        if(mysqli_query($conn, $query)){ 
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
    
    //Retrieve post in DB
    $id = mysqli_real_escape_string($conn, $_GET['id']);    
    $query = 'SELECT * FROM post WHERE id = '.$id;
    $result = mysqli_query($conn, $query);
    $post = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);

    ?>

<?php include('inc/header.php'); ?>

    <div class="container">
        <h1>Edit post</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name='title' class='form-control' value='<?php echo $post['title']; ?>'>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name='author' class='form-control' value='<?php echo $post['author']; ?>'>
            </div>
            <div class="form-group">
                <label for="body">Post</label>
                <textarea name='body' class='form-control'><?php echo $post['body']; ?></textarea>
            </div>
            <input name='submit'class='btn btn-sm btn-dark' type='submit' value='Submit'>
            <input type="hidden" name="update_id" value='<?php echo $post['id']; ?>'>
        </form>
    </div>

<?php include('inc/footer.php'); ?>
