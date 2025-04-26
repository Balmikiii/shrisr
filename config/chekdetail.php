<?php
include "connection.php";
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user = $_POST["user"];
$pwd = $_POST["pwd"];
$sqlstu = "SELECT * FROM students WHERE userid = '$user' and pwd='$pwd'";
$sqltec = "SELECT * FROM teachers WHERE userid = '$user' and pwd='$pwd'";
$result = $conn->query($sqlstu);
$result2 = $conn->query($sqltec);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION["userid"] = $row['userid']; 
    $_SESSION["fname"] = $row['fname'];
    $_SESSION["profilepic"] = $row['img'];
    $_SESSION["identitiyof"] = $row['identity'];
    header('Location:../index.php');
}else if ($result2->num_rows == 1) {
    $row = $result2->fetch_assoc();
    $_SESSION["userid"] = $row['userid']; 
    $_SESSION["fname"] = $row['fname'];
    $_SESSION["profilepic"] = $row['img'];
    $_SESSION["identitiyof"] = $row['identity'];
    header('Location:../index.php');
}
 else {
    header('Location:../login.php');
} 
$conn->close();
?>