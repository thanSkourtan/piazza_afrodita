

<?php 

   #get all news data
   $result = get_news_data($dbc);
   #get all user data
   $userData = get_user_data($dbc);

   if(isset($_GET['id'])){
       $newsRow = get_single_news_data($dbc,$_GET['id']);


   }


?>


<div class="container">
    <h1 id="subpage-title">News Manager</h1>
    <div class="row">
        <div id="menu-col-list-group" class="col-md-4 col-sm-4">
            <div id ="menu-list-group" class="list-group">
                <?php #populates the group list
                    while($row = mysqli_fetch_assoc($result)){ ?>
                        <a id="news-row-id-<?php echo $row['id']; ?>" href ="?page=news&id=<?php echo $row['id']; ?>" class="list-group-item <?php if($_GET['id']==$row['id']) echo 'active'; ?>">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 menu-right-side-group-list">
                                    <img class="menu-image" src="../images/<?php echo $row['image']; ?>" alt="news-image">
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h4 id="menu-col-title-id-<?php echo $row['id']; ?>" class ="list-group-item-heading"><?php echo $row['title']; ?></h4>
                                    <p id="menu-col-body-id-<?php echo $row['id']; ?>" class="list-group-item-text"><?php echo substr($row['body'],0,150); ?></p>
                                    <p id="menu-col-user-id-<?php echo $row['id']; ?>" class="list-group-item-text menu-category-text">User: 
                                    <?php 
                                        $currentUser = get_single_user_data($dbc,$row['user_id']);
                                        echo $currentUser['username']; 
                                    ?>
                                    </p>
                                </div>
                            </div>
                        </a>    
                <?php } ?>
            </div>
        </div>
            <div id="menu-right-col" class="col-md-8 col-sm-8">

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
                        <img id="gallery-preview-image" src="../images/<?php echo $newsRow['image']; ?>" alt="image">
                    </div>
                 <?php } ?>
               
                <form action="newsupload.php" method="post" role="form"  enctype="multipart/form-data">
                      <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value = "<?php echo $newsRow['title']?>" placeholder ="Title of article">
                      </div>

                      <div class="form-group">
                            <label for="user">User</label>
                            <select class="form-control" id="user" name="user">
                                 <option id="first-option" value="0"><?php if(isset($_GET['id'])) { $userName = get_single_user_data($dbc,$newsRow['user_id']); echo $userName['username'];} else {echo 'No option';} ; ?></option>
                                <?php  
                                        while($userRow = mysqli_fetch_assoc($userData)){ ?>
                                        <option class="category-options" value="<?php echo $userRow['id']?>"><?php echo $userRow['username']; ?></option>
                                <?php } ?>
                            </select>
                      </div>

                      <div class="form-group">
                            <label for="body">Body</label>
                            <textarea id="body" class ="form-control" rows="8" name="body" placeholder="Article body"><?php echo $newsRow['body']?></textarea>
                      </div>
                      <div class="form-group">
                            <label for="inputFile">Upload a photo to be presented in the news section of the site</label>
                            <input type="file" name="inputFile" id="inputFile" accept="image/*">
                            <p class="help-block">Upload an image file here.</p>
                      </div>

                <button type="submit" name ="action" value="submit" class="btn btn-success">Submit New</button>

                <button id="news-update-button-<?php echo $newsRow['id']; ?>" type="button" name ="action" value="update" class="news-update-button btn btn-warning" <?php if(!isset($_GET['id'])|| $_GET['id']=='' || $_SESSION['userPrivilege']!=1) echo 'disabled'; ?>>Update</button>

                <button  id="delete-btn-id-<?php echo $newsRow['id']; ?>" type="button" name ="action" value="delete" class="news-delete-button btn btn-danger" <?php if(!isset($_GET['id'])|| $_GET['id']=='' || $_SESSION['userPrivilege']!=1) echo 'disabled'; ?>>Delete</button>

                <a href="?page=news" class="btn btn-info" role="button">Clear</a>

                </form>
            </div>
    </div>
</div>