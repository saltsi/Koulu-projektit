<?php 
    // logout
  session_start();
  unset($_SESSION);
  session_destroy();
  session_write_close();
  header('Location: login.php');
 die;
?> 