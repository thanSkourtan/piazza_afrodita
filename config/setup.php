<?php
    error_reporting(0);
  //setup a connection to the database
    $dbc = mysqli_connect('localhost','thdot','password','afrodita') or die('Could not connect to the database because: '.mysqli_connect_error());
    

    #set the $page variable which will define tha navigation of the site.
    #if we don't set the page equal to 'home' when there is no value, the variable remains null and there is problem when parsing the page with no arguments.
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 'home';
    }

    


?>

