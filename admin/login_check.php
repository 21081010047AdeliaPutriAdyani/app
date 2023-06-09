<?php 

    if(!isset($_SESSION['user'])) 
    {
        $_SESSION['no-login-message'] = "<div class='error text-center'>Silahkan Login Untuk Masuk Kehalaman Admin.</div>";
        header('location:'.SITEURL.'admin/login.php');
    }

?>