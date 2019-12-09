<?php
    require('db.php');

    // Create query
    $query = 'SELECT * FROM posts';


    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    var_dump($posts);

    // Free Result
    mysqli_free_result($result);

    //Close Connection
    mysqli_close($conn);
    ?>

    <!DOCTYPE html>
        <html>
            <head>
                <title>PHP Blog</title>
                <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.css">
            </head>
        <body>
            <div class?"container">
            <h1> Posts</h1>
            <?php foreach($posts as $post) : ?>
                <div> class="well"
                    <h3><?php echo $post['title']; ?></h3>
                    <small>Created on <?php echo $post['created_at']; ?> by
                    <?php echo $post['author']; ?></small>
                    <p><?php echo $post['body']; ?></p>
                    <a class="btn btn-default" href="post.php?id=<?php
                        echo $post['id']; ?>">Read More</a>
                </div>
            <?php endforeach; ?>
            </div>
        </body>
    <html>