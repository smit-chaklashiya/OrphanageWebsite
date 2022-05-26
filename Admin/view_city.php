<?php include("header.php");
    $con = mysqli_connect("localhost","root","","orphanage") or die("connection unsuccessfull");
    if(isset($_GET['ac']))
        {
            if(isset($_GET['ct']))
            {
                $ct = $_GET['ct'];
            }
            $ac = $_GET['ac'];
            // echo "id".$ac."status=".$ct; die;
            if($ct==1)
            {   
                $ct='0';
            }
            else
            {
                $ct='1';
            }
            // echo $ct; die;
            $qry = " update `city` set `city_status`='$ct' where `city_id`='$ac'";
            // echo $qry; die;
            mysqli_query($con,$qry);
            // header("location:view_state.php");

        }


?>
<div id="layoutSidenav_content" >
                <main>
                   <table border="1" style="margin: 25px;" cellpadding="15px">
                       <tr>
                           <td>ID</td>
                           <td>State</td>
                           <td>City</td>
                           <td>Status</td>
                       </tr>
                       <?php
                            $qry1 = "SELECT * FROM state INNER JOIN city ON state.st_id = city.state_id;";
                            // echo $qry1; die;
                            $res1 = mysqli_query($con,$qry1);
                            // echo $qry1 ;die;

                            while($row = mysqli_fetch_assoc($res1))
                            {
                                // echo "<pre>";
                                // print_r($row); die;
                       ?>
                       <tr>
                           <td><?php echo $row['city_id'];?></td>
                           <td><?php echo $row['st_name']; ?></td>
                           <td><?php echo $row['city_name']; ?></td>
                           <td align="center">
                                <?php
                                    if($row['city_status']==1)
                                    {
                                ?>
                                    <a href="?ac=<?php echo $row['city_id']; ?>&ct=<?php echo $row['city_status']; ?>"><i class="fa-solid fa-eye"></i></a>
                                <?php 
                                    }
                                    else
                                    {
                                ?>
                                <a href="?ac=<?php echo $row['city_id']; ?>&ct=<?php echo $row['city_status']; ?>"><i class="fa-solid fa-eye-slash"></i></a>
                            <?php }?>
                            </td>   
                       </tr>
                   <?php } ?>
                   </table>
                   
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
<?php include("footer.php"); ?>