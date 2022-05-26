<?php
    include("header.php"); 
    $con=mysqli_connect("localhost","root","","orphanage") or die("not connected");

    if (isset($_GET['page']))
    {
        $page = $_GET['page'];
        // echo $page; die();e
    }
    else
    {
        $page = 1;
    }

    $per_page = 5;
    $offset = ($page-1) * $per_page;

    
    $qry1 = "SELECT * FROM `slider` WHERE `status`='0' LIMIT $offset,$per_page";
        // echo $qry; die(); 
    $result = mysqli_query($con,$qry1);

    $qry = "SELECT * FROM `slider` WHERE `status` = '0' ";

    $res = mysqli_query($con,$qry);
    $record = mysqli_num_rows($res);
    // echo $record; die();
    $pages = ceil($record/$per_page);
    // echo $pages; die();
    



    if (@$_GET['delete'])
     {
        $del_id = $_GET['delete'];
        // echo $del_id; die();
        $qry = "UPDATE `slider` set `status`='1' WHERE `sid` = '$del_id'";
        mysqli_query($con,$qry);

    }   
        
        
?>
            <div id="layoutSidenav_content">
                <main style="margin: 30px 0px 0px 38px;">
                    <table border="1" cellpadding="10px">
                        

                       
                        </form>
                        <tr>
                            <td>s_id</td>
                            <td>s_image</td>
                            <td>operation</td>
                        </tr>

                    <?php

                        if (@$record>0) 
                        {
                        
                            while ($row = mysqli_fetch_assoc($result)) 
                            {
                            // print_r($row);die;  
                    ?>
                        <tr>
                            <td><?php echo $row['sid'];?></td>
                            <td><img src="img/<?php echo $row['s_img1']?>" width="50px"></td>
                            
                            <td align="center">
                                <a href="view_slider.php?delete=<?php echo $row['sid']?>" ><i class="fa-solid fa-trash"></i></a>
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
                        <tr>
                            <td colspan="5">
                        <?php 

                            if(@$_GET['search'] && $page>1 && $page<=$page)
                            {
                        ?>      <a href="view_slider.php?page=<?php echo 1?>&search=<?php echo $value;?>">First</a>
                                <a href="view_slider.php?page=<?php echo($page-1)?>&search=<?php echo $value;?>">Prev</a> 
                        <?php    
                            }
                            else if ($page>1 && $page<=$page)
                            {
                        ?>
                                <a href="view_slider.php?page=<?php echo 1?>">First</a>
                                <a href="view_slider.php?page=<?php echo($page-1)?>">Prev</a> 
                        <?php
                            }
                        ?>



                        <?php 
                            for($i=1;$i<=@$pages;$i++)
                            {
                                if(isset($_GET['search']))
                                {
                        ?>
                                    <a href="view_slider.php?search=<?php echo $value;?>&page=<?php echo $i?>"><?php echo $i;?></a>
                        <?php

                                }
                                else 
                                {
                        ?>          
                                    <a href="view_slider.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    
                          <?php     
                                    
                                }
                                }
                                
                                if(@$_GET['search'] && $page<$pages)
                                {
                            ?>      
                                    <a href="view_slider.php?page=<?php echo ($page+1)?>&search=<?php echo $value;?>">Next</a>
                                    <a href="view_slider.php?page=<?php echo $pages?>&search=<?php echo $value;?>">Last</a>
                            <?php
                                }
                                elseif ($page<$pages)
                                {
                            ?>
                                    <a href="view_slider.php?page=<?php echo ($page+1)?>">Next</a>
                                    <a href="view_slider.php?page=<?php echo $pages?>">Last</a>
                            <?php        
                                }
                            ?>


                              

                            </td>
                        </tr>

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
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
