<?php
    require('db.php');

    // Create query
    $query = 'SELECT * FROM posts';


    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $post = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Free Result
    mysqli_free_result($result);

    //Close Connection
    mysqli_close($conn);