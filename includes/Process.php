<?php
include "connection.php";
include "incProcess.php";

//users
if(isset($_POST['save_user'])){
	
   if(empty($_POST['id_user'])){
       $errors['id_user']="No ID User !";
    }else{
       $id_user = $_POST['id_user'];
   }

   if(empty($_POST['FullName_user'])){
       $errors['FullName_user']="No Full Nme !";
    }else{
       $FullName_user  = $_POST['FullName_user'];
   }

   if(empty($_POST['email_user'])){
       $errors['email_user']="No Email !";
    }else{
       $email_user = $_POST['email_user'];
       if(!preg_match('/^([A-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/', $email_user)){
       $errors['email_user'] = 'No valid email !';
       }   
   }

   if(empty($_POST['username_user'])){
       $errors['username_user']="No User Name !";
    }else{
       $username_user  = $_POST['username_user'];
   }

   if(empty($_POST['phone_user'])){
       $errors['phone_user']="No Phone Number !";
    }else{
       $phone_user = $_POST['phone_user'];
       if(!preg_match('/^\d{10}$/', $phone_user)){
         $errors['phone_user'] = 'Phone 10 Digit !';
       }
   }

   if(empty($_POST['Payment_user'])){
       $errors['Payment_user']="No Select Option !";
    }else{
       $Payment_user = $_POST['Payment_user'];
   }

   if(!array_filter($errors)){
       $id_user = mysqli_real_escape_string($conn , $_POST['id_user']);
       $FullName_user = mysqli_real_escape_string($conn , $_POST['FullName_user']);
       $email_user = mysqli_real_escape_string($conn , $_POST['email_user']);
       $username_user = mysqli_real_escape_string($conn , $_POST['username_user']);
       $phone_user = mysqli_real_escape_string($conn , $_POST['phone_user']);
       $Payment_user = mysqli_real_escape_string($conn , $_POST['Payment_user']);

       $sql="INSERT INTO `users`(`id_user`,`FullName_user`,`email_user`,`username_user`,`phone_user`,`Payment_user`) VALUES('$id_user','$FullName_user','$email_user','$username_user','$phone_user','$Payment_user')";
       if(mysqli_query($conn , $sql)){
          header("Location:View_User.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_users'])){
    $all_id_user=$_GET['delete_users'];

    $sql="DELETE FROM `users` WHERE `all_id_user`='$all_id_user'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:View_User.php');
}

if(isset($_GET['edit_users'])){
    $all_id_user=$_GET['edit_users'];

    $update=true;

    $sql="SELECT * FROM `users` WHERE `all_id_user`='$all_id_user'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $id_user = $row['id_user'];
        $FullName_user = $row['FullName_user'];
        $email_user = $row['email_user'];
        $username_user = $row['username_user'];
        $phone_user = $row['phone_user'];
        $Payment_user = $row['Payment_user'];
    }
}

if(isset($_POST['update_user'])){
    $update=true;
    $all_id_user=$_POST['all_id_user'];

    if(empty($_POST['id_user'])){
       $errors['id_user']="No Update ID User !";
    }else{
       $id_user = $_POST['id_user'];
    }

    if(empty($_POST['FullName_user'])){
       $errors['FullName_user']="No Update Full Name !";
    }else{
       $FullName_user  = $_POST['FullName_user'];
    }

    if(empty($_POST['email_user'])){
       $errors['email_user']="No Update Email !";
    }else{
       $email_user = $_POST['email_user'];
       if(!preg_match('/^([A-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/', $email_user)){
       $errors['email_user'] = 'No valid email !';
       }   
    }

    if(empty($_POST['username_user'])){
       $errors['username_user']="No Update User Name!";
    }else{
       $username_user  = $_POST['username_user'];
    }

    if(empty($_POST['phone_user'])){
       $errors['phone_user']="No Update Phone Number !";
    }else{
       $phone_user = $_POST['phone_user'];
       if(!preg_match('/^\d{10}$/', $phone_user)){
         $errors['phone_user'] = 'Phone 10 Digit !';
       }
   }

    if(empty($_POST['Payment_user'])){
       $errors['Payment_user']="No Update Payment User !";
    }else{
       $Payment_user  = $_POST['Payment_user'];
    }

    if(!array_filter($errors)){
       $id_user = mysqli_real_escape_string($conn , $_POST['id_user']);
       $FullName_user = mysqli_real_escape_string($conn , $_POST['FullName_user']);
       $email_user = mysqli_real_escape_string($conn , $_POST['email_user']);
       $username_user = mysqli_real_escape_string($conn , $_POST['username_user']);
       $phone_user = mysqli_real_escape_string($conn , $_POST['phone_user']);
       $Payment_user = mysqli_real_escape_string($conn , $_POST['Payment_user']);

       $sql="UPDATE `users` SET `id_user`='$id_user' ,`FullName_user`='$FullName_user' , `email_user`='$email_user' , `username_user`='$username_user' , `phone_user`='$phone_user' , `Payment_user`='$Payment_user' WHERE `all_id_user`= '$all_id_user'";

       if(mysqli_query($conn , $sql)){
          header("Location:View_User.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
    } 
}

//dicounted fruits
if(isset($_POST['save_discounted'])){
	
   if(empty($_POST['name_discounted'])){
       $errors['name_discounted']="No Name Discounted !";
    }else{
       $name_discounted = $_POST['name_discounted'];
   }

   if(empty($_POST['price_discounted'])){
       $errors['price_discounted']="No Price Discounted !";
    }else{
       $price_discounted  = $_POST['price_discounted'];
   }

   if(empty($_FILES['img_discounted']['name'])){
        $errors['img_discounted']="No Selected Image !";
     }else{
        $img_discounted =$_FILES['img_discounted']['name'];
        $img_discountedTamp=$_FILES["img_discounted"]["tmp_name"];
        $folderimg_discounted="Upload/" . $img_discounted ;
        move_uploaded_file($img_discountedTamp , $folderimg_discounted);
   }

   if(!array_filter($errors)){
       $name_discounted = mysqli_real_escape_string($conn , $_POST['name_discounted']);
       $price_discounted = mysqli_real_escape_string($conn , $_POST['price_discounted']);
       $img_discounted = mysqli_real_escape_string($conn , $_FILES['img_discounted']['name']);

       $sql="INSERT INTO `discounted`(`name_discounted`,`price_discounted`,`img_discounted`) VALUES('$name_discounted','$price_discounted','$img_discounted')";

       if(mysqli_query($conn , $sql)){
          header("Location:View_Discounted_Fruits.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_discounted'])){
    $id_discounted=$_GET['delete_discounted'];

    $sql="DELETE FROM `discounted` WHERE `id_discounted`='$id_discounted'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:View_Discounted_Fruits.php');
}

if(isset($_GET['edit_discounted'])){
    $id_discounted=$_GET['edit_discounted'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `discounted` WHERE `id_discounted`='$id_discounted'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $name_discounted = $row['name_discounted'];
        $price_discounted = $row['price_discounted'];
        $img_discounted = $row['img_discounted'];
    }

    if(empty($_FILES['img_discounted']['name'])){
        $errors['edit_img_discounted']="Be selected Old image when updating data !!";
    }
}

if(isset($_POST['update_discounted'])){
    $id_discounted=$_POST['id_discounted'];

    if(empty($_POST['name_discounted'])){
       $errors['name_discounted']="No Update Name Discounted !";
    }else{
       $name_discounted = $_POST['name_discounted'];
    }

   if(empty($_POST['price_discounted'])){
       $errors['price_discounted']="No Update Price Discounted !";
    }else{
       $price_discounted = $_POST['price_discounted'];
    }

    if(empty($_FILES['img_discounted']['name'])){
        $errors['img_discounted']="No update image , or the original image must be selected when updating data !!";
     }else{
        $img_discounted  =$_FILES['img_discounted']['name'];
        $img_discountedTamp=$_FILES["img_discounted"]["tmp_name"];
        $folderimg_discounted="Upload/" . $img_discounted ;
        move_uploaded_file($img_discountedTamp , $folderimg_discounted);
    }

    $update=true;

    if(!array_filter($errors)){
       $name_discounted = mysqli_real_escape_string($conn , $_POST['name_discounted']);
       $price_discounted = mysqli_real_escape_string($conn , $_POST['price_discounted']);
       $img_discounted = mysqli_real_escape_string($conn , $_FILES['img_discounted']['name']);

       $sql="UPDATE `discounted` SET `name_discounted`='$name_discounted' ,`price_discounted`='$price_discounted' ,`img_discounted`='$img_discounted' WHERE `id_discounted`= '$id_discounted'";

       if(mysqli_query($conn , $sql)){
          header("Location:View_Discounted_Fruits.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
    } 
}

//new fruits
if(isset($_POST['save_new'])){
	
   if(empty($_POST['name_new'])){
       $errors['name_new']="No Name !";
    }else{
       $name_new = $_POST['name_new'];
   }

   if(empty($_POST['price_new'])){
       $errors['price_new']="No Price !";
    }else{
       $price_new  = $_POST['price_new'];
   }

   if(empty($_FILES['img_new']['name'])){
        $errors['img_new']="No Selected Image !";
     }else{
        $img_new  =$_FILES['img_new']['name'];
        $img_newTamp=$_FILES["img_new"]["tmp_name"];
        $folderimg_new ="Upload/" . $img_new ;
        move_uploaded_file($img_newTamp , $folderimg_new);
   }

   if(!array_filter($errors)){
       $name_new = mysqli_real_escape_string($conn , $_POST['name_new']);
       $price_new = mysqli_real_escape_string($conn , $_POST['price_new']);
       $img_new = mysqli_real_escape_string($conn , $_FILES['img_new']['name']);

       $sql="INSERT INTO `new`(`name_new`,`price_new`,`img_new`) VALUES('$name_new','$price_new','$img_new')";

       if(mysqli_query($conn , $sql)){
          header("Location:View_New_Fruits.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_new'])){
    $id_new=$_GET['delete_new'];

    $sql="DELETE FROM `new` WHERE `id_new`='$id_new'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:View_New_Fruits.php');
}

if(isset($_GET['edit_new'])){
    $id_new=$_GET['edit_new'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `new` WHERE `id_new`='$id_new'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $name_new = $row['name_new'];
        $price_new = $row['price_new'];
        $img_new = $row['img_new'];
    }

    if(empty($_FILES['img_new']['name'])){
        $errors['edit_img_new']="Be selected Old image when updating data !!";
    }
}

if(isset($_POST['update_new'])){
    $id_new=$_POST['id_new'];

    if(empty($_POST['name_new'])){
       $errors['name_new']="No Update Name !";
    }else{
       $name_new = $_POST['name_new'];
    }

   if(empty($_POST['price_new'])){
       $errors['price_new']="No Update Price !";
    }else{
       $price_new = $_POST['price_new'];
    }

    if(empty($_FILES['img_new']['name'])){
        $errors['img_new']="No update image , or the original image must be selected when updating data !!";
     }else{
        $img_new = $_FILES['img_new']['name'];
        $img_newTamp=$_FILES["img_new"]["tmp_name"];
        $folderimg_new ="Upload/" . $img_new ;
        move_uploaded_file($img_newTamp , $folderimg_new );
    }

    $update=true;

    if(!array_filter($errors)){
       $name_new = mysqli_real_escape_string($conn , $_POST['name_new']);
       $price_new = mysqli_real_escape_string($conn , $_POST['price_new']);
       $img_new = mysqli_real_escape_string($conn , $_FILES['img_new']['name']);

       $sql="UPDATE `new` SET `name_new`='$name_new' ,`price_new`='$price_new' ,`img_new`='$img_new' WHERE `id_new`= '$id_new'";

       if(mysqli_query($conn , $sql)){
          header("Location:View_New_Fruits.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
    } 
}

//Summer fruits
if(isset($_POST['save_summer'])){
	
   if(empty($_POST['name_summer'])){
       $errors['name_summer']="No Name !";
    }else{
       $name_summer = $_POST['name_summer'];
   }

   if(empty($_POST['price_summer'])){
       $errors['price_summer']="No Price !";
    }else{
       $price_summer  = $_POST['price_summer'];
   }

   if(empty($img_summer = $_FILES['img_summer']['name'])){
        $errors['img_summer']="No Selected Image !";
     }else{
        $img_summer =$_FILES['img_summer']['name'];
        $img_summerTamp=$_FILES["img_summer"]["tmp_name"];
        $folderimg_summer="Upload/" . $img_summer;
        move_uploaded_file($img_summerTamp , $folderimg_summer);
   }

   if(!array_filter($errors)){
       $name_summer = mysqli_real_escape_string($conn , $_POST['name_summer']);
       $price_summer = mysqli_real_escape_string($conn , $_POST['price_summer']);
       $img_summer= mysqli_real_escape_string($conn , $_FILES['img_summer']['name']);

       $sql="INSERT INTO `summer`(`name_summer`,`price_summer`,`img_summer`) VALUES('$name_summer','$price_summer','$img_summer')";

       if(mysqli_query($conn , $sql)){
          header("Location:View_Summer_Fruits.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_summer'])){
    $id_summer=$_GET['delete_summer'];

    $sql="DELETE FROM `summer` WHERE `id_summer`='$id_summer'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:View_Summer_Fruits.php');
}

if(isset($_GET['edit_summer'])){
    $id_summer=$_GET['edit_summer'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `summer` WHERE `id_summer`='$id_summer'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $name_summer = $row['name_summer'];
        $price_summer = $row['price_summer'];
        $img_summer = $row['img_summer'];
    }

    if(empty($_FILES['img_summer']['name'])){
        $errors['edit_img_summer']="Be selected Old image when updating data !!";
    }
}

if(isset($_POST['update_summer'])){
    $id_summer=$_POST['id_summer'];

    if(empty($_POST['name_summer'])){
       $errors['name_summer']="No Update Name !";
    }else{
       $name_summer = $_POST['name_summer'];
    }

   if(empty($_POST['price_summer'])){
       $errors['price_summer']="No Update Price !";
    }else{
       $price_summer  = $_POST['price_summer'];
    }

    if(empty($img_summer = $_FILES['img_summer']['name'])){
        $errors['img_summer']="No update image , or the original image must be selected when updating data !!";
     }else{
        $img_summer =$_FILES['img_summer']['name'];
        $img_summerTamp=$_FILES["img_summer"]["tmp_name"];
        $folderimg_summer="Upload/" . $img_summer;
        move_uploaded_file($img_summerTamp , $folderimg_summer);
    }

    $update=true;

    if(!array_filter($errors)){
       $name_summer = mysqli_real_escape_string($conn , $_POST['name_summer']);
       $price_summer = mysqli_real_escape_string($conn , $_POST['price_summer']);
       $img_summer= mysqli_real_escape_string($conn , $_FILES['img_summer']['name']);

       $sql="UPDATE `summer` SET `name_summer`='$name_summer' ,`price_summer`='$price_summer' ,`img_summer`='$img_summer' WHERE `id_summer`= '$id_summer'";

       if(mysqli_query($conn , $sql)){
          header("Location:View_Summer_Fruits.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
    } 
}

//green fruits
if(isset($_POST['save_green'])){
	
   if(empty($_POST['name_green'])){
       $errors['name_green']="No Name !";
    }else{
       $name_green = $_POST['name_green'];
   }

   if(empty($_POST['price_green'])){
       $errors['price_green']="No Price !";
    }else{
       $price_green  = $_POST['price_green'];
   }

   if(empty($img_green = $_FILES['img_green']['name'])){
        $errors['img_green']="No Selected Image !";
     }else{
        $img_green =$_FILES['img_green']['name'];
        $img_greenTamp=$_FILES["img_green"]["tmp_name"];
        $folderimg_green="Upload/" . $img_green;
        move_uploaded_file($img_greenTamp , $folderimg_green);
   }

   if(!array_filter($errors)){
       $name_green = mysqli_real_escape_string($conn , $_POST['name_green']);
       $price_green = mysqli_real_escape_string($conn , $_POST['price_green']);
       $img_green= mysqli_real_escape_string($conn , $_FILES['img_green']['name']);

       $sql="INSERT INTO `green`(`name_green`,`price_green`,`img_green`) VALUES('$name_green','$price_green','$img_green')";

       if(mysqli_query($conn , $sql)){
          header("Location:View_Green_Fruits.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_green'])){
    $id_green=$_GET['delete_green'];

    $sql="DELETE FROM `green` WHERE `id_green`='$id_green'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:View_Green_Fruits.php');
}

if(isset($_GET['edit_green'])){
    $id_green=$_GET['edit_green'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `green` WHERE `id_green`='$id_green'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $name_green = $row['name_green'];
        $price_green = $row['price_green'];
        $img_green = $row['img_green'];
    }

    if(empty($_FILES['img_green']['name'])){
        $errors['edit_img_green']="Be selected Old image when updating data !!";
    }
}

if(isset($_POST['update_green'])){
    $id_green=$_POST['id_green'];

    if(empty($_POST['name_green'])){
       $errors['name_green']="No Update Name !";
    }else{
       $name_green = $_POST['name_green'];
    }

   if(empty($_POST['price_green'])){
       $errors['price_green']="No Update Price !";
    }else{
       $price_green = $_POST['price_green'];
    }

    if(empty($img_green = $_FILES['img_green']['name'])){
        $errors['img_green']="No update image , or the original image must be selected when updating data !!";
     }else{
        $img_green =$_FILES['img_green']['name'];
        $img_greenTamp=$_FILES["img_green"]["tmp_name"];
        $folderimg_green="Upload/" . $img_green;
        move_uploaded_file($img_greenTamp , $folderimg_green);
    }

    $update=true;

    if(!array_filter($errors)){
       $name_green = mysqli_real_escape_string($conn , $_POST['name_green']);
       $price_green = mysqli_real_escape_string($conn , $_POST['price_green']);
       $img_green= mysqli_real_escape_string($conn , $_FILES['img_green']['name']);

       $sql="UPDATE `green` SET `name_green`='$name_green' ,`price_green`='$price_green' ,`img_green`='$img_green' WHERE `id_green`= '$id_green'";

       if(mysqli_query($conn , $sql)){
          header("Location:View_Green_Fruits.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
    } 
}

//orders
if(isset($_POST['save_orders'])){
	
   if(empty($_POST['user_name_order'])){
       $errors['user_name_order']="No User Name !";
   }else{
       $user_name_order = $_POST['user_name_order'];
   }

   if(empty($Phone_number_order = $_POST['Phone_number_order'])){
      $errors['Phone_number_order']="No Phone Number !";
   }else{
      $Phone_number_order = $_POST['Phone_number_order'];
      if(!preg_match('/^\d{10}$/', $Phone_number_order)){
          $errors['Phone_number_order'] = 'Phone 10 Digit !';
      }
   }

   if(empty($_POST['location_order'])){
      $errors['location_order']="No Location !";
   }else{
      $location_order = $_POST['location_order'];
   }

   if(empty($_POST['order_name_order'])){
      $errors['order_name_order']="No Order Name !";
   }else{
      $order_name_order  = $_POST['order_name_order'];
   }

   if(empty($_POST['Payment_Order'])){
       $errors['Payment_Order']="No Select Option !";
    }else{
       $Payment_Order = $_POST['Payment_Order'];
   }

   if(empty($_POST['total_price'])){
       $errors['total_price']="No Total Price !";
    }else{
       $total_price = $_POST['total_price'];
   }

   if(empty($_POST['qrt'])){
      $errors['qrt']="No QRT !";
   }else{
      $qrt = $_POST['qrt'];
   }

   if(!array_filter($errors)){
       $user_name_order = mysqli_real_escape_string($conn , $_POST['user_name_order']);
       $Phone_number_order = mysqli_real_escape_string($conn , $_POST['Phone_number_order']);
       $location_order = mysqli_real_escape_string($conn , $_POST['location_order']);
       $order_name_order = mysqli_real_escape_string($conn , $_POST['order_name_order']);
       $Payment_Order = mysqli_real_escape_string($conn , $_POST['Payment_Order']);
       $total_price = mysqli_real_escape_string($conn , $_POST['total_price']);
       $qrt = mysqli_real_escape_string($conn , $_POST['qrt']);

       $sql="INSERT INTO `orders`(`user_name_order`,`Phone_number_order`,`location_order`,`order_name_order`,`Payment_Order`,`total_price`,`qrt`) VALUES('$user_name_order','$Phone_number_order','$location_order','$order_name_order','$Payment_Order','$total_price','$qrt')";

       if(mysqli_query($conn , $sql)){
          header("Location:View_Orders.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_orders'])){
    $id_orders=$_GET['delete_orders'];

    $sql="DELETE FROM `orders` WHERE `id_orders`='$id_orders'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:View_Orders.php');
}

if(isset($_GET['edit_orders'])){
    $id_orders=$_GET['edit_orders'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `orders` WHERE `id_orders`='$id_orders'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $user_name_order = $row['user_name_order'];
        $Phone_number_order = $row['Phone_number_order'];
        $location_order = $row['location_order'];
        $order_name_order = $row['order_name_order'];
        $Payment_Order = $row['Payment_Order'];
        $total_price = $row['total_price'];
        $qrt = $row['qrt'];
    }
}

if(isset($_POST['update_orders'])){
   $id_orders=$_POST['id_orders'];

   if(empty($_POST['user_name_order'])){
       $errors['user_name_order']="No Update Name Order !";
   }else{
       $user_name_order = $_POST['user_name_order'];
   }

   if(empty($Phone_number_order = $_POST['Phone_number_order'])){
      $errors['Phone_number_order']="No Update Phone Number !";
   }else{
      $Phone_number_order = $_POST['Phone_number_order'];
      if(!preg_match('/^\d{10}$/', $Phone_number_order)){
          $errors['Phone_number_order'] = 'Phone 10 Digit !';
      }
   }

   if(empty($_POST['location_order'])){
      $errors['location_order']="No Update Location Order !";
   }else{
      $location_order = $_POST['location_order'];
   }

   if(empty($_POST['order_name_order'])){
      $errors['order_name_order']="No Update Order Name !";
   }else{
      $order_name_order = $_POST['order_name_order'];
   }

   if(empty($_POST['Payment_Order'])){
       $errors['Payment_Order']="No Update Any Options !";
    }else{
       $Payment_Order = $_POST['Payment_Order'];
   }

   if(empty($_POST['total_price'])){
       $errors['total_price']="No Update Total Price !";
    }else{
       $total_price = $_POST['total_price'];
   }

   if(empty($_POST['qrt'])){
      $errors['qrt']="No Update QRT !";
   }else{
      $qrt = $_POST['qrt'];
   }

    $update=true;

    if(!array_filter($errors)){
       $user_name_order = mysqli_real_escape_string($conn , $_POST['user_name_order']);
       $Phone_number_order = mysqli_real_escape_string($conn , $_POST['Phone_number_order']);
       $location_order = mysqli_real_escape_string($conn , $_POST['location_order']);
       $order_name_order = mysqli_real_escape_string($conn , $_POST['order_name_order']);
       $Payment_Order = mysqli_real_escape_string($conn , $_POST['Payment_Order']);
       $total_price = mysqli_real_escape_string($conn , $_POST['total_price']);
       $qrt = mysqli_real_escape_string($conn , $_POST['qrt']);

       $sql="UPDATE `orders` SET `user_name_order`='$user_name_order' ,`Phone_number_order`='$Phone_number_order' ,`location_order`='$location_order' ,`order_name_order`='$order_name_order' ,`Payment_Order`='$Payment_Order' ,`total_price`='$total_price' ,`qrt`='$qrt' WHERE `id_orders`= '$id_orders'";

       if(mysqli_query($conn , $sql)){
          header("Location:View_Orders.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
    } 
}


?>