<?php
session_start();
if (! empty($_SESSION['logged_in'])){
    ?>

    <?php include 'header.php'; include 'info.php'; include 'css/footer.php'?>

    <?php
}
else {
    echo 'You are not logged in. <a href="loginpage.php">Click here</a>to log in.';
}