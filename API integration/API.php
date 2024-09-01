<?php
header("Content-Type: application/json");
include "../includes/connection.php";

//users
$query_users="SELECT * FROM `users`";
$result_users=mysqli_query($conn , $query_users);
$rows_users=mysqli_num_rows($result_users);
$output_users=array();
    
if($rows_users > 0){
    $users=array();

    while($users_data=mysqli_fetch_assoc($result_users)){
        $users[]=$users_data;
    }

    if(count($users) > 0){
        $output_users['users']=$users;
    }
}

//discounted
$query_discounted="SELECT * FROM `discounted`";
$result_discounted=mysqli_query($conn , $query_discounted);
$rows_discounted=mysqli_num_rows($result_discounted);
$output_discounted=array();
    
if($rows_discounted > 0){
    $discounted=array();

    while($discounted_data=mysqli_fetch_assoc($result_discounted)){
        $discounted[]=$discounted_data;
    }

    if(count($discounted) > 0){
        $output_discounted['discounted']=$discounted;
    }
}

//new
$query_new="SELECT * FROM `new`";
$result_new=mysqli_query($conn , $query_new);
$rows_new=mysqli_num_rows($result_new);
$output_new=array();
    
if($rows_new > 0){
    $new=array();

    while($new_data=mysqli_fetch_assoc($result_new)){
        $new[]=$new_data;
    }

    if(count($new) > 0){
        $output_new['new']=$new;
    }
}

//summer
$query_summer="SELECT * FROM `summer`";
$result_summer=mysqli_query($conn , $query_summer);
$rows_summer=mysqli_num_rows($result_summer);
$output_summer=array();
    
if($rows_summer > 0){
    $summer=array();

    while($summer_data=mysqli_fetch_assoc($result_summer)){
        $summer[]=$summer_data;
    }

    if(count($summer) > 0){
        $output_summer['summer']=$summer;
    }
}

//green
$query_green="SELECT * FROM `green`";
$result_green=mysqli_query($conn , $query_green);
$rows_green=mysqli_num_rows($result_green);
$output_green=array();
    
if($rows_green > 0){
    $green=array();

    while($green_data=mysqli_fetch_assoc($result_green)){
        $green[]=$green_data;
    }

    if(count($green) > 0){
        $output_green['green']=$green;
    }
}

//orders
$query_orders="SELECT * FROM `orders`";
$result_orders=mysqli_query($conn , $query_orders);
$rows_orders=mysqli_num_rows($result_orders);
$output_orders=array();
    
if($rows_orders > 0){
    $orders=array();

    while($orders_data=mysqli_fetch_assoc($result_orders)){
        $orders[]=$orders_data;
    }

    if(count($orders) > 0){
        $output_orders['orders']=$orders;
    }
}


$out_all = $output_users +
           $output_discounted +
           $output_new +
           $output_summer +
           $output_green +
           $output_orders ;

echo json_encode($out_all);

?>