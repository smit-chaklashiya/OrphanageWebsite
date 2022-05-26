<?php
  $con = mysqli_connect("localhost","root","","Orphanage") or die("connection unsuccessful");  

  if(isset($_GET['page']))
  {
    $page = $_GET['page'];
    // echo $page; die;
  }
  else
  {
    $page=1;
  }
    $per_page = 6;
    $off_set = ($page-1)*$per_page;

    $limt_qry = "SELECT * FROM `orp_register` WHERE `status`='1' LIMIT $off_set,$per_page ";
    $res1 = mysqli_query($con,$limt_qry);
    // echo $limt_qry; die;


    $qry = "SELECT * FROM `orp_register` where `status` = '1'";
    $res = mysqli_query($con,$qry);
    $rec = mysqli_num_rows($res);
    $pages = ceil($rec/$per_page);
  // $rec = 0;
  // echo $rec; die;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>save child</title>
    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
      
    <style>
        header{
            position: sticky;
            width: 100%;
            background-color: #000000;
            z-index: 1000;
        }
        a{
        	color: unset;
        	text-decoration: none;
        }
        a:hover{
        	color: unset;
        	text-decoration: none !important;
        }
        #nd
        {
           text-align: center;
           height: 90vh;
        }
        #nd h1{
          line-height: 90vh;
        }
        #nd img{
          height: 100px;
        }
      </style>
  </head>
  <body>
      
    <!-- top-section start -->
      
    <div class="top-section">	
      <header class="section">
        <div class="container">
          <div class="top-header">
            <div class="logo">
              <h1>
                <span class="gradient-icon"
                  ><i class="fa-solid fa-house-chimney"></i>
                </span>
                Happy Orphan Life
              </h1>
            </div>
            <button class="menu-button">
              <i class="fa fa-bars"></i>
            </button>
            <nav>
              <ul>
                 <li class="list"> <a href="index.php">Home  </a></li>
                   <li class="list"><a href="About.php">About Page</a></li> 
                   <li class="list"><a href="Orphanlist.php">Orphanage</a></li> 
                   <li class="list"><a href="gallery.php">Gallery</a></li> 
                  <a href="Login.php"> <li><i class="fa-solid fa-user"></i></li> </a>
                  <a class="link" href="logout.php"> <li><i class="fa-solid fa-right-from-bracket"></i></li> </a>
              </ul>
            </nav>
          </div>
        </div>
      </header>
    </div>
<div class="container pt-3">
    <div class="row">
							<?php
                if ($rec > 0) 
                { 

                  while($row = mysqli_fetch_assoc($res1))
                  {
                     /* echo "<pre>";
                      print_r($row);*/
                      // echo $row['profile'];
              ?>        
                        
                            <div class="col-4 mb-5">
                              <div class="hover2">
                                <div class="card card1">
                                    <div class="card_img cardimg">
                                      <a href="Orphaninfo.php?id=<?php echo $row['orp_id']?>"><img class="card-img-top img2" src="../orp_reg/img/<?php echo $row['profile'] ?>" alt="Card image cap"></a>
                                    </div>
                                    <div class="card-body Angular p-0">
                                        <h4 class="card-title pb-3 pl-3 pt-3"><?php echo $row['orp_name']?></h4>
                                          <div class="d-flex px-3 mb-3">
                                              <ul class="mx-auto d-flex iconcolor know">
                                              <li class="py-3 px-4" style="background-color: #fe9621;color: #fff !important;"><a href="Orphaninfo.php?id=<?php echo $row['orp_id']?>">Know More..!</a></li></ul>     
                                          </div>                        
                                    </div>
                                </div>
                              </div>
                            </div>

                          <?php } } ?>
             
	</div>
</div>

<?php
                
              if ($rec <= 0) 
                { 
              ?>
                    
                <div id="nd"><h1 ><img src="img\no-data.png">NO DATA FOUND</h1></div>
              <?php } ?>
     
              <nav aria-label="Page navigation ">
                  <ul class="pagination justify-content-center pagination-lg mb-5">
                          <?php 
                                if ($page > 1 && $page<=$page) 
                                {
                          ?>   
                                    <li class="page-item ">
                                      <a class="page-link" href="Orphanlist.php?page=<?php echo ($page-1); ?>">Previous</a>
                                    </li>
                           <?php
                                }
                          ?>
                           <?php 
                                for($i=1;$i<=@$page;$i++)
                                {
                        ?>  
                                  <li class="page-item">
                                    <a class="page-link" href="Orphanlist.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                  </li>
                        <?php     
                                   
                            }
                        ?>
                          <?php 
                                if ($page < $pages) 
                                {
                          ?>   
                                    <li class="page-item ">
                                      <a class="page-link" href="Orphanlist.php?page=<?php echo ($page+1); ?>">NEXT</a>
                                    </li>
                          <?php
                                }
                          ?>
                  </ul>
                </nav>