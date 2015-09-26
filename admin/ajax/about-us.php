<?php
    

    include('../config/setup.php');

    $id= $_GET['id'];

     $q="DELETE FROM aboutus WHERE id = $id";
     $result = mysqli_query($dbc,$q);

?>

