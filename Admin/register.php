    <?php
    $con = mysqli_connect("localhost","root","","orphanage") or die("not connected");


    if (@$_POST['submit']) 
    {
        $fn = $_POST['fname'];
        $ln = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $con_pass = $_POST['con_pass'];

        @$e_qry = "SELECT * from `register` WHERE `email`='$email'";
        //echo $e_qry; die;
        @$e_res = mysqli_query($con,$e_qry);
        @$num = mysqli_num_rows($e_res);
        // echo $num; die;
        if ($fn=='') 
        {
            $sms ="*Enter First Name";
        }
        elseif ($ln=='')
        {
            $sms ="*Enter Last Name";
        }
        elseif ($email=='')
        {
            $sms ="*Enter Email Id Name";
        }
        elseif ($pass=='')
        {
            $sms ="*Enter Password ";
        }
        elseif ($con_pass=='')
        {
              $sms ="*Enter Confirm Password";
        }
        elseif ($pass!=$con_pass)
        {
            $sms ="*Confirm Password not Match";
        }
        elseif ($num==1) 
        {
           $sms ="*Entered Email Already Exists"; 
        }
        else
        {


            $qry = "INSERT into `register` (`fname`,`lname`,`email`,`password`)values('$fn','$ln','$email','$pass')";
            $res = mysqli_query($con,$qry);
            // echo $qry; die();
            header("location:index.php");
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
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <div  style="color: red;">
                                            <?php echo @$sms;?>
                                        </div>
                                        <div>
                                            <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                        </div>
                                        
                                    </div>
                                    <div class="card-body">
                                        <form method="POST">

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="fname" type="text" value="<?php echo @$fn?>" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="lname" type="text" value="<?php echo @$ln?>" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" value="<?php echo @$email?>" placeholder="name@example.com"  />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" name="pass" type="password" value="<?php echo @$pass?>" placeholder="Create a password"  />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" name="con_pass" type="password" value="<?php echo @$con_pass?>" placeholder="Confirm password"  />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" class="btn btn-primary btn-block" name="submit" value="Create Account" ></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php">Have an account? Go to login</a></div>
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
