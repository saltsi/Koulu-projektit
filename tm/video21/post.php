<?php
    require('db.php');

    // get ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create query
    $query = 'SELECT * FROM posts WHERE id = '.$id;


    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $post = mysqli_fetch_all($result);
    var_dump($post);

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
                <a href="/" class="btn btn-d">Back</a>
                <h1> <?phpecho $post['title']; ?></h1>
                <small>Created on <?php echo $post['created_at']; ?> by <?php
                    echo $post['author']; ?></small>
                <p><?php echo $post['body']; ?></p>
            </div>
        </body>
    <html>