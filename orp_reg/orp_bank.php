<?php include("header.php");
    if (isset($_POST['submit']))
    {
        $acc_name = $_POST['acc_name'];
        $ifsc_no = $_POST['ifsc_no'];

        $qry = "UPDATE `orp_register` SET `bank_holder`='$acc_name',`ifsc_no` = '$ifsc_no' where `orp_id` = '$uid'";
        // echo $qry;die;  
        $res = mysqli_query($con,$qry);
        $sms = "Account Detail Enter Successful*";
    }
?>
<div id="layoutSidenav_content" >
				<main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                               
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4" style="color: #ef8020;">Enter Bank Detail</h3></div>
                                    <span style="color: darkred; padding: 8px 0px 0px 8px;"></span>
                                    <div class="card-body">
                                        <form method="POST">
                                             <?php echo @$sms;?>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="acc_name" value="" placeholder="Account" required />
                                                <label for="inputEmail">Account Holder Name:</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="ifsc_no" value="" maxlength="11" placeholder="New Password" required />
                                                <label for="inputPassword">Enter IFSC Code:</label>
                                            </div> 
                                           
                                            <div align="center">
                                               <input  type="submit" name="submit" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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
<?php include("footer.php");?>