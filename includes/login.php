<?php
session_start();

if (! empty($_POST) && $_POST['user'] === 'user' && $_POST['pass'] === '1234'){
    $_SESSION['logged_in'] = true;
    header('location: information.php');
}
else{
    ?>
    <form method="post">
        Username: <input name="user" type="text"><br>
        Password_ <input name="pass" type="password"><br><br>
        <input type="submit" value="submit">
    </form>

    <?php
}

