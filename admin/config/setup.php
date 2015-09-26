<?php
    
    #we mainly using it so that it does not report the undefined variables, which get defined during the execution of the various commands of the page.
    error_reporting(0);
  //setup a connection to the database
    $dbc = mysqli_connect('localhost','thdot','password','afrodita') or die('Could not connect to the database because: '.mysqli_connect_error());
    

    if(isset($_GET['page'])){
        $page = $_GET['page'];

    }else{
        $page='dashboard';
    }
    
    

?>

