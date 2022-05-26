 <?php 
    $con = mysqli_connect("localhost","root","","orphanage"); 
        
    session_start();
    $uid = $_SESSION['user_log'];
    // echo $uid; die;
    if(!isset($_SESSION['user_log']))
    {
        header("location:login.php");
    }
    if(@$_GET['id'])
    {
        $orp_id = $_GET['id'];
        // echo $orp_id; die;
         if (isset($_POST['submit']))
        {
            $orp_qry = "SELECT * FROM `orp_register` where `orp_id` = $orp_id";
            // echo $orp_qry; die;
            $orp_res = mysqli_query($con,$orp_qry);
            $orp_rec = mysqli_num_rows($orp_res);
            // echo $orp_rec;die;
            $orp_row = mysqli_fetch_assoc($orp_res);
            
                // echo "<pre>";
                // print_r($orp_row);die;
                $orp_name = $orp_row['orp_name'];
                $ifsc = $orp_row['ifsc_no'];
                $name = $_POST['fname'];
                $email = $_POST['email'];
                $add = $_POST['address'];
                $amt = $_POST['amt'];
                $date = date("d/m/Y");   
            
            $qry = "INSERT INTO `trans_history` (`user_id`,`name`,`email`,`address`,`orp_name`,`ifsc_no`,`amount`,`date`)values('$uid','$name','$email','$add','$orp_name','$ifsc','$amt','$date')";
            // echo $qry; die;
            $res = mysqli_query($con,$qry);
            header('location:invoice.php'); 
        }
           
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>

<div class="containerb">

    <form method="POST">

        <div class="row">

            <div class="col">
                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="john deo" name="fname" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" name="email" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality" name="address" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="mumbai" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="india" required>
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="img/card_img.png" required>
                </div>
                <div class="inputBox">
                    <span>Amount:</span>
                    <input type="number" name="amt" required>
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" required>
                </div>
                
                <div class="flex">
                    <div class="inputBox">
                        <span>exp Date :</span>
                        <input type="date" placeholder="2022" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="password" placeholder="1234" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn" name="submit">

    </form>

</div>    
    
</body>
</html>