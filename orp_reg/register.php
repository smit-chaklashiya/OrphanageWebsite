<?php 
   $con = mysqli_connect("localhost","root","","orphanage") or die('connection unsuccesful');
 $city_qry = "select * from `city` where `city_status`='0'";
$city_res = mysqli_query($con,$city_qry);
$city_row = mysqli_fetch_assoc($city_res);

// echo "<pre>";
// print_r($city_row); die();

    if (isset($_POST['submit'])) 
    {
        $fname = $_POST['fname'];
        // echo $fname; die;
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $con_pass = $_POST['con_pass'];
        $orp_name = $_POST['orp_name'];
        @$gen = $_POST['gender'];
        // echo $gen; die();
        $state = $_POST['state'];
        $city = $_POST['city'];
        // echo $city; die;
        $add = $_POST['address'];
        $phone = $_POST['phone'];
        $doc = time().$_FILES['document']['name'];
        move_uploaded_file($_FILES['document']['tmp_name'],'doc/'.$doc);
        // echo "<pre>";
        // print_r($doc); die;
        $img=time().$_FILES['profile']['name'];
        move_uploaded_file($_FILES['profile']['tmp_name'],'img/'.$img);

        @$e_qry = "SELECT * from `orp_register` WHERE `email`='$email'";
        //echo $e_qry; die;
        @$e_res = mysqli_query($con,$e_qry);
        @$num = mysqli_num_rows($e_res);
        if($fname=='') 
        {
            $sms = "Enter First name*";
        }
        elseif($lname=='')
        {
            $sms = "Enter Last name*";
        }

        elseif ($email=='')
        {
            $sms = "Enter Email id*";
        }
        elseif ($num==1) 
        {
           $sms ="*Entered Email Already Exists"; 
        }
        elseif ($pass=='') 
        {
            $sms = "Enter Password*";
        }
        elseif ($con_pass=='') 
        {
            $sms = "Enter Confirm Password*";
        }
        elseif ($pass!==$con_pass) 
        {
            $sms = "Enter Password same*";
        }
        elseif($orp_name=='')
        {
            $sms = "Enter orphan name*";
        }
        elseif ($state=='0') 
        {
            $sms = "Select State*";
        }
        elseif ($city=='0') 
        {
            $sms = "Select City*";
        }
        elseif($add=='')
        {
            $sms = "Enter Orphan Address*";
        } 
        elseif($phone=='')
        {
            $sms = "Enter Phone No*";
        }
        elseif($_FILES['document']['type']!='application/pdf')
        {
            $sms ="Insert Document(.pdf)*";
        }
        elseif($_FILES['profile']['type']!='image/jpeg')
        {
            $sms ="Insert Profile Picture(.jpeg)*";
        }
        else
        {
            $qry = "INSERT INTO `orp_register`( `fname`, `lname`,`email`,`password`, `orp_name`, `gender`, `state`, `city`, `address`, `phone_no`, `document`,`profile`) VALUES('$fname','$lname','$email','$pass','$orp_name','$gen','$state','$city','$add','$phone','$doc','$img')";
            // echo $qry; die;    
            $res = mysqli_query($con,$qry);
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
        <title>Register - Orphanage</title>
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
                                <div class="card shadow-lg border-0 rounded-lg mt-5 mb-4">
                                    <div class="card-header">
                                        <div  style="color: red;">
                                            
                                        </div>
                                        <div>
                                            <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                        </div>
                                        
                                    </div>
                                    <div class="card-body">
                                        <span style="color:red;"><?php echo @$sms;?></span>
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputFirstName" name="fname" value="<?php echo @$fname?>" type="text"  placeholder="Enter your first name"/>
                                                            <label for="inputFirstName">First name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input class="form-control" id="inputLastName" name="lname" type="text" value="<?php echo @$lname?>" placeholder="Enter your last name" />
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
                                                            <input class="form-control" id="inputPasswordConfirm" name="con_pass"value="<?php echo @$con_pass?>" type="password"  placeholder="Confirm password"  />
                                                            <label for="inputPasswordConfirm">Confirm Password</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputOrphanName" name="orp_name" type="text" value="<?php echo @$orp_name?>" placeholder="Enter your Orphan name"/>
                                                            <label for="inputOrphanName">Orphan Name</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6" style="padding: 5px 0px 0px 26px;">
                                                        <label>Gender:</label><br>  
                                                        <input class="form-check-input" type="radio" value="Male"name="gender" <?php if(@$gen=='Male') {echo "checked";} ?>>
                                                        <label class="form-check-label" >Male</label> 

                                                        <input class="form-check-input" type="radio"  name="gender" <?php if(@$gen=='Female') {echo 'checked';} ?> value="Female">
                                                        <label class="form-check-label" >Female</label>
                                                    </div>   
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="form-group col-md-6">
                                                          <label for="inputState">State</label>
                                                          <select id="inputState" class="form-control" name="state">
                                                            <option value="0">Select State</option>
                                                         <?php 
                                                                $state_qry = "select * from `state` where `st_status`='0'";
                                                                $state_res = mysqli_query($con,$state_qry);
                                                                while($state_row = mysqli_fetch_assoc($state_res))
                                                                {
                                                                    // echo "<pre>";
                                                                    // print_r($state_row); die;
                                                            ?>
                                                            <option value="<?php echo @$state_row['st_name']; ?>"<?php if($state_row['st_name']==@$state) {echo 'selected';} ?>><?php echo $state_row['st_name']; ?></option>
                                                        <?php } ?>
                                                          </select>
                                                    </div> 
                                                    <div class="form-group col-md-6">
                                                          <label for="inputState">City</label>
                                                          <select id="inputState" class="form-control" name="city">
                                                            <option value="0">Select city</option>
                                                         <?php 
                                                                $city_qry = "select * from `city` where `city_status`='0'";
                                                                $city_res = mysqli_query($con,$city_qry);
                                                                while($city_row = mysqli_fetch_assoc($city_res))
                                                                {
                                                                    // echo "<pre>";
                                                                    // print_r($state_row); die;
                                                                    $state_id = $state_row['st_id'];
                                                            ?>
                                                            <option value="<?php echo $city_row['city_name']; ?>"<?php if($city_row['city_name']==@$city) {echo 'selected';} ?>><?php echo @$city_row['city_name']; ?></option>
                                                        <?php } ?>
                                                          </select>
                                                    </div>
                                                </div>
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <textarea class="form-control" id="inputaddress"  name="address" placeholder="enter your add" rows="4"><?php echo @$add?></textarea>
                                                     <label for="inputaddress">Orphan Address</label>
                                                </div>

                                               <div class="row mb-3"> 
                                                    <div class="col-md-6" style="margin-top: 15px;">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input type="tel" class="form-control" id="inputphoneName" name="phone" value="<?php echo @$phone?>" placeholder="123-45-678" >
                                                            <label for="inputphoneName">Phone No:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="margin-top: 15px;">
                                                         <div class="form-group">
                                                            <label for="exampleFormControlFile1">Document:</label>
                                                            <input type="file" class="form-control" class="form-control-file" value="<?php echo @$doc?>" name="document" id="inputdocument">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="margin-top: 15px;">
                                                    <div class="form-group">

                                                            <label for="exampleFormControlFile1">Profile image</label>
                                                            <input type="file" class="form-control" class="form-control-file" value="<?php echo @$img?>" name="profile"id="inputdocument">
                                                            
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="text-center mb-3">
                                                    <input type="submit" class="btn btn-primary " name="submit" value="Create Account" ></div>
                                                </div>
                                        </form>

                                        <div class="card-footer text-center py-3">
                                            <div class="small" ><a href="index.php">Have an account? Go to login</a></div>
                                        </div>
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
