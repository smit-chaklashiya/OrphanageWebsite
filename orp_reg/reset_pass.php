<?php 
    $con=mysqli_connect("localhost","root","","orphanage") or die("not connected");
        
        session_start();
        $aid = $_SESSION['orp_ses'];
    // echo $aid;die;

    if (isset($_POST['submit']))
    {
        $NewPassword = $_POST['npass'];
        $CofirmPassword = $_POST['cpass'];


        if($NewPassword =='')
        {
            @$ds1 = 'Enter New Password';
        }

        else if($CofirmPassword == '')
        {
            @$ds1 = 'Enter Confirm Password';
        }

        else
        {

             $sql = "UPDATE `register` SET `password`= '$NewPassword'  WHERE `id`='$aid'";
             // echo $sql; die;
             $res = mysqli_query($con, $sql);
             $ds1 = 'New Password Set';
             
      
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
        <title>Reset Password</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Change Password</h3></div>
                                    <div class="card-body">
                                        <!-- <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div> -->
                                        <form method="POST" >
                                            <div>
                                                <div colspan="2">
                                                    <?php echo @$ds1; ?>
                                                </div>
                                            </div>
                                           
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputNPassword" type="password" placeholder="Password" name="npass" />
                                                <label for="inputCPassword">NewPassword</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputcPassword" type="password" placeholder="Password" name="cpass" />
                                                <label for="inputCPassword">CofirmPassword</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="index.php">Return to login</a>
                                                
                                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div> -->
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
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
