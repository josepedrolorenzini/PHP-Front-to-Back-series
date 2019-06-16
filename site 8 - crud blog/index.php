<?php 
    require('config/config.php');
    require('config/connect.php');

    //Create mySql query script
    $query = 'SELECT * FROM post ORDER BY created_at DESC';

    //Get results
    $result = mysqli_query($conn, $query);

    //Fetch data to an associative array
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    # var_dump($posts); check output received

    //Free result from memory
    mysqli_free_result($result);

    //Close connection
    mysqli_close($conn);
?>

<?php include('inc/header.php'); ?>

    <div class="container">
        <h1>Posts</h1>
        <?php foreach ($posts as $post): ?>
            <div class='well'>
                <h3><?php echo $post['title']; ?></h3>
                <p><?php echo $post['body']; ?>
                    <a class='btn btn-primary btn-sm' href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">See more</a>
                </p>
                <small>Created at <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
            </div>
        <?php endforeach; ?>
    </div>

<?php include('inc/footer.php'); ?>
