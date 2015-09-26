<?php
    

    #for menu admin page, (almost) all the backendlogic is kept in this file
    include('config/setup.php');


    $target_dir = "../images/";


    if($_POST['action']=='delete'){
           
            $id= $_GET['id'];
            #we get the query below so as to delete the file from the server
            $query1 = "SELECT image FROM menu WHERE id = $id";
            $r1=mysqli_query($dbc,$query1);
            $row = mysqli_fetch_assoc($r1);

            $query2="DELETE FROM menu WHERE id = $id";
            $r2 = mysqli_query($dbc,$query2);

            #here we delete the file from server
            $target_file_delete = $target_dir.$row['image'];

            #two checks in order not to delete the folder. if the $row['image'] is empty then this is what will happen
            if($row['image']!=''){
                if(!is_dir($target_file_delete)){
                    unlink($target_file_delete);
                }
            }

            
        }else if($_POST['action']=='update'){


            $title=mysqli_real_escape_string($dbc,$_POST['title']);
            $body=mysqli_real_escape_string($dbc,$_POST['body']);
            $price=$_POST['price'];
            $category= $_POST['category'];


            $id= $_GET['id'];
            #update the word
            $q="UPDATE menu SET title='$title',body = '$body',price=$price ,categoryId=$category WHERE id = $id";
            $r = mysqli_query($dbc,$q);


            if($r){
            echo '<p>Page was '.$action.'!</p>';

            }else{
                echo '<p>Page could not be '.$action.' because: </p>'.mysqli_error($dbc);
                echo '<p>'.$q.'</p>';
            }

         }else{


        #part of code from http://www.w3schools.com/
        $filename = basename($_FILES["inputFile"]["name"]);
        $target_file = $target_dir.$filename;
        #get the word from the $_POST array
        //$title = mysqli_real_escape_string($dbc, $_POST['title']);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        // Check if image file is a actual image or fake image

        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["inputFile"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            //echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["inputFile"]["size"] > 500000) {
            //echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }


        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }


        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            header("Location:index.php?page=menu&error=0");
            //echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            #the move_uploaded_file does all the work
            if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $target_file)) {

                #returns an escaped string. Otherwise we would not be able to add strings with special characters in them
                $title=mysqli_real_escape_string($dbc, $_POST['title']);
                $body=mysqli_real_escape_string($dbc, $_POST['body']);
                $price = mysqli_real_escape_string($dbc,$_POST['price']);
                $categoryId = $_POST['category'];

                $q="INSERT INTO menu (title,body,image,price,categoryId) VALUES ('$title','$body','$filename',$price,$categoryId)";
                $r = mysqli_query($dbc,$q);

                echo mysqli_error($dbc);
                print_r($_POST);

                header("Location:index.php?page=menu&error=1");
                //echo "The file ". basename( $_FILES["inputFile"]["name"]). " has been uploaded.";
            } else {
                header("Location:index.php?page=menu?error=0");
                //echo "Sorry, there was an error uploading your file.";
            }
        }

    }
?>