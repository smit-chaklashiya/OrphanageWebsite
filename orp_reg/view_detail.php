<?php include("header.php");

     if (isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
     else
        {
            $page = 1;
        }
        $per_page = 3;
        $off_set = ($page-1)*$per_page;

        $limt_qry = "SELECT * FROM `orp_about` WHERE `status`='0' and `orp_id` = '$uid' LIMIT $off_set,$per_page";
        // echo $limt_qry;die;
        $res1 = mysqli_query($con,$limt_qry);

        $qry = "SELECT * FROM `orp_about` WHERE `orp_id` = '$uid' and  `status`='0'" ;
        // echo $qry;die;   
        $res = mysqli_query($con,$qry);
        $rec = mysqli_num_rows($res);
        // echo $rec;die;
        $pages = ceil($rec/$per_page);
    
    if (isset($_GET['del_id'])) 
    {
        $del_id = $_GET['del_id'];
        $del_qry = "update `orp_about` set `status`='1' where `about_id`='$del_id'"; 
        // echo $qry; die;
        $del_res = mysqli_query($con,$del_qry);
        echo "<script> window.location.href='view_detail.php';</script>";
    }
?>
<div id="layoutSidenav_content">
                <main style="text-align: center; margin: 25px;">
                    <table cellpadding="12">
                        <tr>
                            <td>Description</td>
                            
                            <td>Operations</td>
                        </tr>   

                        <?php
                                if ($rec>0) 
                                {
                                    while($row = mysqli_fetch_assoc($res1)) 
                                    {
                                        /*echo"<pre>";
                                        print_r($row);die();*/
                        ?>  
                                        <tr>
                                            <td width="250px" class="Description"><?php echo $row['description']?></td>
                                            <td>
                                                <a href="add_detail.php?edit_id=<?php echo $row['about_id'];?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="view_detail.php?del_id=<?php echo $row['about_id'];?>"><i class="fa-solid fa-trash-can"></i></a>
                                            </td>
                                        </tr>

                        <?php
                                    }
                                }
                                else
                                {
                        ?>
                                    <tr>
                                        <td colspan="6"><span style="color: red;">No Data Found</span></td>
                                    </tr>
                        <?php
                                }
                        ?>
                        <tr>
                            <td colspan="6">
                        <?php 
                                if ($page>1 && $page<=$page) 
                                {
                        ?>          
                                    <a href="view_detail.php?page=<?php echo ($page-1); ?>">PREV</a>
                        <?php
                                }
                        ?>
                                
                        <?php 
                            for($i=1;$i<=@$pages;$i++)
                            {
                        ?>          
                                <a href="view_detail.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>            
                        <?php     
                                    
                            }
                        ?>
                        <?php 
                                if ($page<$pages) 
                                {
                        ?>         
                                    <a href="view_detail.php?page=<?php echo ($page+1); ?>">NEXT</a>
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
<?php include("footer.php"); ?>