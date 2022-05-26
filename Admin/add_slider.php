<?php include("header.php"); 
    
   
    if (isset($_POST['submit'])) 
    {
       
        $s_img1= time().$_FILES['img']['name']; 
        $size = $_FILES['img']['error'];
         // echo $size; die;
        // echo $s_img; die;

            if($size==4)
            {                
                    $error = 'Enter image*';                
            }
            else
            {   
                    move_uploaded_file($_FILES['img']['tmp_name'] ,'img/'.$s_img1);
                    $qry = "INSERT into `slider`(`s_img1`) values ('$s_img1')";
                    // echo $qry ; die;
                    // header("location:view_slider.php");              
                mysqli_query($con,$qry);

            }
        
           
    }
  
?>
<div id="layoutSidenav_content" >
                <main style="margin: 30px 0px 0px 38px;">
                    <form method="POST" enctype="multipart/form-data">
                        <table class="table table-hover w-25">
                            <span style="color: red;"><?php echo @$error; ?></span>
                            <tr>
                                <td align="center" colspan="2">Add Slider</td>
                            </tr>
                            <tr>
                                <td>Slide 1</td>
                                <td>
                                    <input type="file" name="img" >
                                </td>
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
<?php include("footer.php"); ?>
