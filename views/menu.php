<?php
    
    $categoriesResult=get_category_data($dbc);
    //first loop below for categories, second loop for food
    //the array handles the bootstrap name convention so that the accordion remains functional.
    $counterArray = array("One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten");
    $counter=0;
?>


<div id="wrapper-secondary-pages">
    <div class="container">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <?php  
                while($categoryRow=mysqli_fetch_assoc($categoriesResult)){?>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading<?php echo $counterArray[$counter]; ?>">
              <h3 class="panel-title">
                 <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $counterArray[$counter]; ?>" aria-expanded="false" aria-controls="collapse<?php echo $counterArray[$counter]; ?>"><?php echo $categoryRow['category'];?></a> 
              </h3>
             </div> 
            <div id="collapse<?php echo $counterArray[$counter]; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading"> 
              <div class="panel-body">

                  <?php 
                        $result = get_menu_by_category($dbc,$categoryRow['id']);
                        while($row=mysqli_fetch_assoc($result)){?> 

                  <div class="row">
                    <div class="col-md-2">
                        <img class ="menu-image"src="images/<?php echo $row['image'];?>" alt="food image">    
                    </div>
                    <div class="col-md-10">
                        <h3><?php echo $row['title'];?></h3>
                        <p><?php echo $row['body'];?></p>
                    </div>
                  </div>
                  <hr class="menu-separator">

                  <?php } ?>


              </div><!--End of panel body-->


            </div>  
          </div><!--End of first panel-->
          
          <?php  $counter++; } ?>
        </div>
    </div>
</div>