

<?php
    
    #for gallery admin page, (almost) all the backendlogic is kept in this file
    include('config/setup.php');


    $target_dir = "../images/";

    if(isset($_GET['id'])){

        if($_POST['action']=='delete'){
           
            $id= $_GET['id'];
            #we get the query below so as to delete the file from the server
            $query1 = "SELECT name FROM gallery WHERE id = $id";
            $r1=mysqli_query($dbc,$query1);
            $row = mysqli_fetch_assoc($r1);

            $query2="DELETE FROM gallery WHERE id = $id";
            $r2 = mysqli_query($dbc,$query2);

            #here we delete the file from server
            $target_file_delete = $target_dir.$row['name'];

            #two checks in order not to delete the folder. if the $row['name'] is empty then this is what will happen
            if($row['name']!=''){
                if(!is_dir($target_file_delete)){
                    unlink($target_file_delete);
                }
            }

            
        }else if($_POST['action']=='update'){


            

            $id= $_GET['id'];
            #update the word
            $q="UPDATE gallery SET word='$_POST[word]' WHERE id = $id";
            $r = mysqli_query($dbc,$q);
            
            


            
        }

    }else{
    
        #part of code from http://www.w3schools.com/
        $filename = basename($_FILES["inputFile"]["name"]);
        $target_file = $target_dir.$filename;
        #get the word from the $_POST array
        $word = mysqli_real_escape_string($dbc, $_POST['word']);
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
            header("Location:index.php?page=gallery&error=0");
            //echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            #the move_uploaded_file does all the work
            if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $target_file)) {

                #add the word in the database only if there is a picture, otherwise there is no meaning
                $q="INSERT INTO gallery(name,word) VALUES('$filename','$word')";
                mysqli_query($dbc,$q);


                header("Location:index.php?page=gallery&error=1");
                //echo "The file ". basename( $_FILES["inputFile"]["name"]). " has been uploaded.";
            } else {
                header("Location:index.php?page=gallery?error=0");
                //echo "Sorry, there was an error uploading your file.";
            }
        }

    }

?>