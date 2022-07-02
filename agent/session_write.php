<?php 

session_start();

        $_SESSION['user_id']    = $_POST['user_id'];
        $_SESSION['name']       = $_POST['name'];
        $_SESSION['user_type']  = $_POST['user_type'];
    
?>