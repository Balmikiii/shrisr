<?php
if (!isset($_SESSION['userid'])) {
    // Session exists, user is logged in, or you can perform any other action here
    header('Location:./login.php');
}
$user_id= $_SESSION["userid"];
$first_name= $_SESSION["fname"];
$profilepic= $_SESSION["profilepic"];   //profile picture
$identitiyof= $_SESSION["identitiyof"]; //chek identity techer and student
?>