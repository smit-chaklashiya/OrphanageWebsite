<?php include("header.php");
	
	$st_qry = "SELECT * from `state`";
	$st_res = mysqli_query($con,$st_qry);
    
    if (isset($_GET['submit'])) 
    {

        @$state = $_GET['state'];
        // echo $state; die;
        $ct_name = $_GET['ct_name'];
        @$e_qry = "SELECT * from `city` WHERE `city_name`='$ct_name'";
        // echo $e_qry; die;
        @$e_res = mysqli_query($con,$e_qry);
        @$num = mysqli_num_rows($e_res);
        if ($state=='0') 
        {
            $sms = 'select State*';
        }
        elseif ($ct_name=='') 
        {
            $sms = 'Enter City*';

        }
        elseif ($num==1)
        {
            $sms = 'Enter City already exist*';

        }
        else
        {
            $qry = "INSERT into `city` (`state_id`,`city_name`)values('$state','$ct_name')";
            // echo $qry; die;
            $res = mysqli_query($con,$qry);
        }
        
    }
?>

<div id="layoutSidenav_content" >
                <main>
                    <span style="color: darkred; "><?php echo @$sms ?></span>
                   <form method="GET">
                   	<table border="1" style="margin: 25px 0px 0px 25px;" cellpadding="10px">

                   		<tr>
                   			<td colspan="2" align="center">Enter City</td> 
                   		</tr>
                   		<tr>
                   			<td>Select State</td>
                   			<td>
                   				<select name="state">
                   						<option value="0">Select state</option>
                   						<?php 
                   							$state = "select * from `state` where `st_status`='0'";
                   							$state_res = mysqli_query($con,$state);
                   							while($state_row = mysqli_fetch_assoc($state_res))
                   							{
                   								// echo "<pre>";
                   								// print_r($state_row); die;
                   						?>
     									<option value="<?php echo $state_row['st_id']; ?>"<?php if(@$state_row['st_id']==@$st_id){ echo'selected';}?>><?php echo $state_row['st_name']; ?></option>
     								<?php } ?>
     									
                   				</select>
                   		</td>
                   		</tr>
                   		<tr>
                   			<td>Enter City:</td>
                   			<td><input type="text" name="ct_name" value="<?php echo @$ct_name;?>"></td>
                   		</tr>
                   		<tr>
                   			<td colspan="2" align="center"><input type="submit" name="submit" ></td>
                   		</tr>
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
<?php include("footer.php"); ?>