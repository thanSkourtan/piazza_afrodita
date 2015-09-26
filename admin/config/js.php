<!--Import the jquery file. When using bootstrap, it is important to place jquery BEFORE bootstrap's javascript file, because otherwise the browser will throw the error "Bootstrap's JavaScript requires jQuery"-->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--Import the bootstrap javascript file-->
<script src="js/bootstrap.min.js"></script>
<!--Import the jquery-ui file-->
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<!--Import the tinymce editor. Works through javascript-->
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>



<script type="text/javascript">




    tinymce.init({
        selector: ".editor",
        theme: "modern",
        plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                 "save table contextmenu directionality emoticons template paste textcolor"],
        content_css: "css/content.css",
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [
                    { title: 'Bold text', inline: 'b' },
                    { title: 'Red text', inline: 'span', styles: { color: '#ff0000'} },
                    { title: 'Red header', block: 'h1', styles: { color: '#ff0000'} },
                    { title: 'Example 1', inline: 'span', classes: 'example1' },
                    { title: 'Example 2', inline: 'span', classes: 'example2' },
                    { title: 'Table styles' },
                    { title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}]
    });





    $(document).ready(function () {
        /*no need for all of this
        $("#about-us-reset-button").click(function () {

        //alert($("#about-us-reset-textarea").attr("id"));
        $("#about-us-reset-textarea").val('');
        //$('.editor').val('Some contents...');

        });

        $('#gallery-reset-button').click(function () {
        $("#word").val('');
        });*/






        $(".about-us-delete-button").on("click", function () {


            var selected = $(this).attr("id");

            var listGroupId = selected.split("-").pop();


            var confirmed = confirm("Are you sure you want to delete this about-us text?");

            if (confirmed == true) {
                //utility function get. asks the server to upload the specific file
                $.get("ajax/about-us.php?id=" + listGroupId);
                $("#list-group-item-id-" + listGroupId).remove();
            }
            /*the text area cleans when we press the delete button*/
            $("#about-us-reset-textarea").val('');

        });






        $(".gallery-update-button").on("click", function () {


            var selected = $(this).attr("id");

            var idNum = selected.split("-").pop();
            var oneWord = $("#word").val();
            $(".gallery-word-column-" + idNum).text(oneWord);


            $.ajax({
                type: "POST",
                url: "upload.php?id=" + idNum,
                data: "word=" + oneWord + "&action=update",
                success: function () {
                    $("<div class='alert alert-success' role='alert'> <p>The photo and the word were successfully updated.</p></div>").insertBefore("#gallery-image-preview-title");
                },
                error: function () {
                    $("<div class='alert alert-danger' role='alert'> <p>The photo and the word could not be updated.</p></div>").insertBefore("#gallery-image-preview-title");
                }
            });
            // $.post("upload.php?id=" + idNum);

        });






        $(".gallery-delete-button").on("click", function () {

            var selected = $(this).attr("id");

            var idNum = selected.split("-").pop();

            //remove from page
            $("#gallery-" + idNum).remove();
            $("#gallery-image-preview-div").remove();
            $("#gallery-image-preview-title").remove();

            //remove the text from the form
            $("#word").val("");

            $.ajax({
                type: "POST",
                url: "upload.php?id=" + idNum,
                data: "action=delete",
                success: function () {
                    $("<div class='alert alert-success' role='alert'> <p>The photo and the word were successfully deleted.</p></div>").insertBefore("#gallery-input-form");
                },
                error: function () {
                    $("<div class='alert alert-danger' role='alert'> <p>The photo and the word could not be deleted.</p></div>").insertBefore("#gallery-input-form");
                }

            });



        });








        $(".menu-update-button").on("click", function () {


            var selected = $(this).attr("id");

            var idNum = selected.split("-").pop();

            /*get the values we want to update*/
            var title = $("#title").val();
            var category = $("select option:selected").text();
            var price = $("#price").val();
            var body = $("#body").val();

            /*we send the categoryId on the server, not the category name*/
            var categoryId = $("select option:selected").val();

            /*update on the page the values that we want to be updated*/

            $("#menu-col-title-id-" + idNum).text(title);
            $("#menu-col-category-id-" + idNum).text("Category: " + category);
            $("#menu-col-price-id-" + idNum).text("Price: " + price.toFixed(2) + " €");
            $("#menu-col-body-id-" + idNum).text(body);


            $.ajax({
                type: "POST",
                url: "menuupload.php?id=" + idNum,
                data: "title=" + title + "&action=update" + "&category=" + categoryId + "&price=" + price + "&body=" + body,
                success: function () {
                    $("<div class='alert alert-success' role='alert'> <p>The photo and the word were successfully updated.</p></div>").insertBefore("#gallery-image-preview-title");
                },
                error: function () {
                    $("<div class='alert alert-danger' role='alert'> <p>The photo and the word could not be updated.</p></div>").insertBefore("#gallery-image-preview-title");
                }
            });
            // $.post("upload.php?id=" + idNum);

        });


        $(".menu-delete-button").on("click", function () {

            var selected = $(this).attr("id");

            var idNum = selected.split("-").pop();


            var confirmed = confirm("Are you sure you want to delete this about-us text?");

            if (confirmed == true) {

                //remove from page
                $("#menu-row-id-" + idNum).remove();
                $("#gallery-image-preview-div").remove();
                $("#gallery-image-preview-title").remove();


                //remove the text from the form
                $("#title").val("");
                $("#first-option").text("No Option");
                $("#price").val("");
                $("#body").val("");

                $.ajax({
                    type: "POST",
                    url: "menuupload.php?id=" + idNum,
                    data: "action=delete",
                    success: function () {
                        $("<div class='alert alert-success' role='alert'> <p>The photo and the word were successfully deleted.</p></div>").insertBefore("#gallery-input-form");
                    },
                    error: function () {
                        $("<div class='alert alert-danger' role='alert'> <p>The photo and the word could not be deleted.</p></div>").insertBefore("#gallery-input-form");
                    }

                });

            }

        });




        $(".news-update-button").on("click", function () {


            var selected = $(this).attr("id");

            var idNum = selected.split("-").pop();

            /*get the values we want to update*/
            var title = $("#title").val();
            var user = $("select option:selected").text();
            var body = $("#body").val();

            /*we send the userId on the server, not the category name*/
            var userId = $("select option:selected").val();

            /*update on the page the values that we want to be updated*/

            $("#menu-col-title-id-" + idNum).text(title);
            $("#menu-col-user-id-" + idNum).text("User: " + user);
            $("#menu-col-body-id-" + idNum).text(body);


            $.ajax({
                type: "POST",
                url: "newsupload.php?id=" + idNum,
                data: "title=" + title + "&action=update" + "&user=" + userId + "&body=" + body,
                success: function () {
                    $("<div class='alert alert-success' role='alert'> <p>The photo and the word were successfully updated.</p></div>").insertBefore("#gallery-image-preview-title");
                },
                error: function () {
                    $("<div class='alert alert-danger' role='alert'> <p>The photo and the word could not be updated.</p></div>").insertBefore("#gallery-image-preview-title");
                }
            });
            // $.post("upload.php?id=" + idNum);

        });


        $(".news-delete-button").on("click", function () {

            var selected = $(this).attr("id");

            var idNum = selected.split("-").pop();


            var confirmed = confirm("Are you sure you want to delete this about-us text?");

            if (confirmed == true) {

                //remove from page
                $("#news-row-id-" + idNum).remove();
                $("#gallery-image-preview-div").remove();
                $("#gallery-image-preview-title").remove();


                //remove the text from the form
                $("#title").val("");
                $("#first-option").text("No Option");
                $("#body").val("");

                $.ajax({
                    type: "POST",
                    url: "newsupload.php?id=" + idNum,
                    data: "action=delete",
                    success: function () {
                        $("<div class='alert alert-success' role='alert'> <p>The photo and the word were successfully deleted.</p></div>").insertBefore("#gallery-input-form");
                    },
                    error: function () {
                        $("<div class='alert alert-danger' role='alert'> <p>The photo and the word could not be deleted.</p></div>").insertBefore("#gallery-input-form");
                    }

                });

            }

        });



        $(".users-delete-button").click(function () {

            var selected = $(this).attr("id");
            var idNum = selected.split("-").pop();

            var confirmed = confirm("Are you sure you want to delete this about-us text?");

            if (confirmed == true) {

                $("#user-row-id-" + idNum).remove();

                $.ajax({
                    type: "POST",
                    url: "ajax/users.php?id=" + idNum,
                    data: "action=delete",
                    success: function () {
                        $("<div class='alert alert-success' role='alert'> <p>The user was successfully deleted.</p></div>").insertBefore("#form-start");
                    },
                    error: function () {
                        $("<div class='alert alert-danger' role='alert'> <p>The user could not be deleted.</p></div>").insertBefore("#form-start");
                    }
                });
            }
        });




        $(".users-update-button").on("click", function () {


            var selected = $(this).attr("id");

            var idNum = selected.split("-").pop();

            /*get the values we want to update*/
            var username = $("#username").val();
            var name = $("#name").val();
            var last = $("#last").val();
            var password = $("#password").val();
            var phone = $("#phone").val();
            var address = $("#address").val();
            var email = $("#email").val();
            var privilege = $("input[type='radio']:checked").val();

            var privilegeName;

            switch (privilege) {
                case '1': privilegeName = "admin";
                    break;
                case '2': privilegeName = "operator";
                    break;
                case '3': privilegeName = "user";
                    break;

            }

            /*update on the page the values that we want to be updated*/

            $("#user-col-username-id-" + idNum).text(username);
            $("#user-col-role-id-" + idNum).html("<b>Role: </b>" + privilegeName);
            $("#user-col-name-id-" + idNum).html("<b>Name: </b>" + name);
            $("#user-col-last-id-" + idNum).html("<b>Last Name: </b>" + last);
            $("#user-col-phone-id-" + idNum).html("<b>Phone: </b>" + phone);
            $("#user-col-address-id-" + idNum).html("<b>Address: </b>" + address);
            $("#user-col-email-id-" + idNum).html("<b>Email: </b>" + email);


           $.ajax({
                type: "POST",
                url: "ajax/users.php?id=" + idNum,
                data: "username=" + username + "&action=update" + "&name=" + name + "&last=" + last + "&password=" + password + "&phone=" + phone + "&address=" + address + "&email=" + email + "&privilege=" + privilege, 
                success: function () {
                    $("<div class='alert alert-success' role='alert'> <p>The user was successfully updated.</p></div>").insertBefore("#form-start");
                },
                error: function () {
                    $("<div class='alert alert-danger' role='alert'> <p>The user could not be updated.</p></div>").insertBefore("#form-start");
                }
            });
            // $.post("upload.php?id=" + idNum);

        });


    });



</script>
