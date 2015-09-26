
<?php
    
    $row=get_about_us_data($dbc);


?>


<div id="wrapper-secondary-pages">



        <div class="row">

        
        <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
            
            <div id="reservation-panel" class="panel panel-primary">
                <div id="reservation-panel-heading" class="panel-heading">
                    <h3 class="panel-title">
                        About us
                    </h3>
                </div><!--End of panel heading-->
                    <div class="panel-body">
                        <p><?php echo $row['text']?></p>
                    
                    </div>
                </div>
        </div>

        </div>

</div>