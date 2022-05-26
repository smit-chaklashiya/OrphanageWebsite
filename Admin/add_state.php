<?php include("header.php");
    $con=mysqli_connect("localhost","root","","orphanage") or die("not connected");

    if(isset($_POST['submit']))
    {
        $s_name = $_POST['st_name'];
        @$e_qry = "SELECT * from `state` WHERE `st_name`='$s_name'";
        // echo $e_qry; die;
        @$e_res = mysqli_query($con,$e_qry);
        @$num = mysqli_num_rows($e_res);

        if($s_name=='')
        {
            $sms = "Enter State name*";
        }
        elseif ($num==1 ) 
        {
            $sms = "State already exist*"; 
        }
        else
        {
            $qry = "INSERT into `state` (`st_name`) values ('$s_name')";
            // echo $qry; die();
            $res = mysqli_query($con,$qry);
        }
    }
?>

<div id="layoutSidenav_content" >
                <main style="margin: 30px 0px 0px 38px;">
                   <form method="POST">
                   	<table border="1" cellpadding="25px">
                        <span style="color: darkred;"><?php  echo @$sms ?></span>
                   		<tr>
                   			<td colspan="2" align="center"> ADD State</td>
                   		</tr>
                   		<tr>
                   			<td>Enter State</td>
                   			<td><input type="text" name="st_name"></td>
                   		</tr>
                   		<tr>
                   			<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
                   		</tr>
                   </form>
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