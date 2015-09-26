<?php
    
    include('../config/setup.php');
    $id = $_GET['id'];

    if($_POST['action']=="delete"){

        $q="DELETE FROM users WHERE id = $id";
        $r = mysqli_query($dbc,$q);


    }if($_POST['action'] == "update"){


            $username=mysqli_real_escape_string($dbc,$_POST['username']);
            $name=mysqli_real_escape_string($dbc,$_POST['name']);
            $last=mysqli_real_escape_string($dbc,$_POST['last']);
            $password=SHA1($_POST['password']);
            $phone=mysqli_real_escape_string($dbc,$_POST['phone']);
            $address=mysqli_real_escape_string($dbc,$_POST['address']);
            $email=mysqli_real_escape_string($dbc,$_POST['email']);
            $privilege = $_POST['privilege'];


            $q="UPDATE users SET username='$username',firstName = '$name',lastName = '$last' ,password='$password', phone = '$phone' ,address= '$address' ,privilege = $privilege ,email = '$email' WHERE id = $id";
            $r = mysqli_query($dbc,$q);

            /*debugging*/
            echo mysqli_error($dbc);
            echo $q;
    }
?>

