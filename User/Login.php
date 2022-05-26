<?php include("header.php");
  
    
   if(isset($_SESSION['user_log']))
    {
        echo "<script> window.location.href='Orphanlist.php';</script>";
    }

  if(isset($_POST['login']))
  {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $qry = "SELECT * FROM `user_reg` WHERE `user_email` = '$email' and `user_pass` = '$pass'";
    // echo $qry; die;
    $res = mysqli_query($con,$qry);
    $num = mysqli_num_rows($res);
    // echo $num; die;
    $row = mysqli_fetch_assoc($res);
    /*echo "<pre>";
    print_r($row);die;*/
    if ($num > 1)
    {
      $sms = "Email Already Exist*";
    }
    else
    {
      if($num==1)
      {
         $_SESSION['user_log']=$row['user_id'];

         echo "<script> window.location.href='Orphanlist.php';</script>";
      }
      else
      {
        $sms = "Invalid User Id*";
      }
    }
  }
  if (isset($_POST['signup'])) 
  {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $qry = "SELECT * FROM `user_reg` WHERE `user_email` = '$email' and `user_pass` = '$pass'";
    // echo $qry; die;
    $res = mysqli_query($con,$qry);
    $num = mysqli_num_rows($res);
    // echo $num; die;
    $row = mysqli_fetch_assoc($res);
    /*echo "<pre>";
    print_r($row);die;*/
    
    $fname = $_POST['fname'];
    $u_email = $_POST['email'];
    $pass = $_POST['password'];
    // echo $pass; die;
    $con_pass = $_POST['con_pass'];
    if ($num > 1)
    {
      $pms = "Email Already Exist*"; 
    }
    else if ($pass != $con_pass)
    {
      $pms = "Please enter Same password*";
    }
    else{


      $qry = "INSERT INTO `user_reg` (`user_name`,`user_email`,`user_pass`)values('$fname','$u_email','$pass')";
     // echo $qry;die;
     $res = mysqli_query($con,$qry); 
     }
  }

?>

        
    <section>
      <div class="ASec-2">
      <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <form method="POST">
        <span style="color: red;font-size: 13px; display: flex; justify-content: center;"><?php echo @$sms;?></span>
        <label>
        <span>Email Address</span>
        <input type="email" name="email" required>
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" required>
      </label>
      <button class="submit" type="submit" name="login">Sign In</button>
      </form>
      <p class="forgot-pass"><a href="Forgotpass.php">Forgot Password ?</a></p>

    
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up If You Don't have an Account.</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>Sign in If you Have an Account.</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>

      <div  >
        <h2>Sign Up</h2>
        
       <form method="POST">
        <span style="color: red;display: flex;justify-content: center;"><?php echo @$pms; ?></span>
          <label>
            <span>Full Name </span>
            <input type="text" name="fname"  value="<?php echo @$fname; ?>" required>
          </label>
          <label>
            <span>Email <span class=" "><?php echo @$email_msg; ?></span></span>
            <input type="email" name="email" value="<?php echo @$u_email; ?>" required>
          </label>
          <label>
            <span>Password <?php echo @$pass_msg; ?></span>
            <input type="password" name="password" value="<?php echo @$pass; ?>" required>
          </label>
          <label>
            <span>Confirm Password <?php echo @$conpass_msg; ?></span>
            <input type="password" name="con_pass" value="<?php echo @$con_pass; ?>" required>
          </label>
          <button type="submit" class="submit" name="signup">SignUp Now</button>
      </form>
      </div>
    </div>
  </div>         
<script type="text/javascript" src="script.js"></script>
        
</div>
</section>     
</div>

    <!-- top-section end -->