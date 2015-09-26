<?php
    #when the user enters the admin/index.php page, we first check whether there is a variable in the $_SESSION['username'] and if not, we send him to the login page.
    #start the session:
    session_start();

    # isset function determines if a variable is set and is not NULL. Returns true if not null, false if null. here we say that if the $SESSION['username'] is null go to the destination we define
    /*if(!isset($_SESSION['username'])){
        header('Location:login.php');
    }*/

?>




<?php
  include('config/setup.php');
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Piazza Afrodita</title>
        <!--Include the css.php file-->
        <?php 
            include('config/css.php');
            include('functions/data.php');            
        ?>
    </head>
    <body>
        
        <!--Includes carousel, logo, navigation bar, login, signup form.-->
        <header>

            <!--Login buttons-->
            <div id="login-buttons">

                <div id="login-user-buttons<?php if(!isset($_SESSION['username'])) echo 'something'; ?>">
                <a href="login.php" class="btn btn-default" role="button">Log in</a>
                <a href="signup.php" class="btn btn-primary" role="button">Sign Up</a>
                </div>
               
                <div id="home-user-button<?php if(isset($_SESSION['username'])) echo 'something'; ?>" class ="btn-group">
                  <button type="button" id="header-drop-down-button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </div>



            </div>

            <?php include('template/navigation.php')?>
                     
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <!--the width of each image is set to 100% so that it fits exactly in the carousel-->
                  <img id="carousel-image1" src ="images/carnepesce.jpg" alt="image" width="100%">
                  <div class="carousel-caption">
                    <h3 class="first-logo">Eat. Drink. Lounge.</h3>
                    <p class="second-logo">Use your senses</p>
                  </div>
                </div><!--End item-->
                <div class="item">
                  <img id="carousel-image2" src="images/dolcicaffe.jpg" alt="image" width="100%">
                  <div class="carousel-caption">
                    <h3 class="first-logo">Experience our tastes</h3>
                    <p class="second-logo">It's time to relax</p>
                  </div>
                </div><!--End item-->
                <div class="item">
                  <img id="carousel-image3" src="images/pasta.jpg" alt="image" width="100%">
                  <div class="carousel-caption">
                    <h3 class="first-logo">Passing By?</h3>
                    <p class="second-logo">Give it a try</p>
                  </div>
                </div><!--End item-->
              </div><!--End carousel-inner-->

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        
        </header>