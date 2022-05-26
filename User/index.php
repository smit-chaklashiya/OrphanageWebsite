<?php include("header.php");


  $qry = "SELECT * FROM `slider` where `status` = '0'";
  $res = mysqli_query($con,$qry);
  
 /* echo "<pre>";
  print_r($row); die;*/


?>
      <div class="section landing-desp-section">
        <div class="container">
          <div class="landing-desp-main">
            <div class="landing-desp-box">
              <h1>Join Us<br>Change Their World</h1>
              <p class="ch2">
                Change Yours This Will Change<br>Everything.
              </p>
                <a class="link" href="Orphanlist.php"><button class="bto btn-white">Donation Now</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- top-section end -->
      
      
    <!-- About us Section start -->
    <div class="section about-section-main py-5">
      <div class="container">
        <div class="row">
          <div class="about-section-box col-6">
            <div class="about-section-upper-box">
              <h2>About Us</h2>
              <p>
                Happy Orphan Life Works for Free of Cost To Help Orphan To Fullfill There Common Need.We Give Facility Of Donation as well as To Find Orphanages..
              </p>
            </div>
            <div class="about-section-lower-box">
              <div class="about-section-lower-inner-box">
                <span class="gradient-icon">
                  <i class="fa-solid fa-crosshairs"></i>
                </span>
                <h3>Our Mission</h3>
                <p>TO Provide Free Donation Website To Orphanages Who runs Orphanages</p>
              </div>
              <div class="about-section-lower-inner-box">
                <span class="gradient-icon">
                  <i class="fa-solid fa-eye"></i>
                </span>
                <h3>Our Vision</h3>
                <p>To Meet Number Of Orphanages And Donar Which Hepls Orphan.</p>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="owl-carousel owl-theme">
             <?php 
                            while ($row = mysqli_fetch_assoc($res)) 
                            {
                      ?>
                              <div class="item"><img src="../Admin/img/<?php echo $row['s_img1'];?>" style="border-radius: 40px;"></div>      
                      <?php
                            }
                      ?>
        </div>
          </div>    
        </div>
      </div>
    </div>
    <!-- About us Section end -->

      
    <!-- Best Services start -->

    <div class="section service-section-main py-5">
      <div class="container">
        <div class="section-title">
          <h2>We Provide Best Online Services</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
            neque corporis ut aperiam illum.
          </p>
        </div>
        <div class="service-section-container py-5">
          <div class="service-section-box">
            <div class="icon-box">
              <span class="gradient-icon">
                <i class="fa-solid fa-headset"></i>
              </span>
            </div>
            <div class="desp-box">
              <h2>Support Center Service.</h2>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consequatur, consequuntur.
              </p>
            </div>
          </div>
          <div class="service-section-box">
            <div class="icon-box">
              <span class="gradient-icon">
                <i class="fa-solid fa-clipboard-list"></i>
              </span>
            </div>
            <div class="desp-box">
              <h2>FAQs Center Service.</h2>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consequatur, consequuntur.
              </p>
            </div>
          </div>
          <div class="service-section-box">
            <div class="icon-box">
              <span class="gradient-icon">
                <i class="fa-solid fa-hand-holding-heart"></i>
              </span>
            </div>
            <div class="desp-box">
              <h2>Donate Related Service.</h2>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consequatur, consequuntur.
              </p>
            </div>
          </div>
          <div class="service-section-box">
            <div class="icon-box">
              <span class="gradient-icon">
                <i class="fa-solid fa-phone-volume"></i>
              </span>
            </div>
            <div class="desp-box">
              <h2>24/7 Call Center Service.</h2>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consequatur, consequuntur.
              </p>
            </div>
          </div>
        </div>
        <div class="service-button">
         
        </div>
      </div>
    </div>

    <!-- Best Services end -->

      
    <!-- Statistics section start -->

    <div class="section statistics-section-main py-5">
      <div class="container">
        <div class="section-title">
          <h2 class="no-c">Impact In 2021</h2>
          <p>
            reaching out to help vulnerable children has been save the children’s core purpose;
         take a look at the number of lives that we have impacted until the last year.
          </p>
        </div>
        <div class="statistics-section-container py-5">
          <div class="statistics-section-box">
            <h2><i class="fa fa-users"></i></h2>
            <h2 class="no-a fsubs-odometer">1,62,565</h2>
            <p class="graph-p"> children have benefitted
                from  project  on
                healthcare and
                nutrition.</p>
          </div>
          <div class="statistics-section-box">
            <h2><i class="fa fa-users"></i></h2>
            <h2 class="no-a ssubs-odometer">6,34,448</h2>
            <p class="graph-p"> children are  better
                equipped to deal with 
                disasters.</p>
          </div>
          <div class="statistics-section-box">
            <h2><i class="fa fa-users"></i></h2>
            <h2 class="no-a tsubs-odometer">2,36,359</h2>
            <p class="graph-p"> children are given 
                protection from different
                forms of harms.</p>
          </div>
          <div class="statistics-section-box">
            <h2><i class="fa fa-users"></i></h2>
            <h2 class="no-a lsubs-odometer">3,56,888</h2>
            <p class="graph-p"> children have access to
                quality education
                and support.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Statistics section end -->
      <!-- Testimonials start -->
    <div class="section testimonials-section-main py-5">
      <div class="container">
        <div class="section-title">
          <h2>Our Team Management</h2>
        </div>
        <div class="testimonials-section-container py-5">
          <div class="testimonials-section-box">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt
              maxime quia ullam deserunt? Fugit necessitatibus dicta
            </p>
            <div class="testimonials-footer">
              <img
                src="img/Network-Profile.png"
                alt="profile" style="width: 59px;"
              />
              <div class="testimonials-role">
                <h3>Theo Hall</h3>
                <p>Management Manager</p>
              </div>
            </div>
          </div>
          <div class="testimonials-section-box">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt
              maxime quia ullam deserunt? Fugit necessitatibus dicta
            </p>
            <div class="testimonials-footer">
              <img
                src="img/profile.png"
                alt="profile"
              />
              <div class="testimonials-role">
                <h3>Lisa Paul</h3>
                <p>head of Management</p>
              </div>
            </div>
          </div>
          <div class="testimonials-section-box">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt
              maxime quia ullam deserunt? Fugit necessitatibus dicta
            </p>
            <div class="testimonials-footer">
              <img
                src="img/profile.png"
                alt="profile"
              />
              <div class="testimonials-role">
                <h3>Crist parker</h3>
                <p>Founder</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonials end -->

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
              <li>Orphan Information</li> 
            </ul>
          </div>
          <div class="footer-section-box">
              <h2>Gallery</h2>
            <ul>
                 <li>Orphan Images.</li>
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
    <!-- footer end -->
      
      
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots:false,
      autoplay:true,    
      autoplayTimeout:5000,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  })
</script>
<script src="odometer.js"></script>

  <script>

    // first odometer
     
    const fOdometer = document.querySelector(".fsubs-odometer");

    const fodometer = new Odometer({
      el: fOdometer,
    })

    // odometer.update(10864);
   fOdometer.innerHTML = 162565;

   // Second Odometer
    const sOdometer = document.querySelector(".ssubs-odometer");

    const sodometer = new Odometer({
      el: sOdometer,
    })

    // odometer.update(10864);
    sOdometer.innerHTML = 634448;
   

    // third odometer
    const tOdometer = document.querySelector(".tsubs-odometer");

    const todometer = new Odometer({
      el: tOdometer,
    })

    // odometer.update(10864);
    tOdometer.innerHTML = 236359;

    // Fouth Odometer

    const lOdometer = document.querySelector(".lsubs-odometer");

    const lodometer = new Odometer({
      el: lOdometer,
    })

    // odometer.update(10864);
    lOdometer.innerHTML = 356888;
  </script>
  </body>
</html>
