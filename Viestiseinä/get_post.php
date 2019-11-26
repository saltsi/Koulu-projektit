<?php
    
    if(isset($_GET['name'])){
        //print_r($_GET);
        $name = htmlentities($_GET['name']);
        //echo $name;
    }
    /*
    if(isset($_POST['name'])){
        print_r($_GET);
        $name = htmlentities($_POST['name']);
        echo $name;
    }
    

    if(isset($_REQUEST['name'])){
        //print_r($_REQUEST);
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    }
    */

    echo $_SERVER['QUERY_STRING'];


    // create connection
$conn = mysqli_connect('localhost', 'root', '', 'phpblog');

// check connection
if(mysqli_connect_errno()){

// connection failed
    echo 'Failed to conect to MySQL '. mysqli_connect_errno();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.css">
</head>
<body>
    <form method="POST" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="submit">
    </form>

    <ul>
        <li>
            <a href="get_post.php?name=Brad">Brad</a>
        </li>
        <li>
            <a href="get_post.php?name=Steve">Steve</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>