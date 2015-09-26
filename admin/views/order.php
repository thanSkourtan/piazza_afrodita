
<?php
    
     $result = get_orders_data($dbc);
     //$counter=0;


?>


<section>
    <div class=row">
        <div class="col-md-12">
           
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>


              <div class="panel-body">
                <p>Please find below the orders sent from the customers.</p>
              </div>
                <ul class="list-group">
                    <?php while($row=mysqli_fetch_assoc($result)){ 
                        $counter++;?>
                        <li class="list-group-item" id="reservation-list-group-<?php if($counter%2==0)echo 'trendycolour'?>">
                            <div class="row">
                            <div class="col-md-4">
                                <h4>Name: </h4><p><?php echo $row['name']; ?></p>
                                <h4>Last Name: </h4><p><?php echo $row['last']; ?></p>
                                <h4>Address: </h4><p><?php echo $row['address'] ?> </p>
                                <h4>Phone: </h4><p><?php echo $row['phone']; ?></p>
                                <h4>Total Price: </h4><?php echo $row['TotalPrice']; ?> €
                            </div>
                            <div class="col-md-8">
                                <h4>Order: </h4>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Menu Item Id</th>
                                            <th>Menu Item title</th>
                                            <th>Quantity</th> 
                                        </tr>

                                        <?php
                                            $menuIdsArray = explode(",",$row['menuIds'],-1); //If the limit parameter is negative, all components except the last -limit are returned.

                                            $menuItemsQuantities = explode(",",$row['quantities'],-1);
                                            $i=0;

                                            //echo $menuIdsArray;
                                            
                                            //print_r($menuIdsArray);

                                            foreach($menuIdsArray as $values){?>
                                                <tr>
                                                    <td><?php echo $values?></td>
                                                    <td><?php $menuRow = get_menu_data_by_id($dbc, $values); echo $menuRow['title']; ?></td> 
                                                    <td><?php echo $menuItemsQuantities[$i]; $i++; ?></td>
                                                </tr>
                                        <?php }?>
                                    </table>
                            </div>
                           </div>

                        </li>

                        
                 
                    <?php } ?>
                </ul>
               

            </div>



        </div>

    </div>



</section>