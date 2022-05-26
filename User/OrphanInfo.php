<?php include("header.php");

  if(@$_GET['id'])
  {
    $orp_id = $_GET['id'];
    $qry = "SELECT * FROM `Orp_about` Where `orp_id`='$orp_id' and `status` = '0' ORDER BY `about_id` ASC";
    // echo $qry;die;
   
    $res = mysqli_query($con,$qry);

    $info_qry = "SELECT * FROM `orp_register` where `orp_id` = '$orp_id' ";
    // echo $info_qry;die;
    $info_res = mysqli_query($con,$info_qry);
    $info_row = mysqli_fetch_assoc($info_res);
    // echo "<pre>";
    // print_r($info_row);die;

    $email = $info_row['email'];
    $state = $info_row['state'];
    $city = $info_row['city'];
    $add = $info_row['address'];
    $phone = $info_row['phone_no'];
    $bank_detail = $info_row['ifsc_no'];

  }
  
  // echo $uid; die();
  // echo "<pre>";
  // print_r($row);die;
?>
      
            <div class="para-1">
                
                <div class="paratex-1">
                  <div>
                    <h1 class="head1-1"><?php echo  $info_row['orp_name']?></h1>
                    </div>
                    <div class="container">
                      <div class="orp-info">
                          <?php
                              while($row = mysqli_fetch_assoc($res)) 
                              {
                                //  echo "<pre>";
                                // print_r($row);die;
                                echo $row['description'];
                              }
                          ?>
                    </div>
                    </div>

                    <?php
                        if ($bank_detail=='0') 
                        {
                    ?>
                          <div style="width: 1020px;margin-left: auto;margin-right: auto;">
                           <marquee style="color: red; font-size: 20px;">Online Donation will available Soon By <?php echo $info_row['orp_name'];?> Trust*</marquee>
                          </div>
                    <?php
                        }
                        else
                        {
                    ?>
                          <div style="display: flex; justify-content: center;"><a class="link" href="payment.php?id=<?php echo $orp_id;?>"><button class="bto btn-white">Donation Now</button></a></div>
                    <?php
                        }
                    ?>  
                    <div class=" map-1">
                      <div style="height:230px; width:230px;"> 
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29761.04146315225!2d72.80750285852054!3d21.18698683118976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e63a5de0acb%3A0x44a6bb45ad42f92!2sNevil!5e0!3m2!1sen!2sin!4v1648558912363!5m2!1sen!2sin" width="100%" height="100%" style=" border:2px; border-radius: 30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                      <div>
                            <h2 class="head2-1">HOW TO CONTACT US</h2>
                            <p class="headp-1">
                            <br><?php echo @$add;?>
                            <br><?php echo @$city;?> ,<?php echo @$state;?>
                            <br>Email id: <?php echo @$email;?>
                            <br>Call us on Tel: <?php echo "+".@$phone;?></p>
                      </div>
                      </div>
                </div>   
            </div>
        
            <!-- footer start -->      
    <footer class="section py-5">
      <div class="container">
        <div class="footer-section-container">
          <div class="footer-section-box">
            <h2>Home</h2>
            <ul>
              <li>About Us.</li>
              <li>Our Mission.</li>
              <li>Our Vision.</li>
              <li>Best Online Services.</li>
            </ul>
          </div>
          <div class="footer-section-box">
            <h2>About Page</h2>
            <ul>
              <li>Term & Condition.</li>
              <li>FAQs.</li>
              <li>Help.</li>
            </ul>
          </div>
          <div class="footer-section-box">
            <h2>Orphan Info</h2>
            <ul>
              <li>Orphan Location.</li>
            </ul>
          </div>
          <div class="footer-section-box">
              <h2>Gallery</h2>
            <ul>
                 <li>Orphan Information.</li>
            </ul>
            </div>
          <div class="footer-section-box">
            <h2>CONTACT</h2>
            <ul>
              <li><i class="fa fa-location-dot"></i> 1001, 6th Avenue, USA</li>
              <li><i class="fa fa-phone"></i> +91 8320449676</li>
              <li><i class="fa fa-envelope"></i> HappyOrphan@gmail.com</li>
            </ul>
          </div>
        </div>
      </div>
    </footer> 
    </div>
  </body>
</html>