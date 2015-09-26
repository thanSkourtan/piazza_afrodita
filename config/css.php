<!--Import the bootstrap files-->
<link rel = "stylesheet" type="text/css" href ="css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css" href ="css/bootstrap-theme.min.css">
<!--Import the jquery-ui css file-->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
<!--Import the font awesome css file. Already imported the fonts folder in the site.-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!--Import fonts from google fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>


<style>

    body {
        background-color: #F0F1EC;
        /*font-family: 'Open Sans Condensed', sans-serif;
        font-size: 30px;*/
    }
    
    /*the object-fit value to cover makes the image fill, not stretch. Valid for all images of the site*/
    img{
        object-fit: cover;
        
        
    }

    h3 {
        font-size: 30px;
    }
    
    /*Here we should have used a class selector. However, due to specificity issues(the .carousel-inner>.item>img class is appears more specific that the class that would be placed in the images, so the height that is set to auto cannot be overriden) we chose to place an id to each of the images. The height is set to 613px, so as to almost cover the whole screen of the user.*/
    #carousel-image1, #carousel-image2, #carousel-image3 {
        height: 613px;
        
    }
    /*Here we place the navigation menu at the top layer, in front of the carousel. However, the z-index works only for positioned elements, so we use this attribute.*/
    #left-navigation {
        position: relative;
        z-index: 1;
        margin: 20px;/*in order to get in the same line with logo*/
        /*In the two navigation bars and logo, we replaced the float:left element with display: inline-block. This solution is perfect because it allowed us to align the element contained in the container div in the center of the screen*/
        display: inline-block;
    }
    
    #right-navigation {
        position: relative;
        z-index: 1;
        display: inline-block;
        margin: 20px;
    }
    /*speaking in terms of game development, absolute makes the element as if it is "not having a collider", being transparent for the rest of the elements. So it is a perfect solution if we need to place elements in layers.*/
    #container {
        width: 100%;
        position: absolute;
        text-align: center;
        top: 40px;
    }
    /*We move the carousel to the top of the page by covering the height of the navigation menu. */
    #carousel-example-generic {
       /* top:-69px;*/
    }
    /*We moved the carousel up, and this leaves a space of 40px to the bottom. So we set the height of the header (parent element of the carousel) to exactly the same as the carousel so that the next element would start right afterwards.*/
    header {
        height: 613px;
    }

    .carousel-indicators {
        z-index: 1;
    }

    #logo {
        position: relative;
        z-index: 1;
        display: inline-block;
        /*all the below elements have to do with the coloring of the letters and the transparency of the background*/
        color: #fff;
        background-color: /*rgba(0, 0, 0, 0.45);*/rgba(112, 6, 20, 0.61);
        border-radius: 4px;
        bottom: 26px;
        /*makes the difference*/
        padding: 25px;
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 69px;
    }

    .menu-links {
        background-color: /*rgba(0, 0, 0, 0.65);*/rgba(112, 6, 20, 0.61);
        color: #fff;
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 27px;
    }

    #login-buttons {
        position: absolute;
        z-index: 1;
        text-align: right;
        width: 100%;
        margin-top: 10px;
        padding-right: 5px;
    }

    .btn btn-default {
        
    }
    /*Setting the dimensions of the middle section images*/
    .section-image {
        height: auto;
        width: 100%;
        max-height: 314px;
        
    }

    #hot-deals,#special-dish {
        text-align: center;
        padding: 80px;  
        margin-top: -70px; 
    }

    .secondary-middle-section-title {
        padding: 10px;
    }

    .middle-section-article-wrapper {
        background-color: #fff;
    }

    #home-news {
        
        text-align: center;
    }

    .news-image {
        width:100%;
        height:auto;
        max-height: 310px;
        
    }

    .news-article {
        text-align: center;
        padding: 84px;
        padding-top: 27px;
    }

    #book-in-advance {
        background-color: #700614;
        padding: 20px;
        margin: 60px;
    }

    .book-now-text {
        color: #fff;
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 42px;
    }

    #book-now-button {
        padding: 20px;
        margin-top: 7px;
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 30px;
        
    }

    footer {
        text-align: center;
    }
    /*Overrides the bootstrap's style of <hr> which, I don't know why, but it's kind of weird.*/
    hr {
    height: 1px;
    background-color:black;
    width: 94%;
    }

    .news-text {
        text-align: left;
    }

    .news-bottom-box {
        background-color: #fff;
        padding: 10px;
    }
    
    
    #wrapper-secondary-pages{
        margin-top: 80px;
    }
    
    #reservation-button-wrapper{
        text-align: center;
    }
    /*overriding bootstrap's panel default color*/
    #reservation-panel{
        border-color: #460817;
    }
    /*overriding bootstrap's panel default color*/
    #reservation-panel-heading{
        background-image: linear-gradient(to bottom,#450616 0,#5C0E12 100%);
    }
    
    #reservation-title-important{
        text-align: center;
    }
    
    #reservation-important-text{
        margin-bottom: 25px;
    }
    
    
    
    #map-canvas{
        height: 400px;
        background-color: #CCC;
        /*just border stuff. makes the difference!*/
        border-color: #4E0914;
        border-style: solid;
        border-width: 1px;
    }
    
    #reservation-contact-info{
        margin-top: 21px;
    }
    
    
    #contact-button-wrapper{
        text-align: center;
    }
    
    
    .gallery-image{
        width: 100%;
        max-height: 197px;
        padding: 20px;
    }
    
    .image-wrapper{
        margin-bottom: 30px;
        background: #fff;
        position: relative;
        
    }
    #gallery-title{
        text-align: center;
        margin-bottom: 30px;
    }
    /*override the bootstraps styling(changing color)*/
    .panel-default>.panel-heading {
        background-image: linear-gradient(to bottom,#450616 0,#5C0E12 100%);
        color: #fff;
        text-align: center;
     }

    .panel-default {
        border-color: #621617;
    }

    .panel-group .panel {
        margin-bottom: 6px;
    }
    
    
    .menu-image{
        width: 100%;
        height: 135px;
    }
    
    .menu-separator{
        width: 100%;
    }
    
    .news-row{
        margin-bottom: 42px;
    }
    
    #news-title-wrapper{
        text-align: center;
        margin-bottom: 60px;
    }
    
    .image-wrapper{
        overflow: hidden;
    }
    
    
    /*when the mouse is over the galleries image increase their scale to 1.08%*/
   /* .gallery-image:hover{
        
        -webkit-transform: scale(1.08);
        -moz-transform: scale(1.08);
        -o-transform: scale(1.08);
        -ms-transform: scale(1.08);
        transform:  scale(1.08);*/
        
      /*  -webkit-transform: scale(1.08);
        -moz-transform: scale(1.08);
        -o-transform: scale(1.08);
        -ms-transform: scale(1.08);
        transform: scale(1.08)
            
        -webkit-transform:translate(1px,2px);
        -moz-transform:translate(1px,2px);
        -o-transform:translate(1px,2px);
        -ms-transform:translate(1px,2px);
        transform:translate(1px,2px);
        
        transform: skew(5deg, 10deg);*/
      
      /*  -webkit-transition-property: transform;
        -moz-transition-property: transform;
        -o-transition-property: transform;
        transition-property: transform;
        
        -webkit-transition-duration: 1s;
        -moz-transition-duration: 1s;
        -o-transition-duration: 1s;
        transition-duration: 1s;
        
        -webkit-transition-timing-function: linear;
        -moz-transition-timing-function: linear;
        -o-transition-timing-function: linear;
        transition-timing-function: linear;*/
      
        /*shorthand for the above 
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        -ms-transition: all 1s ease;
        transition: all 1s ease;
       
    }*/

    /*on hover on image-wrapper go and affect the */
    .image-wrapper:hover .gallery-image-spider {
        top: 0;
        opacity: 0.7;
        z-index: 1;
        
    }
    
    
    .gallery-image-spider {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color:#fff;
        opacity: 0;
        top: 50%;
        transition: all 0.5s linear;
        text-align: center;
        z-index:-1;
    }

    .gallery-decorative-text {
            padding-top: 65px;
    }


    #fancy-image-wrapper {
        position: absolute;
        height:auto;
        z-index: 100;
        background-color: #fff;
    }
    
    .fancy-image{
        width: 100%;
        height: 500px;
        padding: 40px 25px 40px 25px;
        -moz-user-select: none;
	    -webkit-user-select: none;
	    user-select: none;
        
    }
    
    .fancy-image-wrapper{
        
    }

    #gallery-left-arrow {
            position: absolute;
            top: 50%;
            left: 10px;
    }
    
    #gallery-right-arrow {
            position: absolute;
            top: 50%;
            right: 12px;
    }

    #gallery-right-arrow:hover {
        color: red;
        transition: all 0.3s linear;
        -webkit-transform: scale(1.08);
        -moz-transform: scale(1.08);
        -o-transform: scale(1.08);
        -ms-transform: scale(1.08);
        transform: scale(1.5);
        
    }
    
    #gallery-left-arrow:hover {
        color: red;
        -webkit-transform: scale(1.08);
        -moz-transform: scale(1.08);
        -o-transform: scale(1.08);
        -ms-transform: scale(1.08);
        transform: scale(1.5);
        transition: all 0.3s linear;
    }

    .order-image {
            width: 100%;
            height: auto;
            max-height: 90px;
    }

    label.order-checkbox-label {
        padding-left:52px;
    }

    #order-middle-column {
     margin-top: -9px;
     margin-bottom: -17px;
    }

    #order-button {
        margin-top: 14px;
    }

    .quantity {
        width: 50px;
        
        margin-top: 3px;
    }

    .quantity-label {
        margin-left: 12px;

    }

    .order-checkbox {
        margin-left: 45px;
    }

    #order-reset-button {
       margin-top:  14px;
    }


    #home-user-button {
        display: none;
    }

    #login-user-buttons {
        display: none;
    }

    #header-drop-down-button {
        margin-right: 14px;
    }
    
    #login-signup-panel{
        margin-top:80px;   
    }


    #fancy-image-effect {    
        width: 100%;
        height: 500px;
        z-index: 1;
        background: url(images//homeimage.jpg);
        background-position: center top;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        padding: 0;
        -webkit-filter: blur(10px);
    }

    #fancy-image-panel {
            clear: both;
            font-size: 20px;
            line-height: 32px;
            text-align: center;
            font-weight: 300;
            font-style: italic;
            color: #fff;
            font-family: 'Open Sans Condensed', sans-serif;
            top: 1000px;
            position: absolute;
            width: 700px;
            border-style: solid;
            border-width: medium;
            font-size: 30px;
            padding: 30px;
    }

    .first-logo{
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 70px;
    }



    .second-logo {
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 42px;
    }

    #home-news {
        margin-top: 60px;
    }
    
</style>    