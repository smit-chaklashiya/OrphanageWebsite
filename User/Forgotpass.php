<?php include("header.php");include('phpmailfile.php');

  // session_start();
  if (@$_POST['submit']) 
  {
      $email = $_POST['email'];

        $qry = "SELECT * FROM `user_reg` where `user_email` = '$email' ";
        // echo $qry; die;
        $res = mysqli_query($con,$qry);
        $row = mysqli_fetch_assoc($res);
        $rec = mysqli_num_rows($res);
        // echo"<pre>";
        // print_r($row);die();

        if($rec == 1)
        {
            $_SESSION['user_ses']=$row['user_id'];

                $to = $email;
                $subject = "Reset User Password";
                $body = '<a style="background-color: #f08121;border: none;border-radius: 11px;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;" href="http://localhost/project/User/Newpass.php">Reset Password</a>';

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

    <section>
        <div class="ASec-2">
        
                <div class="cont">
    <div class="form sign-in">
      <h2 class="forgot">Forgot Password</h2>
      <form method="POST">
        <label style="margin: 83px auto 0;">
        <span style="color: red;">Enter Email Id*</span>
        <input type="email" name="email" required>
      </label>
      <div style="display: flex;justify-content: center;">
        <input type="submit" class="submit" name="submit" value="Recovery Password" style="width: 208px;"></input>
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
      <div >
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