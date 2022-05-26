<?php 
include('phpmailfile.php');
    $con=mysqli_connect("localhost","root","","orphanage") or die("not connected");

    session_start();

    if(isset($_POST['res_pass']))
    {
        $email = $_POST['res_pass'];

        $qry = "SELECT * FROM `orp_register` where `email` = '$email' ";
        // echo $qry; die;
        $res = mysqli_query($con,$qry);
        $row = mysqli_fetch_assoc($res);
        $rec = mysqli_num_rows($res);
        // echo"<pre>";
        // print_r($row);die();

        if($rec == 1)
        {
            $_SESSION['orp_ses']=$row['orp_id'];

                $to = $email;
                $subject = "Reset Password";
                $body = '<a style="background-color: #f08121;border: none; color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;" href="http://localhost/project/orp_reg/reset_pass.php">Reset Password</a>';

                $send_mail = SendMail($to, $subject, $body);

                if($send_mail == true)
                {
                    $sms = "send seccessfully";
                }
                else
                    {
                    $sms = "not send";
                }
                

            
        }
        else
        {
            $sms = 'invalid user id*';
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
        <title>Password Reset - SB Admin</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>
                                        <form method="POST">
                                            <?php 
                                                if(isset($sms))
                                                {
                                            ?>
                                                    <span style="color: red;"><?php echo $sms;?></span>
                                            <?php  
                                                }
                                            ?>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="res_pass" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="login.html">Return to login</a>
                                                <input class="btn btn-primary" type="submit" value="Reset Password" name="submit">
                                                <!-- <a class="btn btn-primary" type="submit"  href="password.php?sendmail=send">Reset Password</a> -->
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
