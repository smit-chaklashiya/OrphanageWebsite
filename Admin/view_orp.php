<?php include("header.php");
    $qry = "select * from `orp_register` where `status`='0'";
    // echo $qry; die;
    $res = mysqli_query($con,$qry);
    $record = mysqli_num_rows($res);

    if (@$_GET['id']) 
    {
        
            $id = $_GET['id'];
            $rj = $_GET['rj'];
            // echo $rj; die;
            $qry = "update `orp_register` set `status`='$rj' where `orp_id`='$id'";
            //echo $qry; die;
            mysqli_query($con,$qry);
            // echo $id; die;
            echo "<script> window.location.href='view_orp.php';</script>";
        
    }
?>
<div id="layoutSidenav_content" >
                <main>
                   <table border="1" style="margin: 8px 0px 0px 8px;" cellpadding="2px">
                    <tr>
                       <td>First Name</td>
                       <td>Last Name</td>
                       <td>Email id</td>
                       <td>Password</td>
                       <td>Orphan Name</td>
                       <td>Gender</td>
                       <td>State</td>
                       <td>City</td>
                       <td>Address</td>
                       <td>Phone No</td>
                       <td>Document</td>
                       <td>Profile</td>
                       <td>verification</td>
                    </tr>
                    <?php 
                            if ($record>0) 
                            {
                                while ($row = mysqli_fetch_assoc($res)) 
                                {
                                        /*echo"<pre>";
                                        print_r($row); die;*/
                    ?>
                                    <tr>
                                        <td><?php echo $row['fname'];?></td>
                                        <td><?php echo $row['lname'];?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['orp_name']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['state']; ?></td>
                                        <td><?php echo $row['city']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['phone_no']; ?></td>
                                        <td align="center"><a style="text-decoration: none;"href="../orp_reg/doc/<?php echo $row['document'];?>"><i class="fa-solid fa-folder-open"></i></a></td>
                                        <td ><img src="../orp_reg/img/<?php echo $row['profile']; ?>"width="50"></td>
                                        <td>
                                            <div style="display: flex;justify-content: space-around;"><a href="view_orp.php?id=<?php echo $row['orp_id']; ?>&rj=1"><i class="fa-regular fa-thumbs-up"></i></a>
                                            <a href="view_orp.php?id=<?php echo $row['orp_id']; ?>&rj=2"><i class="fa-regular fa-thumbs-down"></i></a></div>
                                            
                                        </td>
                                    </tr>
                    <?php
                                }
                            }
                            else
                            {
                    ?>
                            <tr >
                                <td colspan="14" align="center" style="color:red;">No request Found</td>
                            </tr>
                    <?php
                            }
                    ?>
                       
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