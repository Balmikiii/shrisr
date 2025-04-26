<?php
include "../config/connection.php";
include "../config/session.php";
if(isset($_POST['submit'])){
$first_name = $_POST["f_name"];
$middle_name = $_POST["m_name"];
$last_name = $_POST["l_name"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$blood = $_POST["blood"];
$email = $_POST["email"];
$religion = $_POST["religion"];
$phone = $_POST["phone"];
$phone2 = $_POST["phone2"];
$adhaar = $_POST["s_ahaar"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$pincode = $_POST["pincode"];
$bio = $_POST["message"];


$image  = $_FILES['image_upload'];              // get image from post data 
$image_name=$image['name'];                   // image name
$image_tmp_name=$image['tmp_name'];          // temp file path xampp tem ke unnder
$destination="../assets/img/profile/teacher/".$image_name;       // Folder path Where Image saved
move_uploaded_file($image_tmp_name , $destination);   // this function are used to store the file in destination path 
}

$mydb = "insert into teachers (identity,fname,mname,lname,dob,gender,religion,email,phone,phone2,img,blood_group,adhaar,address,city,state,pincode,bio)
value('teacher','$first_name','$middle_name','$last_name','$dob','$gender','$religion','$email','$phone','$phone2','$image_name','$blood','$adhaar','$address','$city','$state','$pincode','$bio')";
if (mysqli_query($conn, $mydb)) {
    $last_id = mysqli_insert_id($conn);
    $userid= "T_".date("y")."".$last_id;
    $img_ren=$userid.".png";
    $quer="UPDATE teachers SET userid ='".$userid."',img ='".$img_ren."' WHERE id= '".$last_id."'";                
    // $quer="UPDATE teachers SET userid ='".$userid."' WHERE id= '".$last_id."'";                
    $ress = mysqli_query($conn, $quer);
    rename($destination,"../assets/img/profile/teacher/".$userid.".png");
    echo "Teacher ID is: " . $userid;
    } else {
    echo "Error: " . $mydb . "<br>" . mysqli_error($conn);
    }
?>