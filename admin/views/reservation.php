
<?php
    
     $result = get_reservation_data($dbc);
     $counter=0;

?>


<section>
    <div class=row">
        <div class="col-md-12">
           
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>


              <div class="panel-body">
                <p>Please find below the messages sent from the customers via the contact form.</p>
              </div>
                <ul class="list-group">
                    <?php while($row=mysqli_fetch_assoc($result)){ 
                        $counter++;?>
                        <li class="list-group-item" id="reservation-list-group-<?php if($counter%2==0)echo 'trendycolour'?>">
                            <div class="row">
                            <div class="col-md-4">
                                <h4>Name: </h4><p><?php echo $row['name']; ?></p>
                                <h4>Phone: </h4><p><?php echo $row['phone']; ?></p>
                                <h4>Email: </h4><?php echo $row['email']; ?>
                                <h4>Date: </h4><?php echo $row['date']; ?>
                                <h4>Time: </h4><?php echo $row['time']; ?>
                                <h4>Number Of Guests: </h4><?php echo $row['noOfGuests']; ?>
                            </div>
                            <div class="col-md-8">
                                <h4>Special Requests: </h4><p><?php echo $row['special']; ?></p>
                            </div>
                           </div>

                        </li>

                        
                 
                    <?php } ?>
                </ul>
               

            </div>



        </div>

    </div>



</section>