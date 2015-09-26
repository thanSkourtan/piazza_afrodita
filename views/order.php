
<?php
    
    $singleUserData =  get_single_user_data($dbc,$_SESSION['id']);


    $result = get_menu_data($dbc);


?>


<div id="wrapper-secondary-pages">
    <div class="container">

        <div class="row">
            <div class="col-md-9">
        
                
                 <div id="reservation-panel" class="panel panel-primary">
                        <div id="reservation-panel-heading" class="panel-heading">
                            
                            <h3 class="panel-title">Choice of menu</h3>
                        </div>
                            <div class="panel-body">
                                <?php while($row=mysqli_fetch_assoc($result)){ ?>
                                    <article class="row order-row">
                                        <div class="col-md-2">
                                            <img class="order-image" src="images/<?php echo $row['image']; ?>" alt="news image">
                                        </div>
                                        <div class="col-md-7" id="order-middle-column">
                                            <h3><?php echo $row['title']; ?></h3>
                                            <p><?php echo $row['body'];?> </p>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="checkbox order-checkbox">
                                                <label class="order-checkbox-label" id ="order-checkbox-<?php echo $row['id']; ?>">
                                                  <input class="order-price-checkbox" id="checkbox-id-<?php echo $row['id']; ?>" type ="checkbox"> <?php echo $row['price']?> €
                                                </label>
                                                
                                                <label class="quantity-label">
                                                    <input class="quantity" id="quantity-id-<?php echo $row['id']; ?>" type="number"  min="1" max="9">    quantity
                                                </label>

                                            </div>
                                        </div>
                                    </article>
                                <hr class="menu-separator">
                                <?php } ?>
                                
                            </div>
                  </div>
              </div>
            <div class="col-md-3">
                <form action="?page=order" method="post">
                    <div id="reservation-panel" class="panel panel-primary">
                        <div id="reservation-panel-heading" class="panel-heading">
                            <h3 class="panel-title">Order</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label for="name" class="control-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" value="<?php echo $singleUserData['firstName']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="last" class="control-label">Last Name</label>
                                    <input type="text" class="form-control" id="last" placeholder="Last Name" value="<?php echo $singleUserData['lastName']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="phone" class="control-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Phone Number" maxlength="10" value="<?php echo $singleUserData['phone']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="address" class="control-label">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Address" value="<?php echo $singleUserData['address']; ?>">
                            </div>


                            <div id="reservation-button-wrapper">
                                <h3>Total Price: <span id="price-indicator" class="label label-success">0.00 €</span></h3>
                                
                                <button id = "order-button" type="button" class="btn btn-default">Finalize Order</button>
                                <a id = "order-reset-button" href ="?page=order" class="btn btn-info" role="button">Clear</a>
                                
                            </div>

                        </div>
                    </div>
                </form>

                </div>
          </div><!--End of row-->  

    </div>
</div>