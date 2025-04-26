<?php
include "config/connection.php";
include "config/session.php";
?>

<?php

    if (isset($_POST['roll']) and $identitiyof == 'admin' or $identitiyof == 'head'){
        $sql = "SELECT * FROM teachers where `userid`='".$_POST['roll']."'";
    }else{
    $sql = "SELECT * FROM teachers where `userid`='".$user_id."'";
    }

    // $sql = "SELECT * FROM teachers where `userid`='".$user_id."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $img = $row["img"];
            $first_name = $row["fname"];
            $middle_name = $row["mname"];
            $last_name = $row["lname"];
            $dob = $row["dob"];
            $gender = $row["gender"];
            $blood = $row["blood_group"];
            $religion = $row["religion"];
            $email = $row["email"];
            $phone = $row["phone"];
            $phone2 = $row["phone2"];
            $adhaar = $row["adhaar"];
            $address = $row["address"];
            $city = $row["city"];
            $state = $row["state"];
            $pincode = $row["pincode"];
            $joining_date = $row["joining_date"];
            $bio = $row["bio"];
        }
    }
    $conn->close();
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <title>AKKHOR | Teacher Details</title>
    <?php include 'include/css.inc.php';?>
</head> 
<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
         <?php include 'include/header_menu.inc.php';?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php include 'include/sidebar.inc.php';?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Teacher Details</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <?php
                                if ($identitiyof == 'admin' or $identitiyof == 'head'){
                                    echo '<form action="teacher-details.php" method="post">
                                        <input type="text" name="roll">
                                        <button type="submit">Chek details</button>
                                        </form>';
                                }
                            ?>
                            <div class="item-title">
                                <h3>About Me</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="assets/img/profile/teacher/<?php echo $img;?>" alt="teacher" width="280px">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium"><?php echo $first_name;?></h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p><?php echo $bio ;?></p>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $first_name." ".$middle_name." ".$last_name ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $gender ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Date of Birth:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $dob ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Blood Group:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $blood ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Religion:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $religion ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Joining Date:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $joining_date ;?></td>
                                            </tr>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $email ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Phone No:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $phone." ".$phone2 ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Adhaar No:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $adhaar ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Address:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $address.", ".$city.", ".$state." - ".$pincode ;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
                <?php include 'include/footer.inc.php';?>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <?php include 'include/js.inc.php';?>
</body>
</html>