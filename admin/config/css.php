<!--Import the bootstrap files-->
<link rel = "stylesheet" type="text/css" href ="css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css" href ="css/bootstrap-theme.min.css">
<!--Import the jquery-ui css file-->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
<!--Import the font awesome css file. Already imported the fonts folder in the site.-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">


<style>

    /*the object-fit value to cover makes the image fill, not stretch. Valid for all images of the site*/
    img{
        object-fit: cover;
        
        
    }
    
    
    body {
        background-color: #F0F1EC;
    }
    
    /*Overrides the bootstrap's style of <hr> which, I don't know why, but it's kind of weird.*/
    hr {
        height: 1px;
        background-color:#555;
        width: 100%;
    }
    
    footer {
        text-align: center;
    }
    
    #login-panel{
        margin-top: 60px;
    }
    /*override the bootstrap list-group file in order to align vertically the listgroup*/
    .list-group {
        padding-left: 15px;
    }
    
    /*override the corresponding bootstrap settings*/
    #menu-list-group{
        padding: 0;
    }
    
    #menu-col-list-group{
        padding-left: 0;
    }
    
    #menu-right-col{
        padding-right: 29px;
        margin-top: -25px;
    }
    
    #subpage-title{
        margin-bottom: 40px;
        
    }
    
    #menu-dropdown-button{
        margin-bottom:30px;
    }
    
    .menu-image{
        width: 100%;
        height: 65px;
        margin-top: 5px;
    }
    
    .menu-category-text{
        margin-top: 6px;
    }
    
    .menu-right-side-group-list{
        padding-right: 0px;
    }

    .gallery-image {
        width: 100%;
        height: 65px;
        margin-top: 5px;
    }

    .gallery-column {
        text-align: center;
    }
    
    #gallery-preview-image{
        width:400px;
        height: 300px;
        margin-bottom: 30px;
    }
    .list-group{
        padding-left:0;            
    }
    
    #about-us-submit-button{
        margin-top: 16px;
    }

    #reservation-list-group-trendycolour {
        background-color: aliceblue;
    }
    
</style>