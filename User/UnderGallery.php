<?php include("header.php");
      
      if ($_GET['id'])
       {
          $orp_id = $_GET['id'];
          $qry = "SELECT * FROM `orp_img` where `orp_id` = '$orp_id' and `status` = '0'";
          // echo $qry;die;
          $res = mysqli_query($con,$qry);
          $rec = mysqli_num_rows($res);

      }
      
?>
        
       <div class="gallery-section">
          
          <?php
              while ($row = mysqli_fetch_assoc($res)) 
              {
                 // echo "<pre>";
                 //  print_r($row);   
                  // echo $row['img_name'];die;
         ?> 
                <a href="UnderGallery.php?id=<?php echo $row['orp_id']?>"> 
                            <div class="gallery-box">
                              <img src="../orp_reg/img/<?php echo $row['img_name']?>">
                              
                            </div>
          <?php
              }
          ?>
        </div>
      </div>