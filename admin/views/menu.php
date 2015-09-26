
<?php 

    #code to insert in the form the data of a menu item, after it has been pressed in the group list.
    if(isset($_GET['id'])){
        $menuRow=get_single_menu_data($dbc,$_GET['id']);
    }

    #get menu data
    if(isset($_GET['categoryid'])){
       $result=get_menu_by_category($dbc,$_GET['categoryid']);
    }else{
        $result=get_menu_data($dbc);
    }


    #getCategoryData
    $categoryData = get_category_data($dbc);

    
?>


<div class="container">
    <h1 id="subpage-title">Menu Manager</h1>
    <div class="row">
        <div id="menu-dropdown-button"class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Menu Categories
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a id="menu-id-" href ="?page=menu">All</a></li>
                <?php while($categoryRow = mysqli_fetch_assoc($categoryData)){ ?>
                    <li><a href="?page=menu&categoryid=<?php echo $categoryRow['id']; ?>"><?php echo $categoryRow['category'] ;?></a></li>
                <?php } ?>
                
            </ul>
        </div><!--End of dropdown button-->

            <div id="menu-col-list-group" class="col-md-4 col-sm-4">
                <div id ="menu-list-group" class="list-group">
                    <?php #populates the group list
                        while($row = mysqli_fetch_assoc($result)){ ?>
                            <a id="menu-row-id-<?php echo $row['id']; ?>" href ="?page=menu&id=<?php echo $row['id']; ?>" class="list-group-item <?php if($_GET['id']==$row['id']) echo 'active'; ?>">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 menu-right-side-group-list">
                                        <img class="menu-image" src="../images/<?php echo $row['image']; ?>" alt="menu-image">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <h4 id="menu-col-title-id-<?php echo $row['id']; ?>" class ="list-group-item-heading"><?php echo $row['title']; ?></h4>
                                        <p id="menu-col-body-id-<?php echo $row['id']; ?>" class="list-group-item-text"><?php echo substr($row['body'],0,150); ?></p>
                                        <p id="menu-col-category-id-<?php echo $row['id']; ?>" class="list-group-item-text menu-category-text">Category: 
                                        <?php 
                                            $currentCategory = get_category_by_id($dbc,$row['categoryId']);
                                            echo $currentCategory['category']; 
                                        ?>
                                       </p>
                                       <p id="menu-col-price-id-<?php echo $row['id']; ?>" class="list-group-item-text menu-category-text">Price: <?php echo $row['price']; ?> €
                                    </div>
                                </div>
                            </a>    
                    <?php } ?>
                </div>
            </div>
            <div id="menu-right-col" class="col-md-8 col-sm-8">
                
                <?php 
                    #just echoing the message following the insertion of the data
                    if(isset($message)){
                        echo $message;
                    }
                ?>

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
                        <img id="gallery-preview-image" src="../images/<?php echo $menuRow['image']; ?>" alt="image">
                    </div>
                 <?php } ?>
               
                <form action="menuupload.php" method="post" role="form"  enctype="multipart/form-data">
                      <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value = "<?php echo $menuRow['title']?>" placeholder ="Title of dish">
                      </div>

                      <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category">
                                 <option id="first-option" value="0"><?php if(isset($_GET['id'])) { $categoryName = get_category_by_id($dbc,$menuRow['categoryId']); echo $categoryName['category'];} else {echo 'No option';} ; ?></option>
                                <?php   mysqli_data_seek($categoryData,0); #Resets the mysqli_fetch_assoc pointer
                                        while($categoryRow = mysqli_fetch_assoc($categoryData)){ ?>
                                        <option class="category-options" value="<?php echo $categoryRow['id']?>"><?php echo $categoryRow['category']; ?></option>
                                <?php } ?>
                            </select>
                      </div>

                    <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" value = "<?php echo $menuRow['price']?>" placeholder ="Price of dish" step="0.01" >
                      </div>

                      <div class="form-group">
                            <label for="body">Body</label>
                            <textarea id="body" class ="form-control" rows="8" name="body" placeholder="Description of food"><?php echo $menuRow['body']?></textarea>
                      </div>
                      <div class="form-group">
                            <label for="inputFile">Upload a photo to be presented in the menu section of the site</label>
                            <input type="file" name="inputFile" id="inputFile" accept="image/*">
                            <p class="help-block">Upload an image file here.</p>
                      </div>

                <button type="submit" name ="action" value="submit" class="btn btn-success">Submit New</button>

                <button id="menu-update-button-<?php echo $menuRow['id']; ?>" type="button" name ="action" value="update" class="menu-update-button btn btn-warning" <?php if(!isset($_GET['id'])|| $_GET['id']=='' || $_SESSION['userPrivilege']!=1) echo 'disabled'; ?>>Update</button>

                <button  id="delete-btn-id-<?php echo $menuRow['id']; ?>" type="button" name ="action" value="delete" class="menu-delete-button btn btn-danger" <?php if(!isset($_GET['id'])|| $_GET['id']=='' || $_SESSION['userPrivilege']!=1) echo 'disabled'; ?>>Delete</button>

                <a href="?page=menu" class="btn btn-info" role="button">Clear</a>

                </form>
            </div>
    </div>
</div>