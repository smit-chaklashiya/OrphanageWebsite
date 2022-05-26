<?php include('phpmailfile.php');
    $con = mysqli_connect("localhost","root","","orphanage"); 

 	session_start();
    $uid = $_SESSION['user_log'];
    // echo $uid; die;
    if(!isset($_SESSION['user_log']))
    {
        header("location:login.php");
    }

    $qry = "select * from `trans_history` WHERE `user_id` = '$uid' ORDER BY `trans_id` DESC LIMIT 1";
    // echo $qry;die;
    $res = mysqli_query($con,$qry);
    $rec = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);

    // echo "<pre>";
    // print_r($row); die;

    $name = $row['name'];
    // echo $name; die;
    $email = $row['email'];
    $amount = $row['amount'];
    $orp_name = $row['orp_name'];
    $date = $row['date'];

    if (isset($_POST['submit'])) 
    {
    	 	$to = $email;
            $subject = "PAYMENT INVOICE";
            $body = '<html>
						<head>
							<title>INVOICE</title>
							<meta charset="utf-8" />
							<style>
								.invoice-box {
									max-width: 800px;
									margin: auto;
									padding: 30px;
									border: 1px solid #eee;
									box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
									font-size: 16px;
									line-height: 24px;
									font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
									color: #555;
									margin-top: 100px;
								}

								.invoice-box table {
									width: 100%;
									line-height: inherit;
									text-align: left;
								}

								.invoice-box table td {
									padding: 5px;
									vertical-align: top;
								}

								.invoice-box table tr td:nth-child(2) {
									text-align: right;
								}

								.invoice-box table tr.top table td {
									padding-bottom: 20px;
								}

								.invoice-box table tr.top table td.title {
									font-size: 45px;
									line-height: 45px;
									color: #FE9621;
								}

								.invoice-box table tr.information table td {
									padding-bottom: 40px;
								}

								.invoice-box table tr.heading td {
									background: #eee;
									border-bottom: 1px solid #ddd;
									font-weight: bold;
								}

								.invoice-box table tr.details td {
									padding-bottom: 20px;
								}

								.invoice-box table tr.item td {
									border-bottom: 1px solid #eee;
								}

								.invoice-box table tr.item.last td {
									border-bottom: none;
								}

								.invoice-box table tr.total td:nth-child(2) {
									border-top: 2px solid #eee;
									font-weight: bold;
								}
								.button
								{
									display: flex;
								    justify-content: center;
								    margin-top: 50px;
								}
								
								.button input 
								{
									display: flex;
								    background-color: #fe9621;  
								    text-decoration: none;
								    color: white;
								    width: 261px;
								    height: 48px;
								    text-align: center;
								    justify-content: center;
								    align-items: center;
								    border: none;
								    border-radius: 27px;
								}
								

								@media only screen and (max-width: 600px) {
									.invoice-box table tr.top table td {
										width: 100%;
										display: block;
										text-align: center;
									}

									.invoice-box table tr.information table td {
										width: 100%;
										display: block;
										text-align: center;
									}
								}

								
							</style>
						</head>

						<body>
							<div class="invoice-box ">
								<table cellpadding="0" cellspacing="0">
									<tr class="top">
										<td colspan="2">
											<table>
												<tr>
													<td class="title">
														Happy Orphan Life
													</td>

													<td>
														Created On: '.$date.'<br />
														
													</td>
												</tr>
											</table>
										</td>
									</tr>

									<tr class="information">
										<td colspan="2">
											<table>
												<tr>
													<td>Billed To:<br>
														'.$name.'<br>
														'.$email.'
													</td>
												</tr>
											</table>
										</td>
									</tr>

									<tr class="heading">
										<td>Orphan name</td>

										<td>Amount</td>
									</tr>

									<tr class="item">
										<td>'.$orp_name.'</td>

										<td>₹'.$amount.'</td>
									</tr>

									<tr class="total">
										<td>Thank you for your generous gift to <span style="color: black; font-style: bold;">'.$orp_name.'</span>. We are thrilled to have your support. </td>
									</tr>
								</table>
							</div>
						</body>
					</html>';

            $send_mail = SendMail($to, $subject, $body);

            if($send_mail == true)
            {
                $sms = "send seccessfully";
            }
            else
            {
                $sms = "not send";
            }
            
    }
    
    
?>
<!DOCTYPE html>
<html>
	<head>
		
		<title>INVOICE</title>
<meta charset="utf-8" />
		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
				margin-top: 100px;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #FE9621;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}
			.button
			{
				display: flex;
			    justify-content: center;
			    margin-top: 50px;
			}
			
			.button input 
			{
				display: flex;
			    background-color: #fe9621;  
			    text-decoration: none;
			    color: white;
			    width: 201px;
			    height: 48px;
			    text-align: center;
			    justify-content: center;
			    align-items: center;
			    border: none;
			    border-radius: 27px;
			}
			.button a 
			{
				display: flex;
			    background-color: #fe9621;  
			    text-decoration: none;
			    color: white;
			    margin-left: 7px;
			    width: 167px;
			    height: 48px;
			    text-align: center;
			    justify-content: center;
			    align-items: center;
			    border: none;
			    border-radius: 27px;
			}
			

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			
		</style>
	</head>

	<body>
		<div class="invoice-box ">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									Happy Orphan Life
								</td>

								<td>
									Created On: <?php echo $date;?><br />
									
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>Billed To:<br>
									<?php echo $name; ?><br />
									<?php echo $email; ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Orphan name</td>

					<td>Amount</td>
				</tr>

				<tr class="item">
					<td><?php echo $orp_name; ?></td>

					<td><?php echo '₹'.$amount; ?></td>
				</tr>

				<tr class="total">
					<td>Thank you for your generous gift to <span style="color: black; font-style: bold;">"<?php echo $orp_name;?>"</span>. We are thrilled to have your support. </td>
				</tr>
			</table>
		</div>
		<form method="POST">
		<div class ="button">
			<input type="submit" name="submit" value="SEND INVOICE TO E-MAIL">
			<a href="index.php"> GO TO HOMEPAGE</a>
		</div>
		</form>
	</body>
</html>