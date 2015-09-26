<?php
    
    include('config/setup.php');

    if(isset($_POST['username']) || isset($_POST['name']) || isset($_POST['last']) || isset($_POST['password']) || isset($_POST['email'])){

        if(!empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['last']) && !empty($_POST['password']) && !empty($_POST['email'])){
            //print_r($_POST);

            $username= mysqli_real_escape_string($dbc,$_POST['username']);
            $name = mysqli_real_escape_string($dbc,$_POST['name']);
            $last = mysqli_real_escape_string($dbc,$_POST['last']);
            $password=  mysqli_real_escape_string($dbc,$_POST['password']);
            $email= mysqli_real_escape_string($dbc,$_POST['email']);
            $phone = mysqli_real_escape_string($dbc,$_POST['phone']);
            $address= mysqli_real_escape_string($dbc,$_POST['address']);
        
            $q="INSERT INTO users (username,firstName, lastName,password,phone,address,privilege,email) VALUES('$username', '$name','$last',SHA1('$password'),'$phone', '$address', 3 ,'$email')";
            $r=mysqli_query($dbc,$q);

           // print_r($username);

            //start the login session right after signing up
            session_start();

            $query="SELECT * FROM users WHERE username = '$username' AND password = SHA1('$password')";
            $result = mysqli_query($dbc,$query);
            if(mysqli_num_rows($result) == 1){

                
                $userRow = mysqli_fetch_assoc($result);

                $_SESSION['id']=$userRow['id'];
                $_SESSION['username']=$_POST['username'];
                print_r($_SESSION);
                //echo "lala";
                
            }
            //echo mysqli_num_rows($result);
            header('Location: index.php');

        }else{
        
            $message="Please enter all the obligatory fields.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sign Up Page</title>
        <?php include('config/css.php');?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <!--It places the panel in the middle of the screen. the screen is divided to 12 parts, we skip the first four and we fill with the panel the other four.-->
                <div id="login-signup-panel" class ="col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4">
                    <?php //print_r($_SESSION);
                           print_r($userRow);
                           //print_r($_POST);?>
                    <!--Alert-->    
                    <?php  if(!empty($message)) {?>
                        <div class="alert alert-danger" role="alert"> <p>Please enter all the obligatory fields.</p></div>
                    <?php } ?>

                    <div id ="login-panel"class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Sign up</h3>
                        </div>
                        <div class="panel-body">
                            <form action="signup.php" method="post" role="form">
                              <div id="form-start" class ="form-group">
                                    <label for="username">username*</label>
                                    <input type="text" class="form-control" id="username" name="username"  placeholder ="UserName">
                              </div>
                              <div class="form-group">
                                    <label for="name">Name*</label>
                                    <input type="text" class="form-control" id="name" name="name"  placeholder ="Name">
                              </div>
                              <div class="form-group">
                                    <label for="last">Last Name*</label>
                                    <input type="text" class="form-control" id="last" name="last"  placeholder ="Last Name">
                              </div>
                              <div class="form-group">
                                    <label for="password">Password*</label>
                                    <input type="password" class="form-control" id="password" name="password"  placeholder ="Password">
                              </div>
                              <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone"  placeholder ="Phone" maxlength="10">
                              </div>
                              <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"  placeholder ="Address">
                              </div>
                              <div class="form-group">
                                    <label for="email">Email*</label>
                                    <input type="text" class="form-control" id="email" name="email"  placeholder ="Email">
                              </div>
                              <small>* obligatory fields</small>
                              <!--submit button is loading the url in the form action attribute after the submition-->
                              <button type="submit" class="btn btn-default">Submit</button>
                              <a href="signup.php" class="btn btn-info" role="button">Clear</a>
                            </form>
                        </div><!--End of panel body-->
                    </div>
                 </div>
            </div>
        </div>
    </body>
</html>
