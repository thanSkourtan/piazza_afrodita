<?php
    

      //gets a connection to the database
      include('../config/setup.php');

      //$lala =  mysqli_real_escape_string($dbc,$_POST['finalArray']);
      
      //$finalArray = mysqli_real_escape_string($dbc,$_POST['finalArray']);
      $name = mysqli_real_escape_string($dbc,$_POST['name']);
      $last = mysqli_real_escape_string($dbc,$_POST['last']);
      $phone = mysqli_real_escape_string($dbc,$_POST['phone']);
      $address= mysqli_real_escape_string($dbc,$_POST['address']);
      $totalPrice = mysqli_real_escape_string($dbc,$_POST['sum']);
      //$quantities = mysqli_real_escape_string($dbc,$_POST['quantityInputs']);
      
      //print_r($_POST);

      $data = json_decode(stripslashes($_POST['finalArray']));
      $quantities= json_decode(stripslashes($_POST['quantityInputs']));
      //print_r($data);

      $arrayData = "";
      foreach($data as $value){
          $arrayData .=$value.",";
      }

      $quantitiesData = "";
      foreach($quantities as $value){
          $quantitiesData .=$value.",";
      }



      //print_r($data[0]);
      //$lala =  $_POST['finalArray'];

      

     $q="INSERT INTO orders (quantities,TotalPrice,name,last,phone,menuIds,address) VALUES ('$quantitiesData','$totalPrice','$name','$last','$phone','$arrayData','$address')";
     $r= mysqli_query($dbc,$q);


     if($r){
           echo 'ok';

        }else{
           echo 'because: </p>'.mysqli_error($dbc);
            echo  '<p>'.$q.'</p>';
        }

?>

