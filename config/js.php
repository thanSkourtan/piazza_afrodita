<!--Import the jquery file. When using bootstrap, it is important to place jquery BEFORE bootstrap's javascript file, because otherwise the browser will throw the error "Bootstrap's JavaScript requires jQuery"-->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--Import the bootstrap javascript file-->
<script src="js/bootstrap.min.js"></script>
<!--Import the jquery-ui file-->
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<!--Import the Google Maps API. This is the only file for which I use CDN link-->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>
    /*Google maps initialize function*/
    function initialize() {

        var mapCanvas = document.getElementById('map-canvas');
        var myLatIng = new google.maps.LatLng(37.941903, 23.652584)
        var mapOptions = {
            center: myLatIng,
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        var marker = new google.maps.Marker({
            position: myLatIng,
            map: map,
            title: 'Piazza Afrodita!'
        });

    }

    /*Adds an event listener to the window object that will call the initialize function once the page has loaded*/
    google.maps.event.addDomListener(window, 'load', initialize);



    $(document).ready(function () {


        $(".image-wrapper").click(function () {

            //take the id attribute from the current image-wrapper, which is the name of the picture
            var name = $(this).attr('id');

            //takes the div from the footer and expands it in order to fill the screen and do all the other stuff
            $("#footer-div").css({ "left": "0", "top": "0", "background": "url(images/fancybox_overlay.png", "position": "fixed", "bottom": "0", "right": "0", "z-index": "2" });

            var imageWrapper = "<div class = 'col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-2 " + name + "' id='fancy-image-wrapper'><i id='gallery-left-arrow' class='fa fa-angle-left fa-3x'></i><img class=fancy-image src=images/" + name + "><i id='gallery-right-arrow' class='fa fa-angle-right fa-3x'></div>"

            $(imageWrapper).insertBefore("#single-image-1");


            // $("<div class = 'col-md-4 col-md-offset-2' id='fancy-image-wrapper'>" +
            //   "<img class=ourfancybox src=images/restaurant1.jpg></div>").insertBefore("#first-image");

        });

        //Without any z-index value, elements stack in the order that they appear in the DOM (the lowest one down at the same hierarchy level appears on top). 
        $("#footer-div").click(function () {

            $("#fancy-image-wrapper").remove();

            $("#footer-div").css({ "left": "", "top": "", "background": "", "position": "", "bottom": "", "right": "", "z-index": "" });

        });


        $(".row").on("click", "#gallery-left-arrow", function () {
            //take the last class name which is the name of the current picture
            var name = $("#fancy-image-wrapper").attr("class").split(" ").pop();

            var temp = name.split(".")

            var currentId = new String();

            currentId = "#" + temp[0] + "\\." + temp[1];

            var previousName = $(currentId).parent().prev().children(".image-wrapper").attr("id");

            if (previousName) {
                $("#fancy-image-wrapper").remove();

                var imageWrapper = "<div class = 'col-md-6 col-md-offset-1 " + previousName + "' id='fancy-image-wrapper'><i id='gallery-left-arrow' class='fa fa-angle-left fa-3x'></i><img class=fancy-image src=images/" + previousName + "><i id='gallery-right-arrow' class='fa fa-angle-right fa-3x'></div>"
                $(imageWrapper).insertBefore("#single-image-1");
            }

        });


        $(".row").on("click", "#gallery-right-arrow", function () {
            //take the last class name which is the name of the current picture
            var name = $("#fancy-image-wrapper").attr("class").split(" ").pop();

            var temp = name.split(".")

            var currentId = new String();

            currentId = "#" + temp[0] + "\\." + temp[1];

            var nextName = $(currentId).parent().next().children(".image-wrapper").attr("id");

            if (nextName) {
                $("#fancy-image-wrapper").remove();

                var imageWrapper = "<div class = 'col-md-6 col-md-offset-1 " + nextName + "' id='fancy-image-wrapper'><i id='gallery-left-arrow' class='fa fa-angle-left fa-3x'></i><img class=fancy-image src=images/" + nextName + "><i id='gallery-right-arrow' class='fa fa-angle-right fa-3x'></div>"
                $(imageWrapper).insertBefore("#single-image-1");
            }

        });


        //validate contact form and send data to database

        $("#contact-submit-button").click(function () {

            //delete the old alerts
            $(".alert-danger").remove();

            var counter = 0;

            var firstName = $("#name").val();
            var lastName = $("#last").val();
            var phone = $("#phonenumber").val();
            var email = $("#email").val();
            var message = $("#message").val();


            if (!firstName.match("^[Α-Ωα-ωάέήίόύώ]{2,}$") && !firstName.match("^[A-Za-z]{1,}$")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Name field.</div>").insertBefore("#contact-title");
                counter++;
            }

            if (!lastName.match("[Α-Ωα-ωάέήίόύώ]{2,}$") && !lastName.match("[A-Za-z]{1,}$")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Last Name field.</div>").insertBefore("#contact-title");
                counter++;
            }

            if (!phone.match("[0-9]{10}$")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Phone field.</div>").insertBefore("#contact-title");
                counter++;
            }

            if (!email.match("^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Email field.</div>").insertBefore("#contact-title");
                counter++;

            }
            //if there was one validation error, we get out of the function
            if (counter) {
                return false;
            }

            //send the data to server with ajax

            $.ajax({
                type: "POST",
                url: "ajax/contact.php",
                data: "name=" + firstName + "&last=" + lastName + "&phone=" + phone + "&email=" + email + "&message=" + message,
                success: function () {
                    $("<div class='alert alert-success' role='alert'> <p>We received your message. We will try to respond asap.</p></div>").insertBefore("#contact-title");
                    //clear the rest of the form
                    $("#name").val("");
                    $("#last").val("");
                    $("#phonenumber").val("");
                    $("#email").val("");
                    $("#message").val("");

                },
                error: function () {
                    $("<div class='alert alert-danger' role='alert'> <p>Due to technical reasons we could not receive your message. Please try again later.</p></div>").insertBefore("#contact-title");
                }
            });

        });



        $("#request-booking").click(function () {
            //delete the old alerts
            $(".alert-danger").remove();

            var counter = 0;

            var name = $("#name").val();
            var phone = $("#phone").val();
            var email = $("#email").val();
            var date = $("#date").val();
            var time = $("#time").val();
            var noOfGuests = $("#guests").val();
            var special = $("#message").val();


            if (!name.match("^[Α-Ωα-ωάέήίόύώ]{2,}$") && !name.match("^[A-Za-z]{1,}$")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Name field.</div>").insertBefore("#reservation-information-text");
                counter++;
            }

            if (!phone.match("[0-9]{10}$")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Phone field.</div>").insertBefore("#reservation-information-text");
                counter++;
            }

            if (!email.match("^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Email field.</div>").insertBefore("#reservation-information-text");
                counter++;
            }
            /*give two years ahead of time*/
            if (!date.match("201[5-7]-[0-1][0-9]-[0-3][0-9]$")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Date field.</div>").insertBefore("#reservation-information-text");
                counter++;
            }
            /*can close reservation between 11 - 22:59*/
            if (!time.match("([1][1-9]|2[0-2]):[0-5][0-9]")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Time field. Check the info below for the valid reservation time.</div>").insertBefore("#reservation-information-text");
                counter++;
            }

            if (!noOfGuests.match("^[0-8]$")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Guests field.</div>").insertBefore("#reservation-information-text");
                counter++;
            }
            //if there was one validation error, we get out of the function
            if (counter) {
                return false;
            }

            //send the data to server with ajax

            $.ajax({
                type: "POST",
                url: "ajax/reservation.php",
                data: "name=" + name + "&phone=" + phone + "&email=" + email + "&date=" + date + "&time=" + time + "&noOfGuests=" + noOfGuests + "&special=" + special,
                success: function () {
                    $("<div class='alert alert-success' role='alert'> <p>We received your reservation. We will try to respond asap.</p></div>").insertBefore("#reservation-information-text");
                    //clear the rest of the form
                    $("#name").val("");
                    $("#phone").val("");
                    $("#email").val("");
                    $("#message").val("");
                    $("#date").val("");
                    $("#time").val("");
                    $("#guests").val("");
                    $("#message").val("");

                },
                error: function () {
                    $("<div class='alert alert-danger' role='alert'> <p>Due to technical reasons we could not receive your reservation. Please try again later.</p></div>").insertBefore("#reservation-information-text");
                }
            });



        });

        /********************************************************************************************************************************************/
        var sum = 0;
        var floatPrice = 0;

        $(".order-price-checkbox").click(function () {
            //the sum of the order

            var orderId = $(this).attr("id");
            var textPrice = $(this).parent().text();
            floatPrice = parseFloat(textPrice);

            /*get the corresponding quantity*/
            var correspondingQuantityId = $(this).parent().next().children(".quantity").attr("id");
            var correspondingQuantity = correspondingQuantity = $("#" + correspondingQuantityId).val();

            /*to check or not to check */
            if ($("#" + orderId).is(':checked') == true) {
                sum += floatPrice * correspondingQuantity;
            } else {
                sum -= floatPrice * correspondingQuantity;
            }

            sum = sum < 0 ? 0 : sum;

            $("#price-indicator").text(sum.toFixed(2) + " €");


        });
        /*we save the previous values in order to extract the exact amount from the total price. for this reason we use an array*/
        var previousValue = [];

        $(".quantity").change(function () {
            /*validates whether the quantity is off limits and if so, sets it to zero*/

            var value = $(this).val();

            if (value != "") {
                value = parseInt(value);
            } else {
                value = 0;
            }

            if (value < 1 || value > 9) {
                $(this).val("0");
            }
            //find the number id and convert it to int
            var plainNumberId = $(this).attr("id").split("-").pop();
            var NumberId = parseInt(plainNumberId);

            /*the first time, initialize the specific position of the array previousValue to zero*/
            if (previousValue[NumberId] == null) {
                previousValue[NumberId] = 0;
            }

            var orderId = $(this).parent().prev().children(".order-price-checkbox").attr("id");

            /*do something only if the checkbox is checked*/
            if ($("#" + orderId).is(':checked') == true) {

                var correspondingPrice = $(this).parent().prev().text();
                var floatCorrespondingPrice = parseFloat(correspondingPrice);
                /*first subtract the old value, then add the new one*/
                sum -= floatCorrespondingPrice * previousValue[NumberId];
                sum += floatCorrespondingPrice * value;
                previousValue[NumberId] = value;

            }

            sum = sum < 0 ? 0 : sum;

            $("#price-indicator").text(sum.toFixed(2) + " €");

        });


        /*finalize order*/
        $("#order-button").click(function () {

            //var boxes = $(":checkbox:checked");

            /*$("article>div>div>label>input[.order-price-checkbox]:checked").map(function () {
            alert( this.id);

            })*/


            /*validate input first*/
            var counter = 0;

            var name = $("#name").val();
            var last = $("#last").val();
            var phone = $("#phone").val();
            var address = $("#address").val();


            //delete the old alerts
            $(".alert-danger").remove();

            if (!name.match("^[Α-Ωα-ωάέήίόύώ]{2,}$") && !name.match("^[A-Za-z]{1,}$")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Name field.</div>").insertBefore("#reservation-panel");
                counter++;
            }

            if (!last.match("^[Α-Ωα-ωάέήίόύώ]{2,}$") && !name.match("^[A-Za-z]{1,}$")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Last Name field.</div>").insertBefore("#reservation-panel");
                counter++;
            }

            if (!phone.match("[0-9]{10}$")) {
                $("<div class='alert alert-danger' role='alert'>Please correct the Phone field.</div>").insertBefore("#reservation-panel");
                counter++;
            }

            //if there was one validation error, we get out of the function
            if (counter) {
                return false;
            }




            var checkedCheckboxes = [];
            var i = 0;

            /*ids of menu items and quantities of them have the same counter*/
            var quantityIds = [];
            var quantityInputs = [];
            var j = 0;

            var finalQuantityArray = [];
            var finalArray = [];
            var l = 0;

            $(":checkbox:checked").map(function () {
                /*populate the array checkedCheckboxes*/
                checkedCheckboxes[i] = this.id.split("-").pop();
                i++;
                //alert(checkedCheckboxes);
            })

            $(".quantity").map(function () {
                var quantityInput = parseInt($(this).val());
                /*populate the arrays quantityIds and quantityInputs*/
                if (quantityInput > 0) {
                    quantityIds[j] = this.id.split("-").pop();
                    quantityInputs[j] = $(this).val();
                    j++;
                    //alert(quantityInputs);
                }

            })

            for (var k = 0; k < quantityIds.length; k++) {
                if (checkedCheckboxes.indexOf(quantityIds[k]) != -1) {
                    finalArray[l] = quantityIds[k];
                    finalQuantityArray[l] = quantityInputs[k];
                    l++;
                }
            }

            if (finalArray.length == 0) {
                $("<div class='alert alert-danger' role='alert'>Please order something.</div>").insertBefore("#reservation-panel");
                return false;
            }

            /*we pass two arrays as json objects. one with the menu items ids, and one with the amounts of each menu item ordered by the customer.*/

            dataString = finalArray; // array?
            var jsonString = JSON.stringify(dataString);

            dataString2 = finalQuantityArray; // array?
            var jsonString2 = JSON.stringify(dataString2);


            //alert(finalArray);

            $.ajax({
                type: "POST",
                url: "ajax/order.php",
                data: "quantityInputs=" + jsonString2 + "&finalArray=" + jsonString + "&name=" + name + "&last=" + last + "&phone=" + phone + "&address=" + address + "&sum=" + sum, //apparently, this is how you send an array as data in an ajax request
                success: function () {
                    $("<div class='alert alert-success' role='alert'> <p>We received your order. You will receive it asap.</p></div>").insertBefore("#reservation-panel");
                    //clear the rest of the form
                    $("#price-indicator").val("");


                },
                error: function () {
                    $("<div class='alert alert-danger' role='alert'> <p>Due to technical reasons we could not receive your order. Please try again later.</p></div>").insertBefore("#reservation-panel");
                }
            });

            //clear all input fields
            $("#name").val("");
            $("#last").val("");
            $("#phone").val("");
            $("#address").val("");



        });



    });

</script>