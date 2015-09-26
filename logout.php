<?php
    
    session_start();
    #cleans up the value
    unset($_SESSION['username']);

    header('Location: index.php');

?>

