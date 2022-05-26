<?php include("header.php");
    
    if (isset($_POST['submit']))
    {
       $orp_image = time().$_FILES['post']['name'];
       /*echo "<pre>";
       print_r($orp_image); die();*/
       // echo $orp_image; die();
       if ($_FILES['post']['error'] == 4) 
        {
            $sms = "Enter Image*";
        }
       else
        {
            move_uploaded_file($_FILES['post']['tmp_name'] ,'img/'.$orp_image);
            $qry = "INSERT INTO `orp_img`(`orp_id`,`img_name`)VALUES('$uid','$orp_image')";
            // echo $qry; die;
            $res = mysqli_query($con,$qry);
        }

    }

?>
<div id="layoutSidenav_content">

                <main style="margin:25px; ">
                     <span style="color:red;"><?php echo @$sms;?></span>

                    <form method="POST" enctype="multipart/form-data">
                        <table cellpadding="10px">
                            <tr>
                            	<td colspan="2" align="center" style="font-size: 25px;">Add Post</td>
                            </tr>
                            <tr>
                            	<td>Enter Image: </td>
                            	<td><input type="file" name="post"></td>
                            </tr>
                            <tr>
                            	<td colspan="2" align="center"><input type="submit" name="submit"></td>
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
<?php include("footer.php");?>