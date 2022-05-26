<?php include("header.php");

    
    if (isset($_GET['edit_id']))
    {
        $edit_id = $_GET['edit_id'];
        $edit_qry = "SELECT * FROM `orp_about` WHERE `about_id` = '$edit_id'";
        // echo $edit_qry; die();
        $edit_res = mysqli_query($con,$edit_qry);
        $edit_row = mysqli_fetch_assoc($edit_res);

        /*echo"<pre>";
        print_r($edit_row); die();*/

        $desc = $edit_row['description'];

    }
    if (isset($_POST['submit']))
    {
        // echo @$_POST['desc'];
        $desc = $_POST['desc'];

        if ($desc == '')
        {
            $sms = "Enter the description*";
        }
        else
        {
            if(isset($_GET['edit_id']))
            {
                    
                $qry = "UPDATE `orp_about` SET `orp_id`='$uid',`description`='$desc' WHERE `about_id` = '$edit_id'";
                // echo $qry; die;    
                    
            } 
            else
            {
            
                
                $qry = "INSERT INTO `orp_about`(`orp_id`,`description`)VALUES ('$uid','$desc')";
                    // echo $qry; die;

            }
                $res =  mysqli_query($con,$qry);
            
        }
        
            
    }  
?>
<div id="layoutSidenav_content">

                <main style="margin:25px; "><?php echo @$sms;?>
                    <div id="div_editor1" > 
                         
                    </div> 

                    <form method="POST" enctype="multipart/form-data" style="margin-top: 5px;">
                        <input id="hiddenInput" type="hidden" name="desc" >  
                        <div style="display: flex; justify-content: center;"><input type="submit" name="submit"></div>
                    </form>


                    <script type="text/javascript" src="./richtexteditor/rte.js"></script>  
                    <script type="text/javascript" src='./richtexteditor/plugins/all_plugins.js'></script>  
                    <script type="text/javascript">
                        
                            var editor1 = new RichTextEditor("#div_editor1");  

                            editor1.attachEvent("change", function () {      
                                var text = editor1.getHTMLCode();      
                                    document.getElementById("hiddenInput").value = text;
                            }); 
                    </script>
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