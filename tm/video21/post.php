<?php
    require('db.php');

    // Create query
    $query = 'SELECT * FROM posts WHERE id =1';


    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $post = mysqli_fetch_all($result);
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
                <h1> <?phpecho $post['title']; ?></h1>
                <small>Created on <?php echo $post['created_at']; ?> by
                <?php echo $post['author']; ?></small>
                <p><?php echo $post['body']; ?></p>
            </div>
        </body>
    <html>