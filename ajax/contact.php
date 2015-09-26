<?php
      //gets a connection to the database
      include('../config/setup.php');

      $name =  mysqli_real_escape_string($dbc,$_POST['name']);
      $last = mysqli_real_escape_string($dbc,$_POST['last']);
      $phone = mysqli_real_escape_string($dbc,$_POST['phone']);
      $email = mysqli_real_escape_string($dbc,$_POST['email']);
      $message = mysqli_real_escape_string($dbc,$_POST['message']);

      $word = mysqli_real_escape_string($dbc, $_POST['word']);

      $q = "INSERT INTO contact (name,last,phone,email,message) VALUES ('$name','$last','$phone','$email','$message')";
      $r = mysqli_query($dbc,$q);

     




?>

