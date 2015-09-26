<div id="wrapper-secondary-pages">

    <div class="container">
 
        <div id="gallery-title">      
            <h2>Gallery</h2>
        </div>
  
    <div class="row">
        <?php
            $i=1;
            $result=get_gallery_data($dbc);
            while($row=mysqli_fetch_assoc($result)){ ?>

            
            <div class="col-md-4 col-sm-6" id="single-image-<?php echo $i; $i++?>">
                <div class="image-wrapper" id="<?php echo $row['name']?>">
                
                    <img class="gallery-image" src="images/<?php echo $row['name']?>" alt="restaurant image">
                    <div class="gallery-image-spider"><h3 class="gallery-decorative-text"><?php echo $row['word']; ?></h3></div>
                </div>
            </div>
                
        <?php } ?>
    
    </div>


  </div>
        

</div>