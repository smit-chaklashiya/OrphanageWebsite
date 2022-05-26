<?php include("header.php");

$qry = "SELECT * FROM `register` where`id`='$uid'";
// echo $qry;die();
$res = mysqli_query($con,$qry);
$row = mysqli_fetch_assoc($res);
// print_r($row); die();

 if(@$_POST['submit'])
 {
    $old = $_POST['old_pass'];
    $new = $_POST['new_pass'];
    $conf = $_POST['con_pass'];

    if($old=='')    
    {
        $sms = "Enter Old Pass*";
    }
    else if($new=='')
    {
        $sms = "Enter New Pass*";
    }
    else if($conf=='')
    {
        $sms = "Enter Con Pass*";
    }
    else if($old!=$row['password'])
    {
        $sms = "Old pass is Different*";
    }
    else if($old==$new)
    {
        $sms = "old pass is same*";
    }
    else if($new!=$conf)
    {
        $sms = "both are not same*";
    }
    else
    {

        $qry = " UPDATE `register` SET `password`='$new' where `id`='$uid' ";
        // echo $qry; die();
        // mysqli_query($con,$qry);
        // echo $qry; die(); 
        mysqli_query($con,$qry);
        header("location:change_pass.php");
    }
 }

?>
<div id="layoutSidenav_content" >
				<main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Change Password</h3></div>
                                    <span style="color: darkred; padding: 8px 0px 0px 8px;"><?php echo @$sms; ?></span>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="password" name="old_pass" value="<?php echo @$old ?>" placeholder="Old Password" />
                                                <label for="inputEmail">Old Password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="new_pass" value="<?php echo @$new?>" placeholder="New Password" />
                                                <label for="inputPassword">New Password</label>
                                            </div> 
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" value="<?php echo @$conf ?>"name="con_pass" placeholder="Confirm Password" />
                                                <label for="Confirm Password">Confirm Password</label>
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
<?php include("footer.php"); ?>