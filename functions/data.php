<?php
    
    
    function get_gallery_data($dbc){
        $query="SELECT * FROM gallery";
        $result=mysqli_query($dbc,$query);
        return $result;
    }

    function get_about_us_data($dbc){
        $query="SELECT * FROM aboutus WHERE checked = 1";
        $result=mysqli_query($dbc,$query);
        $row = mysqli_fetch_assoc($result);

        return $row;
    }


    function get_menu_data($dbc){
        $q="SELECT * FROM menu";
        $result = mysqli_query($dbc,$q);
        return $result;
    }

    function get_news_data($dbc){
        $q="SELECT * FROM news";
        $r=mysqli_query($dbc,$q);
        return $r;
    }

    function get_single_user_data($dbc,$id){
        $q="SELECT * FROM users WHERE id= $id";
        $r=mysqli_query($dbc,$q);
        $row=mysqli_fetch_assoc($r);
        return $row;
    }

    function get_category_data($dbc){
        $q="SELECT * FROM menucategories";
        $r=mysqli_query($dbc,$q);
        return $r;
    }


    function get_menu_by_category($dbc,$categoryId){
        $q="SELECT * FROM menu WHERE categoryId=$categoryId";
        $r=mysqli_query($dbc,$q);
        return $r;
    }


?>

