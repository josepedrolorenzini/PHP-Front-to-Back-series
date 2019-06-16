<?php 
    require('config/config.php');
    require('config/connect.php');

    //Delete section
    if(isset($_POST['delete'])) {
        $delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);

        $query = "DELETE FROM post WHERE id = {$delete_id}";
        
        if(mysqli_query($conn, $query)){ 
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        };
    };

    //Get ID of post <a> clicked on 
	$id = mysqli_real_escape_string($conn, $_GET['id']);
    #prefix security measure to escape unwanted chars

    $query = "SELECT * FROM post WHERE id = $id";
    $result = mysqli_query($conn, $query);

    //Turns one post into an assoc array
    $post = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

?>


<?php include('inc/header.php'); ?>

    <div class="container">
    <a href='<?php echo ROOT_URL; ?>'>Back</a>
    <h1><?php echo $post['title']; ?></h1>
        <p><?php echo $post['body']; ?></p>
        <small>Created at <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mr-auto" method='POST'>
        <input type="hidden" name="delete_id" value='<?php echo $post['id']; ?>'>
        <input type="submit" name='delete' value="Delete" class='btn btn-sm btn-danger'>
    </form>
    <a class='btn btn-sm btn-dark' href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>">Edit post</a>
    </div>

<?php include('inc/footer.php'); ?>
