<?php
    
    #fetch data for a specific row
    if(isset($_GET['id'])){
        $galleryRow=get_single_gallery_data($dbc,$_GET['id']);
    }

    #fetch all the gallery table data
    $result =get_gallery_data($dbc);
?>

<h1 id="subpage-title">Gallery Manager</h1>

<section>
    <div class="row">
        <div class="col-md-4 list-group gallery-column">
            <?php 
                while($row=mysqli_fetch_assoc($result)){?>
                <a id ="gallery-<?php echo $row['id']?>" href="?page=gallery&id=<?php echo $row['id']; ?>" class="list-group-item <?php if($galleryRow['id']==$row['id']) echo 'active'; ?>">
                    <img class ="gallery-image" src="../images/<?php echo $row['name']; ?>" alt="image name">
                    <h3 class="gallery-word-column-<?php echo $row['id']; ?>"><?php echo $row['word']?></h3>
                </a>
            <?php } ?> 
        </div><!--End of first column-->

        <div class="col-md-8">
            <!--Alert!-->
            <?php if(isset($_GET['error']) && $_GET['error']==0){?>
                <div class="alert alert-danger" role="alert"> <p>The photo and the word could not be uploaded.</p></div>
            <?php } else if(isset($_GET['error']) && $_GET['error']==1){?>
                <div class="alert alert-success" role="alert"> <p>The photo and the word were succesfully uploaded.</p></div>
            <?php } ?>


            <?php if(isset($_GET['id'])){?>
            <div id="gallery-image-preview-title">
                <label for="gallery-preview-image">Image preview:</label>
            </div>
            <div id="gallery-image-preview-div">
                <img id="gallery-preview-image" src="../images/<?php echo $galleryRow['name']; ?>" alt="image">
            </div>
            <?php } ?>

           
            <!--enctype attribute is a must-->
            <form id = "gallery-input-form" action ="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="word">Type a marketing word</label>
                    <input type="text" class="form-control" id="word" name ="word" value="<?php echo $galleryRow['word']; ?>" placeholder="Word">
                </div>
                <div class="form-group">
                        <label for="inputFile">Upload a photo to be presented in the gallery section of the site</label>
                        <input type="file" name="inputFile" id="inputFile" accept="image/*">
                        <p class="help-block">Upload an image file here.</p>
                </div>
                <button type="submit" name ="action" value="submit" class="btn btn-success">Submit New</button>
                <button id = "gallery-update-btn-id-<?php echo $galleryRow['id']; ?>" type="button" name ="action" value="update" class="btn btn-warning gallery-update-button" <?php if(!isset($_GET['id'])|| $_GET['id']=='' || $_SESSION['userPrivilege']!=1) echo 'disabled'; ?>>Update Word</button>
                <button id="delete-btn-id-<?php echo $galleryRow['id']; ?>" type="button" name ="action" value="delete" class="gallery-delete-button btn btn-danger" <?php if(!isset($_GET['id'])|| $_GET['id']=='' || $_SESSION['userPrivilege']!=1) echo 'disabled'; ?>>Delete</button>
                <a href="?page=gallery" class="btn btn-info" role="button">Clear</a>
            </form>
        
        </div><!--End of second column-->



    </div><!--End of row section-->

</section>