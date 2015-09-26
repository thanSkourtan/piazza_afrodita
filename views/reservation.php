
<div id="wrapper-secondary-pages">

    <div class="row">

        
        <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
            
            <div id="reservation-panel" class="panel panel-primary">
                <div id="reservation-panel-heading" class="panel-heading">
                    <h3 class="panel-title">
                        Booking information
                    </h3>
                    
                </div><!--End of panel heading-->
                
                    <div class="panel-body">
                        <div class="row">
                            
                            <div class="container col-sm-8 col-sm-offset-2">
                                
                                <h3 id="reservation-title-important">Important Information</h3>

                            
                                <div id="reservation-information-text">

                            <p id="reservation-important-text">Piazza Afrodita's restaurant is open 7 days for lunch 11am - 3.30pm. (Closed Xmas Day, Boxing Day & New Year's Day). Reservations are only accepted between the hours of 11am - 11pm. For an immediate booking please call Piazza Afrodita on 210 000 00 00. We will respond to your booking request by email as soon as possible. All email reservation requests are subject to confirmation.</p>
                                </div>
                            </div>


                        </div>
                        <form action="?page=reservation" class="form-horizontal" method="post">

                          <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                          </div>

                            <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">Phone Number</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="phone" placeholder="Phone Number" maxlength="10">
                            </div>
                          </div>

                            <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                          </div>

                            <div class="form-group">
                                <label for="date" class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-8">
                                  <input type="date" class="form-control" id="date" placeholder="Date" max="2017-12-31" min="2015-08-11">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="time" class="col-sm-2 control-label">Time</label>
                                <div class="col-sm-8">
                                  <input type="time" class="form-control" id="time" placeholder="Time">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="guests" class="col-sm-2 control-label">Number of Guests (max:10)</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="guests" placeholder="Number of Guests">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Special requests</label>
                                <div class="col-sm-8">
                                    <textarea id="message" class="form-control" rows="3"></textarea>
                                </div>
                            </div>

                            <div id="reservation-button-wrapper">
                                <button id="request-booking" type="button" class="btn btn-default">Request Booking</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </form>

                        
                    
                    </div>
                </div>
        </div>

        </div>
    
    


        </div>

    </div>


</div><!--End of wrapper. Wraps the whole page except for the header and footer-->