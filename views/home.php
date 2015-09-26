
 <?php
     /*We choose the three last news articles*/
                $q="SELECT * FROM news ORDER BY id DESC LIMIT 3";
                $result = mysqli_query($dbc,$q);

 ?>   
 

<div id="wrapper">
    <section id="book-in-advance" class="row">
        <h1 class="col-md-10 book-now-text">Book in advance and enjoy a high level of service </h1>
        <a id="book-now-button" href="?page=reservation" class="col-md-2 btn btn-primary" role="button">Book now!</a>
    </section>
    <section id="deals-special" class="row">
        <div id="fancy-image-effect">

        </div>
        <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4" id="fancy-image-panel">
            Praesent sodales commodo lectus hendrerit rutrum. Suspendisse imperdiet pellentesque ex a finibus. Maecenas diam augue, luctus blandit suscipit vitae, placerat nec orci. Sed nisl leo, ullamcorper nec leo vitae, hendrerit pretium mauris. Nullam tristique, dolor id tempus tristique, leo ex porta leo, at pellentesque sem libero eu purus.
        </div>
        
        
        
             
    </section><!--End of section deals-offers-->
<section id="home-news" class="row">

    <h1>Our fresh news!</h1>
    <?php       
        /*Iterates three times through the row variable and prints the articles in the corresponding place in the index.php page*/
        while(($row=mysqli_fetch_assoc($result))!=NULL){ ?>

            <article class="col-md-4 col-sm-4 col-xs-12 news-article">
                <img class="news-image" src = "images/<?php echo $row['image']; ?>" alt="new fondu">
                <div class="news-bottom-box">
                    <h4><?php echo $row['title']?></h4>
                    <p class="news-text"><?php echo $row['body']?></p>
                    </div>
            </article><!--End of article article-->
    <?php } ?>
</section><!--End of news section-->
</div><!--End of wrapper. Wraps the whole page except for the header and footer-->