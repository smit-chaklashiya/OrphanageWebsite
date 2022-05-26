<?php 
    $con=mysqli_connect("localhost","root","","orphanage") or die("not connected");
   
    session_start();
    $uid = $_SESSION['orp_log'];
    // echo $uid; die;  
    if(!isset($_SESSION['orp_log']))
    {
        header("location:index.php");
    }  
     $log_qry = "SELECT * FROM `orp_register` WHERE `orp_id` ='$uid' ";
    // echo $log_qry; die();
    $log_res = mysqli_query($con,$log_qry);
    $log_row = mysqli_fetch_assoc($log_res);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Orphan Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/132198adba.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./richtexteditor/rte_theme_default.css" />  
        <style>
            .form
            {
                display: flex;
                justify-content: center;
                margin-top: 5px;
            }
            .Description p
            {
                overflow: hidden;
                width: 424px;
            }  
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="Dashboard.php">Orphan Panel</a>
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
                        <li><a class="dropdown-item" href="change_pass.php">Change Password</a></li>
                        <li><a class="dropdown-item" href="orp_bank.php">Bank Detail</a></li>
                        <li><hr class="dropdown-divider" /></li>
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
                                About
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_detail.php">Add Detail</a>
                                    <a class="nav-link" href="view_detail.php">View Detail</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#City" aria-expanded="false" aria-controls="City">
                                <div class="sb-nav-link-icon"><i class="far fa-images"></i></div>
                                Gallery
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="City" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_image.php">Add Image</a>
                                    <a class="nav-link" href="view_image.php">View Image</a>
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