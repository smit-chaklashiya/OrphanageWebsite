<?php 
    $con = mysqli_connect("localhost","root","","orphanage"); 

    session_start();
    if(isset($_SESSION['orp_log']))
    {
        header("location:Dashboard.php");
    }


    if(isset($_POST['submit']))
    {
        // $orp_id = $_SESSION['orp_log'];
        // echo $orp_id; die();
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $qry ="select * from `orp_register` where `email`='$email' and `password`='$pass'";
        // echo $qry; die; 
        $res = mysqli_query($con,$qry);
        $num = mysqli_num_rows($res);
        $row = mysqli_fetch_assoc($res);
                // echo "<pre>";
                // print_r($row); die;
        $st = $row['status'];
        // echo $st; die;
       
        if ($email=='')
        {
           $sms = "Enter Email id*";
        }
        else if ($pass=='')
        {
            $sms = "Enter password*";
        }
        else if($st=='')
        {
            $sms = "Invalid user name passsword";
        }
        else
        {
            if($st==0)
            {
                $sms = "Verification Pending*";
            }
            else if($st==1)
            {
       
                if($num==1)
                {
                   
                    $_SESSION['orp_log']=$row['orp_id'];
                    header("location:Dashboard.php");
                }                  
            }
            else if($st==2)
            {
                $sms = "Request Decline By Admin";
            }
                
        }        
       
        
        
       
        
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Orphanage</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div style="padding:10px 0px 0px 10px;background-color:#fff5f5; color: red"><?php echo @$sms;?></div>
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="pass" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Forgot Password?</a>
                                                <input class="btn btn-primary" type="submit" name="submit" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
