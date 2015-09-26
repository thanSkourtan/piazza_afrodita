
<?php 

    #this is placed before the get_about_us_data function on purpose, so that the checkedbox gets updated after the submission of an option
    #the if statement below controls the radio buttons.
    if(isset($_POST['option'])){
         $q="UPDATE aboutus SET checked = 1 WHERE id='$_POST[option]'";
         $r1=mysqli_query($dbc,$q);

         $q="UPDATE aboutus SET checked = 0 WHERE id<>'$_POST[option]'";
         $r1=mysqli_query($dbc,$q);
     

         if($r1){
            // header('Location: ?page-about-us&error=1');
                //$message='<p>Page was added!</p>';
                $succesful = 'Successful action!';
            }else{
              //  header('Location: ?page-about-us&error=0');
                $failure = 'Action was not successful. Please retry';
                //$message='<p> Page could not be added because: '.mysqli_error($dbc).'<p>'.$q.'</p>';
         }

     }

    if(isset($_GET['id'])){
        $aboutUsRow = get_single_about_us_data($dbc,$_GET['id']);
    }

    if(isset($_POST['aboutus']) && $_POST['action']=='submit'){
        
        $aboutUs = mysqli_real_escape_string($dbc,$_POST['aboutus']);
        
        $q="INSERT INTO aboutus (text,checked) VALUES ('$_POST[aboutus]',0)";
        $r = mysqli_query($dbc,$q);

    }else if(isset($_POST['aboutus']) && $_POST['action']=='update'){
        $aboutUs = mysqli_real_escape_string($dbc,$_POST['aboutus']);
        
        $q="UPDATE aboutus SET text = '$aboutUs' WHERE id = $_GET[id]";
        $r = mysqli_query($dbc,$q);

        if($r){
            $succesful = 'Successful action!';
            //$message='<p>Page was added!</p>';
         }else{
            $failure = 'Action was not successful. Please retry';
            //$message='<p> Page could not be added because: '.mysqli_error($dbc).'<p>'.$q.'</p>';
           
         }

     #when an about us text is active   
    }/*else if(isset($_GET['id']) && $_POST['action']=='delete'){
        
        
        $q="DELETE FROM aboutus WHERE id = $_GET[id]";
        $r = mysqli_query($dbc,$q);
        
    }*/


    

     $result = get_about_us_data($dbc);


?>


<section>

    <h1 id="subpage-title">About-Us Page Manager</h1>
    <div class="row">

        <!--First column-->
        <div class="col-md-8">

            <!--Alert!-->
            <?php if($succesful != NULL){?>
                <div class="alert alert-success" role="alert"> <p><?php echo $succesful; ?> </p></div>
            <?php }?>
            <?php if($failure != NULL){ ?>
                <div class="alert alert-danger" role="alert"> <p><?php echo $failure; ?></p></div>
            <?php } ?>

            <h3>Choose which one of the below texts you would like as an about us passage and click submit right below:</h3>
            <div class="list-group">

                <form action="?page=about-us" method="post">
                <?php while($row=mysqli_fetch_assoc($result)){?>
                    <a id = "list-group-item-id-<?php echo $row['id']; ?>" href="index.php?page=about-us&id=<?php echo $row['id']; ?>" class="list-group-item <?php if($aboutUsRow['id']==$row['id']) echo 'active' ; ?>">
                        <input type="radio" name="option" id="optionsRadios1" value="<?php echo $row['id']?>" <?php if($row['checked']==1) echo 'checked'; ?>>  
                        <?php echo $row['text'];?>
                    </a>
                <?php } ?>
                    <button id="about-us-submit-button"type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div><!--End of first column-->

        <!--Second column-->
        <div class="col-md-4">
            <form id="about-us-reset-form" action="?page=about-us&id=<?php echo $aboutUsRow['id']?>" method="post">
                <div class="form-group">
                    <label for="aboutus"><h3>About-us text</h3></label>
                    <textarea id="about-us-reset-textarea" name ="aboutus" class="form-control" rows="30"><?php echo $aboutUsRow['text']; ?></textarea>
                </div>
                <button type="submit" name ="action" value="submit" class="btn btn-success">Submit New</button>
                <button type="submit" name ="action" value="update" class="btn btn-warning" <?php if(!isset($_GET['id'])|| $_GET['id']=='' || $_SESSION['userPrivilege']!=1 ) echo 'disabled'; ?>>Update</button>
                <button  id="delete-btn-id-<?php echo $aboutUsRow['id']; ?>" type="button" name ="action" value="delete" class="about-us-delete-button btn btn-danger" <?php if(!isset($_GET['id'])|| $_GET['id']=='' || $_SESSION['userPrivilege']!=1) echo 'disabled'; ?>>Delete</button>
                <a href="?page=about-us" class="btn btn-info" role="button">Clear</a>
            </form> 
        </div><!--End of second column-->
    </div><!--End of row-->
</section>