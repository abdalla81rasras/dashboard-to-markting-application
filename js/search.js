function search(){

    var search = document.getElementById("search").value;

    if(search=="View User"){
        location.href="View_User.php";
        return false;

    }else if(search=="Add User"){
        location.href="Add_user.php";
        return false;

    }else if(search=="View Discounted Fruits"){
        location.href="View_Discounted_Fruits.php";
        return false;

    }else if(search=="Add Discounted Fruits"){
        location.href="Add_Discounted_Fruits.php";
        return false;

    }else if(search=="View New Fruits"){
        location.href="View_New_Fruits.php";
        return false;

    }else if(search=="Add New Fruits"){
        location.href="Add_New_Fruits.php";
        return false;

    }else if(search=="View Summer Fruits"){
        location.href="View_Summer_Fruits.php";
        return false;

    }else if(search="Add Summer Fruits"){
        location.href="Add_Summer_Fruits.php";
        return false;

    }else if(search=="View Green Fruits"){
        location.href="View_Green_Fruits.php";
        return false;

    }else if(search=="Add Green Fruits"){
        location.href="Add_Green_Fruits.php";
        return false;

    }else if(search=="View Orders"){
        location.href="View_Orders.php";
        return false;

    }else if(search=="Add Order"){
        location.href="Add_Orders.php";
        return false;

    }else {
       alert("not found page !")
    }
}