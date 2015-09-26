<?php
    #we are going to use the global variable session, so we start the session
    session_start();

    include('config/setup.php');

    if($_POST){
        $q="SELECT * FROM users WHERE username = '$_POST[username]' AND password = SHA1('$_POST[password]')";
        $r = mysqli_query($dbc,$q);

        if(mysqli_num_rows($r) == 1){
            #we store the users privilege along with the name, as we are going to need it
            $userRow = mysqli_fetch_assoc($r);
            $_SESSION['id']=$userRow['id'];
            $_SESSION['username']=$_POST['username'];
            #we leave it here in case we need it
            #$_SESSION['id'] = $row['id'];
            header('Location: index.php');
        }
    }


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login Page</title>
        <?php include('config/css.php');?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <!--It places the panel in the middle of the screen. the screen is divided to 12 parts, we skip the first four and we fill with the panel the other four.-->
                <div id="login-signup-panel" class="col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4">
                    <div id ="login-panel"class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Login</h3>
                        </div>
                        <div class="panel-body">
                            <form action="login.php" method="post" role="form">
                              <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                              </div>
                              <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                              </div>
                              <!--submit button is loading the url in the form action attribute after the submition-->
                              <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div><!--End of panel body-->
                    </div>
                 </div>
            </div>
        </div>
    </body>
</html>
