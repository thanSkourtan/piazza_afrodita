

<?php 
    /*insert a new user*/
    if(isset($_POST['username'])){

        $username=mysqli_real_escape_string($dbc,$_POST['username']);
        $name=mysqli_real_escape_string($dbc,$_POST['name']);
        $last=mysqli_real_escape_string($dbc,$_POST['last']);
        $password=SHA1('$_POST[password]');
        $phone=mysqli_real_escape_string($dbc,$_POST['phone']);
        $address=mysqli_real_escape_string($dbc,$_POST['address']);
        $email=mysqli_real_escape_string($dbc,$_POST['email']);

        $privilege=(int)$_POST['optionsRadios'];




        $q="INSERT INTO users (username, firstName, lastName, password, phone, address,privilege, email) VALUES('$username','$name','$last','$password', '$phone','$address', '$privilege' , '$email')";
        $r=mysqli_query($dbc,$q);

     
        
    }


   #get all users data
   $result = get_user_data($dbc);

   if(isset($_GET['id'])){
       $userRow = get_single_user_data($dbc,$_GET['id']);
   }





?>


<div class="container">
    <h1 id="subpage-title">User Manager</h1>
    <div class="row">
        <div id="user-col-list-group" class="col-md-4 col-sm-4">
            <small>*There are 3 types of users. Admin, Operator and User.</small>
            <div id ="user-list-group" class="list-group">
                <?php #populates the group list
                    while($row = mysqli_fetch_assoc($result)){ ?>
                        <a id="user-row-id-<?php echo $row['id']; ?>" href ="?page=users&id=<?php echo $row['id']; ?>" class="list-group-item <?php if($_GET['id']==$row['id']) echo 'active'; ?>">
                           
                            <div class="row">
                                <div class="col-md-11 col-md-offset-1">
                                    <h4 id="user-col-username-id-<?php echo $row['id']; ?>" class ="list-group-item-heading"><?php echo $row['username']; ?></h4>
                                    <p id="user-col-role-id-<?php echo $row['id']; ?>" class="list-group-item-text"><b>Role: </b><?php echo show_privilege_level($row['privilege']) ; ?></p>
                                    <p id="user-col-name-id-<?php echo $row['id']; ?>" class="list-group-item-text"><b>Name: </b><?php echo $row['firstName']; ?></p>
                                    <p id="user-col-last-id-<?php echo $row['id']; ?>" class="list-group-item-text"><b>Last Name: </b><?php echo $row['lastName']; ?></p>
                                    <p id="user-col-phone-id-<?php echo $row['id']; ?>" class="list-group-item-text"><b>Phone: </b><?php echo $row['phone']; ?></p>
                                    <p id="user-col-address-id-<?php echo $row['id']; ?>" class="list-group-item-text"><b>Address: </b><?php echo $row['address']; ?></p>
                                    <p id="user-col-email-id-<?php echo $row['id']; ?>" class="list-group-item-text"><b>Email: </b><?php echo $row['email']; ?></p>
                                </div>
                                    
                               
                            </div>
                        </a>    
                <?php } ?>
            </div>
        </div>
            <div id="user-right-col" class="col-md-8 col-sm-8">

                <!--Alert!-->
                <?php if(isset($_GET['error']) && $_GET['error']==0){?>
                    <div class="alert alert-danger" role="alert"> <p>The user could not be inserted.</p></div>
                <?php } else if(isset($_GET['error']) && $_GET['error']==1){?>
                    <div class="alert alert-success" role="alert"> <p>The user was succesfully inserted.</p></div>
                <?php } ?>

                <?php if($r){?>
                    <div class="alert alert-success" role="alert"> <p>The user was succesfully inserted.</p></div>
                <?php } else if(isset($_GET['error']) && $_GET['error']==1){?>
                    <div class="alert alert-danger" role="alert"> <p>The user could not be inserted.</p></div>
                <?php } ?>

               
                <form action="?page=users" method="post" role="form">
                      <div id="form-start" class ="form-group">
                            <label for="username">username*</label>
                            <input type="text" class="form-control" id="username" name="username" value = "<?php echo $userRow['username']?>" placeholder ="UserName">
                      </div>
                      <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value = "<?php echo $userRow['firstName']?>" placeholder ="Name">
                      </div>
                      <div class="form-group">
                            <label for="last">Last Name</label>
                            <input type="text" class="form-control" id="last" name="last" value = "<?php echo $userRow['lastName']?>" placeholder ="Last Name">
                      </div>
                      <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value = "" placeholder ="Password">
                      </div>
                      <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value = "<?php echo $userRow['phone']?>" placeholder ="Phone">
                      </div>
                      <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value = "<?php echo $userRow['address']?>" placeholder ="Address">
                      </div>
                      <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value = "<?php echo $userRow['email']?>" placeholder ="Email">
                      </div>
                      <small>* obligatory fields</small>
                      <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="1"  <?php if($_SESSION['userPrivilege']!=1) echo 'disabled' ?> <?php if($userRow['privilege'] == 1) echo 'checked'; ?>>
                            Administrator
                        </label>
                      </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="2" <?php if($_SESSION['userPrivilege']!=1) echo 'disabled' ?> <?php if($userRow['privilege'] == 2) echo 'checked'; ?>>
                                Operator
                            </label>
                        </div>
                      <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="3" <?php if($userRow['privilege'] == 3) echo 'checked'; ?>>
                                User
                            </label>
                      </div>


                <button type="submit" name ="action" value="submit" class="btn btn-success">Submit New</button>

                <button id="users-update-button-<?php echo $userRow['id']; ?>" type="button" name ="action" value="update" class="users-update-button btn btn-warning" <?php if(!isset($_GET['id'])|| $_GET['id']==''|| $_SESSION['userPrivilege']!=1) echo 'disabled'; ?>>Update</button>

                <button  id="delete-btn-id-<?php echo $userRow['id']; ?>" type="button" name ="action" value="delete" class="users-delete-button btn btn-danger" <?php if(!isset($_GET['id'])|| $_GET['id']=='' || $_SESSION['userPrivilege']!=1) echo 'disabled'; ?>>Delete</button>

                <a href="?page=users" class="btn btn-info" role="button">Clear</a>

                </form>
            </div>
    </div>
</div>