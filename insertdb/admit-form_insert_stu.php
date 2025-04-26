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
$father_name = $_POST["father"];
$mother_name = $_POST["mother"];
$religion = $_POST["religion"];
$email = $_POST["email"];
$class = $_POST["class"];
$sec = $_POST["sec"];
$phone = $_POST["phone"];
$phone2 = $_POST["phone2"];
$student_ahaar = $_POST["s_ahaar"];
$father_adhaar = $_POST["f_adhaar"];
$mother_adhaar = $_POST["m_adhaar"];
$father_octupation = $_POST["f_octu"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$pincode = $_POST["pincode"];
$destination = $_POST["destination"];
$bio = $_POST["message"];


$image  = $_FILES['image_upload'];              // get image from post data 
$image_name=$image['name'];                   // image name
$image_tmp_name=$image['tmp_name'];          // temp file path xampp tem ke unnder
$destination="../assets/img/profile/student/".$image_name;       // Folder path Where Image saved
move_uploaded_file($image_tmp_name , $destination);   // this function are used to store the file in destination path 
}

// $table names=",img,parent_occtupation,address,city,state,pincode,joinnig,join_class,currant_class,drop_date,class_id,payment,amount,transport_id,hostel_id";
$mydb = "insert into students (identity,fname,mname,lname,dob,gender,father,mother,class,section,blood_group,religion,email,phone,phone2,stu_adhaar,father_adhaar,mother_adhaar,bio,img)
value('student','$first_name','$middle_name','$last_name','$dob','$gender','$father_name','$mother_name','$class','$sec','$blood','$religion','$email','$phone','$phone2','$student_ahaar','$father_adhaar','$mother_adhaar','$bio','$image_name')";
if (mysqli_query($conn, $mydb)) {
    $last_id = mysqli_insert_id($conn);
    $userid= "STU_".date("y")."".$last_id;
    $img_ren=$userid.".png";
    $quer="UPDATE students SET userid ='".$userid."',img ='".$img_ren."' WHERE id= '".$last_id."'";                
    // $quer="UPDATE students SET userid ='".$userid."' WHERE id= '".$last_id."'";                
    $ress = mysqli_query($conn, $quer);
    rename($destination,"../assets/img/profile/student/".$userid.".png");
    echo "Student ID is: " . $userid;
    } else {
    echo "Error: " . $mydb . "<br>" . mysqli_error($conn);
    }
?>