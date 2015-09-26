
<?php
    
    $result = get_news_data($dbc);
?>


<div id="wrapper-secondary-pages">
    <div class="container">
         <div id="reservation-panel" class="panel panel-primary">
                <div id="reservation-panel-heading" class="panel-heading">
                    <h3 class="panel-title">News</h3>
                </div>
                    <div class="panel-body">
                        <?php while($row=mysqli_fetch_assoc($result)){ ?>
                            <article class="row news-row">
                                <div class="col-md-4">
                                    <img class="news-image" src="images/<?php echo $row['image']; ?>" alt="news image">
                                </div>
                                <div class="col-md-8">
                                    <h2><?php echo $row['title']; ?></h2>
                                    <p>by <?php 
                                        $userRow = get_single_user_data($dbc,$row['user_id']);
                                        echo $userRow['username']; ?></p>
                                    <p><?php echo $row['body'];?> </p>
                                    
                                </div>
                            </article>
                        <hr class="menu-separator">
                        <?php } ?>
                    </div>
          </div>
    </div>
</div>