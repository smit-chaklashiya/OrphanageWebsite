<?php include("header.php");
 if(isset($_GET['page']))
  {
    $page = $_GET['page'];
    // echo $page; die;
  }
  else
  {
    $page=1;
  }
  $per_page = 8;
  $off_set = ($page-1)*$per_page;
  $limt_qry = "SELECT * FROM `orp_register` WHERE `status`='1' LIMIT $off_set,$per_page ";
  $res1 = mysqli_query($con,$limt_qry);
  $qry = "SELECT * FROM `orp_register` where `status` = '1'";
  $res = mysqli_query($con,$qry);
  $rec = mysqli_num_rows($res);
  $pages = ceil($rec/$per_page);
?>
 <div class="gallery-section">

            <?php
                if ($rec > 0) 
                { 

                  while($row = mysqli_fetch_assoc($res1))
                  {
                      // echo "<pre>";
                      // print_r($row);die;
                      $orp_img = $row['orp_id'];
                      // echo $row['profile'];die;
                      $img_qry = "SELECT `img_name` FROM `orp_img` where `orp_id` = '$orp_img' and `status`='0'";
                      // echo $img_qry; die;
                      $img_res = mysqli_query($con,$img_qry);
                      $img_row = mysqli_fetch_assoc($img_res);
                      // print_r($img_row['img_name']); die;

            ?>        
                          <a href="UnderGallery.php?id=<?php echo $row['orp_id']?>"> 
                            <div class="gallery-box">
                               
                              <img src="../orp_reg/img/<?php echo $row['profile'];?>" alt=" no image found">
                              <div class="bgt">
                                  <p><?php echo $row['orp_name'];?></p>
                              </div>
                            </div>
                          </a>
                           
            <?php 
                  }
                } 
                else
                {
            ?>
                  <div id="nd"><h1 ><img src="img\no-data.png">NO DATA FOUND</h1></div>
            <?php
                }
            ?>
             <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center pagination-lg mb-7">
                 <?php 
                                if ($page > 1 && $page<=$page) 
                                {
                          ?>    
                                   <li class="page-item">
                                      <a class="page-link" href="gallery.php?page=<?php echo ($page-1); ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                  </li>
                           <?php
                                }

                                for($i=1;$i<=@$page;$i++)
                                {
                        ?>  
                                  <li class="page-item">
                                    <a class="page-link" href="gallery.php?page=<?php echo $i;?>"><?php echo $i; ?></a>
                                  </li>
                        <?php     
                                   
                            }
                              if ($page < $pages) 
                              {
                          ?>   
                                  <li class="page-item ">
                                     <a class="page-link" href="gallery.php?page=<?php echo ($page+1); ?>">NEXT</a>
                                  </li>
                          <?php
                                }
                          ?>
              </ul>
            </nav>
</div>
          