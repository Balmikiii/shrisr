<?php
include "config/connection.php";
include "config/session.php";

// if ($identitiyof != 'student'){
//     header('Location:login.php');
// }
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <title>AKKHOR | All Teachers</title>
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
                        <li>All Teachers</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Teacher Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Teachers Data</h3>
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
                        <form class="mg-b-20" action="all-teacher.php" method="post">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by ID ..." class="form-control" name="userid">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control" name="fname">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Phone ..." class="form-control" name="number">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" name="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th> 
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Date of birth</th>
                                        <th>Blood</th>
                                        <th>E-mail</th>
                                        <th>Religion</th>
                                        <th>Phone</th>
                                        <th>Adhaar no.</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Pin code</th>
                                        <th>Joining</th>
                                        <th>Bio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    if(isset($_POST['submit'])){
                                        if(!empty($_POST['userid'])){
                                            $sql = "SELECT * FROM teachers where userid = '".$_POST['userid']."'";
                                        }else if(!empty($_POST['fname'])){
                                            $sql = "SELECT * FROM teachers where fname = '".$_POST['fname']."'";
                                        }else if(!empty($_POST['number'])){
                                            $sql = "SELECT * FROM teachers where phone = '".$_POST['number']."'";
                                        }else{
                                            $sql = "SELECT * FROM teachers";
                                        }                               
                                    }else{
                                        $sql = "SELECT * FROM teachers";
                                    }
                                    $result = $conn->query($sql);   
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                        echo '<tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label">'.$row["userid"].'</label>
                                                    </div>
                                                </td>
                                                <td class="text-center"><img src="assets/img/profile/teacher/'.$row["img"].'" width="30px" alt="student"></td>
                                                <td>'.$row["fname"].' '.$row["mname"].' '.$row["lname"].'</td>
                                                <td>'.$row["gender"].'</td>
                                                <td>'.$row["dob"].'</td>
                                                <td>'.$row["blood_group"].'</td>
                                                <td>'.$row["email"].'</td>
                                                <td>'.$row["religion"].'</td>
                                                <td>'.$row["phone"].' '.$row["phone2"].'</td>
                                                <td>'.$row["adhaar"].'</td>
                                                <td>'.$row["address"].'</td>
                                                <td>'.$row["city"].'</td>
                                                <td>'.$row["state"].'</td>
                                                <td>'.$row["pincode"].'</td>
                                                <td>'.$row["joining_date"].'</td>
                                                <td>'.$row["bio"].'</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>';
                                        }
                                    }
                                    $conn->close();
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Teacher Table Area End Here -->
                <?php include 'include/footer.inc.php';?>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <?php include 'include/js.inc.php';?>
</body>
</html>