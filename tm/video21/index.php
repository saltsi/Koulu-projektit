<?php 
// create connection
$conn = mysqli_connect('lovalhost', 'root', '123456', 'phpblog');

// check connection
if(mysqli_connect_errno()){
    // connection failed
    echo 'Failed to conect to MySQL '. mysqli_connect_errno();
}