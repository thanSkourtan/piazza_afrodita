<?php
    
    
    function get_news_data($dbc){
        
        $query ="SELECT * FROM news ORDER BY id DESC";
        $result = mysqli_query($dbc,$query);
        return $result;
    }

    function get_single_news_data($dbc,$id){
        $q="SELECT * FROM news WHERE id = $id";
        $r=mysqli_query($dbc,$q);
        $row= mysqli_fetch_assoc($r);
        return $row;
    }



    function get_menu_data($dbc){
        $query="SELECT * FROM menu ORDER BY id DESC";
        $result=mysqli_query($dbc,$query);
        return $result;
    }

    function get_single_menu_data($dbc,$id){
        $query="SELECT * FROM menu WHERE id = $id";
        $result = mysqli_query($dbc,$query);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }


    function get_gallery_data($dbc){
        $query = "SELECT * FROM gallery ORDER BY id DESC";
        $result = mysqli_query($dbc,$query);
        return $result;
    }

    function get_single_gallery_data($dbc,$id){
        $query="SELECT* FROM gallery WHERE id = $id";
        $result = mysqli_query($dbc,$query);

        $row = mysqli_fetch_assoc($result);
        return $row;

    }

    function get_about_us_data($dbc){
        $query="SELECT * FROM aboutus ORDER BY id DESC";
        $result=mysqli_query($dbc,$query);
        

        return $result;

    }


    function get_single_about_us_data($dbc,$id){
        $query="SELECT* FROM aboutus WHERE id = $id";
        $result = mysqli_query($dbc,$query);

        $row = mysqli_fetch_assoc($result);
        return $row;
    }



    function get_contact_data($dbc){
        $query="SELECT * FROM contact ORDER BY id DESC";
        $result=mysqli_query($dbc,$query);
        

        return $result;
    }

    function get_reservation_data($dbc){
        $query="SELECT * FROM reservation ORDER BY id DESC";
        $result=mysqli_query($dbc,$query);
        

        return $result;
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

    function get_category_by_id($dbc,$id){
        $q="SELECT * FROM menucategories WHERE id=$id";
        $r=mysqli_query($dbc,$q);
        #since we expect only one result
        $row=mysqli_fetch_assoc($r);
        return $row;
    }

  
    function get_user_data($dbc){
        $q="SELECT * FROM users ORDER BY id DESC";
        $r=mysqli_query($dbc,$q);
        return $r;
    }


    function get_orders_data($dbc){
        $q="SELECT * FROM orders ORDER BY id DESC";
        $r=mysqli_query($dbc,$q);
        return $r;
    }


    function get_menu_data_by_id($dbc,$id){
        $q="SELECT * FROM menu WHERE id = $id";
        $r = mysqli_query($dbc,$q);
        $row = mysqli_fetch_assoc($r);
        return $row;
    }

    function get_single_user_data($dbc,$id){
        $q="SELECT * FROM users WHERE id= $id";
        $r=mysqli_query($dbc,$q);
        $row=mysqli_fetch_assoc($r);
        return $row;
    }

    function show_privilege_level($privilegeLevel){
        switch($privilegeLevel){
            case 1: return "admin";
            break;
            case 2: return "operator";
            break;
            case 3: return "user";
            break;
        }   
    }


    



?>

