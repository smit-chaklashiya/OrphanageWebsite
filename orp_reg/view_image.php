<?php include("header.php");
    
    $qry = "SELECT * FROM `orp_img` WHERE `orp_id` = '$uid' and `status`='0'";
    // echo $qry; die();
    $res = mysqli_query($con,$qry);

    if (@$_GET['del'])
    {
        $del_id = $_GET['del'];
        $qry = "UPDATE `orp_img` set `status`='1' where `img_id`='$del_id'";
        // echo $qry; die;
         mysqli_query($con,$qry);
    }
?>
<div id="layoutSidenav_content">

                <main style="margin:25px; ">
                     <form>
                     	<table>
                          <tr>
                              <td colspan="4" align="center" style="padding: 10px 95px;">Posts</td>
                          </tr>  
                          <tr>
                              <td align="center" style="padding: 10px 95px;">Id</td>
                              <td align="center" style="padding: 10px 95px;">Image</td>
                              <td align="center" style="padding: 10px 95px;">Actions</td>
                          </tr>
                                <?php 
                                        while ($row = mysqli_fetch_assoc($res)) 
                                        {
                                            // echo "<pre>";
                                            // print_r($row);die;
                                ?>
                                        <tr>
                                            <td align="center" style="padding: 10px 95px;"><?php echo $row['img_id']?></td>
                                            <td align="center" style="padding: 10px 95px;"><img src="img/<?php echo $row['img_name']?>" width="50px"></td>
                                            
                                            <td align="center">        
                                                <a href="view_image.php?del=<?php echo $row['img_id']?>"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                            </td>
                                        </tr>
                                <?php

                                        }
                                ?>
                        </table>
                     </form>
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
<?php include("footer.php");?>