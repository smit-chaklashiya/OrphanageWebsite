<?php include("header.php");
	$con=mysqli_connect("localhost","root","","orphanage") or die("not connected");

	if(isset($_GET['ac']))
	{
		if(isset($_GET['st']))
		{
			$st = $_GET['st'];
		}
		$ac = $_GET['ac'];
		// echo "id".$ac."status=".$st; die;
		if($st==1)
		{
			$st='0';
		}
		else
		{
			$st='1';
		}
		// echo $st; die;
		$qry = " update `state` set `st_status`='$st' where `st_id`='$ac'";
		// echo $qry; die;
		mysqli_query($con,$qry);
		// header("location:view_state.php");

	}

	$qry = "SELECT * FROM `state`";
	$res = mysqli_query($con,$qry);
	$rec = mysqli_num_rows($res);
?>
<div id="layoutSidenav_content" >
                <main style="margin: 30px 0px 0px 38px;">
                   
                   	<table border="1" cellpadding="10px">
                   		<tr>
                   			<td colspan="3" align="center">view states</td>
                   		</tr>
                        <tr>
                            <td>s_id</td>
                            <td>s_name</td>
                            <td>Status</td>
                        </tr>
                        <?php

                        if (@$rec>0) 
                        {
                        
                            while ($row = mysqli_fetch_assoc($res)) 
                            {
                            
                    ?>
                        <tr align="center">
                            <td><?php echo $row['st_id'];?></td>
                            <td><?php echo $row['st_name'];?></td> 
                             <td>
                                <?php
                                	if($row['st_status']==1)
                                	{
                                ?>
                                	<a href="?ac=<?php echo $row['st_id']; ?>&st=<?php echo $row['st_status']; ?>"><i class="fa-solid fa-eye"></i></a>
                            	<?php 
                            		}
                            		else
                            		{
                            	?>
                            	<a href="?ac=<?php echo $row['st_id']; ?>&st=<?php echo $row['st_status']; ?>"><i class="fa-solid fa-eye-slash"></i></a>
                            <?php }?>
                            </td>                          
                            
                        </tr>
                <?php
                         }
                      }
                        else
                        {
                ?>
                            <tr>
                                <td colspan="5" align="center"><span style="color: darkred;">NO DATA FOUND</span></td>
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