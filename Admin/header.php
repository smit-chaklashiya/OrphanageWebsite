<?php 

    $con=mysqli_connect("localhost","root","","orphanage") or die("not connected");

    session_start();
    $uid = $_SESSION['admin_log'];
    // echo $id; die;
    if(!isset($_SESSION['admin_log']))
    {
        header("location:index.php");
    }  

    $log_qry = "SELECT * FROM `register` WHERE `id` ='$uid' ";
    // echo $log_qry; die();
    $log_res = mysqli_query($con,$log_qry);
    $log_row = mysqli_fetch_assoc($log_res);

    // print_r($log_row);die;
?>
<style>
    .noti{
        color: darkred;
    }
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/6109f660d0.js" crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="Dashboard.php">Admin Panel</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="change_pass.php">Settings</a></li>
                        <?php
                                $qry = "select * from `orp_register` where `status`='0'";
                                $res = mysqli_query($con,$qry);
                                $rec = mysqli_num_rows($res);
                        ?>
                        <li><a class="dropdown-item" href="view_orp.php">Orphanage Log(<span class="noti"><?php echo $rec?></span>)</a></li>
                        <?php
                                $qry1 = "select * from `orp_register` where `status`='1'";
                                $res1 = mysqli_query($con,$qry1);
                                $rec1 = mysqli_num_rows($res1);
                        ?>
                        <li><a class="dropdown-item" href="approv_orp.php">Approved(<span class="noti"><?php echo $rec1?></span>)</a></li>
                        <?php
                                $qry2 = "select * from `orp_register` where `status`='2'";
                                $res2 = mysqli_query($con,$qry2);
                                $rec2 = mysqli_num_rows($res2);
                        ?>
                        <li><a class="dropdown-item" href="reject_orp.php">Rejected(<span class="noti"><?php echo $rec2?></span>)</a></li>
                        <li><hr class="dropdown-divider"/></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="Dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-house-user"></i></div>
                                Home   
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Slider
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_slider.php">Add Slider</a>
                                    <a class="nav-link" href="view_slider.php">View Slider</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#states" aria-expanded="false" aria-controls="states">
                                <div class="sb-nav-link-icon"><i class="fas fa-map-marker-alt"></i></div>
                                States
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="states" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_state.php">Add States</a>
                                    <a class="nav-link" href="view_state.php">View States</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#City" aria-expanded="false" aria-controls="City">
                                <div class="sb-nav-link-icon"><i class="fas fa-map-marker-alt"></i></div>
                                Cities
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="City" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_city.php">Add City</a>
                                    <a class="nav-link" href="view_city.php">View City</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#orphanes" aria-expanded="false" aria-controls="orphanes">
                                <div class="sb-nav-link-icon"><i class="fas fa-map-marker-alt"></i></div>
                                Orphanages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="orphanes" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="view_orp.php">New Login</a>
                                     <a class="nav-link" href="approv_orp.php">Approved </a>
                                    <a class="nav-link" href="reject_orp.php">Rejected </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $log_row['fname']," ",$log_row['lname'];?>
                    </div>
                </nav>
            </div>
