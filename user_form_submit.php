<?php include ('include/db.php') ?>

<?php  





if(isset($_POST['submit'])){

// echo '<pre>';
// print_r($_POST);
// die();

// $image1=$_POST['image1'];
// $image_2=$_POST['image_2'];
// $image_3=$_POST['image_3'];
// $image_4=$_POST['image_4'];
// $image_5=$_POST['image_5'];
// $image_6=$_POST['image_6'];


    //----------------image1-----------------------------

if(empty($_FILES["image1"]["name"])){
 $update_thumbnail_name1;
}else{
  $thumbnail1 = $_FILES["image1"]["name"];
  $tempname1 = $_FILES["image1"]["tmp_name"];
  $path_info1 = pathinfo($thumbnail1, PATHINFO_EXTENSION);
  $path_extension1 = array('pdf', 'jpg', 'jpeg', 'png', 'gif');
  if (in_array($path_info1, $path_extension1)) {
    $update_thumbnail_name1 = rand() . "." . $path_info1;
    $move_thumbnail_path1 = "images/user_images/".$update_thumbnail_name1;
    if (!move_uploaded_file($tempname1, $move_thumbnail_path1)) {
      $update_thumbnail_name1 = '';
    }
  } else {
    echo "only this ('pdf', 'jpg', 'jpeg', 'png', 'gif') format.";
    return false;
  }
}

    //----------------image2-----------------------------
if(empty($_FILES["image2"]["name"])){
 $update_thumbnail_name2;
}else{

  $thumbnail2 = $_FILES["image2"]["name"];
  $tempname2 = $_FILES["image2"]["tmp_name"];
  $path_info2 = pathinfo($thumbnail2, PATHINFO_EXTENSION);
  $path_extension2 = array('pdf', 'jpg', 'jpeg', 'png', 'gif');
  if (in_array($path_info2, $path_extension2)) {
    $update_thumbnail_name2 = rand() . "." . $path_info2;
    $move_thumbnail_path2 = "images/user_images/".$update_thumbnail_name2;
    if (!move_uploaded_file($tempname2, $move_thumbnail_path2)) {
      $update_thumbnail_name2 = '';
    }
  } else {
    echo "only this ('pdf', 'jpg', 'jpeg', 'png', 'gif') format.";
    return false;
  }

}


    //----------------image3-----------------------------
if(empty($_FILES["image3"]["name"])){
 $update_thumbnail_name3;
}else{

  $thumbnail3 = $_FILES["image3"]["name"];
  $tempname3 = $_FILES["image3"]["tmp_name"];
  $path_info3 = pathinfo($thumbnail3, PATHINFO_EXTENSION);
  $path_extension3 = array('pdf', 'jpg', 'jpeg', 'png', 'gif');
  if (in_array($path_info3, $path_extension3)) {
    $update_thumbnail_name3 = rand() . "." . $path_info3;
    $move_thumbnail_path3 = "images/user_images/".$update_thumbnail_name3;
    if (!move_uploaded_file($tempname3, $move_thumbnail_path3)) {
      $update_thumbnail_name3 = '';
    }
  } else {
    echo "only this ('pdf', 'jpg', 'jpeg', 'png', 'gif') format.";
    return false;
  }

}

//----------------image4-----------------------------
if(empty($_FILES["image4"]["name"])){
 $update_thumbnail_name4;
}else{
  $thumbnail4 = $_FILES["image4"]["name"];
  $tempname4 = $_FILES["image4"]["tmp_name"];
  $path_info4 = pathinfo($thumbnail4, PATHINFO_EXTENSION);
  $path_extension4 = array('pdf', 'jpg', 'jpeg', 'png', 'gif');
  if (in_array($path_info4, $path_extension4)) {
    $update_thumbnail_name4 = rand() . "." . $path_info4;
    $move_thumbnail_path4 = "images/user_images/".$update_thumbnail_name4;
    if (!move_uploaded_file($tempname4, $move_thumbnail_path4)) {
      $update_thumbnail_name4 = '';
    }
  } else {
    echo "only this ('pdf', 'jpg', 'jpeg', 'png', 'gif') format.";
    return false;
  }

}


//----------------image5-----------------------------

if(empty($_FILES["image5"]["name"])){
 $update_thumbnail_name5;
}else{

  $thumbnail5 = $_FILES["image5"]["name"];
  $tempname5 = $_FILES["image5"]["tmp_name"];
  $path_info5 = pathinfo($thumbnail5, PATHINFO_EXTENSION);
  $path_extension5 = array('pdf', 'jpg', 'jpeg', 'png', 'gif');
  if (in_array($path_info5, $path_extension5)) {
    $update_thumbnail_name5 = rand() . "." . $path_info5;
    $move_thumbnail_path5 = "images/user_images/".$update_thumbnail_name5;
    if (!move_uploaded_file($tempname5, $move_thumbnail_path5)) {
      $update_thumbnail_name5 = '';
    }
  } else {
    echo "only this ('pdf', 'jpg', 'jpeg', 'png', 'gif') format.";
    return false;
  }

}
//----------------image6-----------------------------

if(empty($_FILES["image6"]["name"])){
 $update_thumbnail_name6;
}else{

  $thumbnail6 = $_FILES["image6"]["name"];
  $tempname6 = $_FILES["image6"]["tmp_name"];
  $path_info6 = pathinfo($thumbnail6, PATHINFO_EXTENSION);
  $path_extension6 = array('pdf', 'jpg', 'jpeg', 'png', 'gif');
  if (in_array($path_info6, $path_extension6)) {
    $update_thumbnail_name6 = rand() . "." . $path_info6;
    $move_thumbnail_path6 = "images/user_images/".$update_thumbnail_name6;
    if (!move_uploaded_file($tempname6, $move_thumbnail_path6)) {
      $update_thumbnail_name6 = '';
    }
  } else {
    echo "only this ('pdf', 'jpg', 'jpeg', 'png', 'gif') format.";
    return false;
  }

}

$name=$_POST['name'];
$email=$_POST['email'];
$phone_no=$_POST['phone_no'];
$whatsapp_no=$_POST['whatsapp_no'];
$website=$_POST['website'];
$google_map_link=$_POST['google_map_link'];
$about_business=$_POST['about_business'];
$radio=$_POST['radio'];


  date_default_timezone_set('Asia/Calcutta'); 

  $create_date=date('Y-m-d');
  $create_time=date('H:i:s');






$user_form_q="INSERT INTO `user_details_tbl`( `name`, `email`, `phone_no`, `whatsapp_no`, `website`, `google_map_link`, `about_business`, `radio`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `create_date`, `create_time`) VALUES ('$name','$email','$phone_no','$whatsapp_no','$website','$google_map_link','$about_business','$radio','$update_thumbnail_name1','$update_thumbnail_name2','$update_thumbnail_name3','$update_thumbnail_name4','$update_thumbnail_name5','$update_thumbnail_name6','$create_date','$create_time')";
 $result=mysqli_query($conn,$user_form_q);
 if($result){
$user_fetch="SELECT * FROM `user_details_tbl` WHERE `email`='$email'";
$user_fetch_sql=mysqli_query($conn,$user_fetch);

$user_row=mysqli_fetch_assoc($user_fetch_sql);
$user_id=$user_row['user_id'];




//------------------------add service Name & Image----------------


$count=count($_FILES["service_image"]["name"]);


   // echo $count;

    for($i=0; $i<$count; $i++){

  $service_name=$_POST['service_name'][$i];

  $thumbnail = $_FILES["service_image"]["name"][$i];
  $tempname = $_FILES["service_image"]["tmp_name"][$i];
  $path_info = pathinfo($thumbnail, PATHINFO_EXTENSION);
  $path_extension = array('pdf', 'jpg', 'jpeg', 'png', 'gif');
  if (in_array($path_info, $path_extension)) {
    $update_thumbnail_name = rand() . "." . $path_info;
    $move_thumbnail_path = "images/service_images/".$update_thumbnail_name;
    if (!move_uploaded_file($tempname, $move_thumbnail_path)) {
      $update_thumbnail_name = '';
    }
  } else {
    echo "only this ('pdf', 'jpg', 'jpeg', 'png', 'gif') format.";
    return false;
  }

  $service_q="INSERT INTO `service_tbl`(`user_id`, `service_name`, `service_image`, `create_date`, `create_time`) VALUES ('$user_id','$service_name','$update_thumbnail_name','$create_date','$create_time')";
  mysqli_query($conn,$service_q);

    } //----end for-loop

 header('location:user_form.php');
}//--result


}//---------end submit-------------



?>