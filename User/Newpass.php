<?php include("header.php");
  $user_ses = $_SESSION['user_ses'];
  if (!isset($_SESSION['user_ses'])) 
  {
    echo "<script> window.location.href='Forgotpass.php';</script>";
  }
  // echo $user_ses; die;
  if (isset($_POST['reset']))
    {
        $NewPassword = $_POST['new_pass'];
        // echo $NewPassword;die;
        $CofirmPassword = $_POST['con_pass'];


        if($NewPassword =='')
        {
            $ds1 = 'Enter New Password*';
        }

        else if($CofirmPassword == '')
        {
            $ds1 = 'Enter Confirm Password*';
        }
        else if ($NewPassword != $CofirmPassword) 
        {
            $ds1 = 'Confirm Password is different*';
        }
        else
        {

             $sql = "UPDATE `user_reg` SET `user_pass`= '$NewPassword'  WHERE `user_id`='$user_ses'";
             // echo $sql; die;
             $res = mysqli_query($con, $sql);
             echo "<script> window.location.href='Newpass.php';</script>";
             
      
        }
    }
?>
      
    <section>
        <div class="ASec-2">
        
                <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
     <form method="POST">
      <span style="color: red;display: flex;justify-content: center;font-size: 14px;"><?php echo @$ds1;?></span>
        <label>
        <span>New Password</span>
        <input type="password" name="new_pass" value="<?php echo @$NewPassword;?>">
      </label>
      <label>
            <span>Confirm Password</span>
        <input type="password" name="con_pass" value="<?php echo @$CofirmPassword;?>">
      </label>
      <div style="display: flex;justify-content: center;">
        <input type="submit" class="submit" name="reset" value="Reset Password"></input>
      </div>
     </form>
    
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
      <div class="form sign-up">
         <h2>Sign Up</h2>
        
       <form method="POST">
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