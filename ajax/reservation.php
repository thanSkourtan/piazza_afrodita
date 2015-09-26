<?php
    

//gets a connection to the database
      include('../config/setup.php');


      $name =  mysqli_real_escape_string($dbc,$_POST['name']);
      $phone = mysqli_real_escape_string($dbc,$_POST['phone']);
      $email = mysqli_real_escape_string($dbc,$_POST['email']);
      $date = mysqli_real_escape_string($dbc,$_POST['date']);
      $time = mysqli_real_escape_string($dbc,$_POST['time']);
      $noOfGuests = mysqli_real_escape_string($dbc,$_POST['noOfGuests']);
      $special = mysqli_real_escape_string($dbc,$_POST['special']);

    

      $q = "INSERT INTO reservation (name,phone,email,date,time,noOfGuests,special) VALUES ('$name','$phone','$email','$date','$time','$noOfGuests','$special')";
      $r = mysqli_query($dbc,$q);
      
?>

