
<?php
    #when the user enters the admin/index.php page, we first check whether there is a variable in the $_SESSION['username'] and if not, we send him to the login page.
    #start the session:
    session_start();

    # isset function determines if a variable is set and is not NULL. Returns true if not null, false if null. here we say that if the $SESSION['username'] is null go to the destination we define
    if(!isset($_SESSION['username'])){
        header('Location:login.php');
    }

?>




<?php
  include('config/setup.php');
    
  include ('functions/data.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Piazza Afrodita/Admin Page</title>
        <!--Include the css.php file-->
        <?php include('config/css.php');?>
    </head>

    <body>



        <div class="container">
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li <?php if($page=='dashboard')echo 'class="active"'; ?>><a href="?page=dashboard">Dashboard</a></li>
                    <li <?php if($page=='users')echo 'class="active"'; ?>><a href="?page=users">Users</a></li>
                    <li <?php if($page=='news')echo 'class="active"'; ?>><a href="?page=news">News</a></li>
                    <li <?php if($page=='menu')echo 'class="active"'; ?>><a href="?page=menu">Menu</a></li>
                    <li <?php if($page=='reservation')echo 'class="active"'; ?>><a href="?page=reservation">Reservation</a></li>
                    <li <?php if($page=='order')echo 'class="active"'; ?>><a href="?page=order">Order</a></li>
                    <li <?php if($page=='gallery')echo 'class="active"'; ?>><a href="?page=gallery">Gallery</a></li>
                    <li <?php if($page=='about-us')echo 'class="active"'; ?>><a href="?page=about-us">About Us</a></li>
                    <li <?php if($page=='contact')echo 'class="active"'; ?>><a href="?page=contact">Contact</a></li>
                </ul>
        
                <!--importan helper class in bootstrap. floats an element to the left or right-->
                <div class="pull-right">
                
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><?php echo $_SESSION['username'] ?> <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="logout.php">Logout</a></li>
                            <!--<li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>-->
                          </ul>
                        </li>
            
                    </ul>
                </div>
            </nav>