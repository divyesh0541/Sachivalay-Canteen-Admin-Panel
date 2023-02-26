<!-- Header Include -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Sachivalay - Allow Listing</title>
<?php include('header.php'); ?>
<?php  

	$admin = mysqli_query($conn,"SELECT * FROM admin WHERE id='{$_SESSION['admin_id']}'");
	$admin_row = mysqli_fetch_row($admin);

	$f_emp = mysqli_query($conn,"SELECT * FROM users WHERE status = 'allowed' AND payment_status = 'unsend' ");

	if (mysqli_num_rows($admin)>0)
       {
            echo "

            	<div class='sidebar'>
	            	<label><a href='home.php'>Home</a></label>
	            	<label><a href='verify_cred.php'>Verify Employee</a></label>
	            	<label><a href='verify_cred_cand.php'>Verify Canteen</a></label>
	            	<label><a href='enrolled_emp.php'>Enrolled Employees</a></label>
	            	<label><a href='enrolled_can.php'>Enrolled Canteens</a></label>
	            	<label><a href='wallet.php'>Add Wallet</a></label>
	            	<label><a href='logout.php'>Logout</a></label>
	            </div>
	            <div class='bread_crumb'>
	            	<label><a href='home.php' class='a_left'>Home</a>/<a href='verify_cred.php' class='a_right'>Add Wallet</a></label>
	            </div>
	            <div class='allow_listing'>
					<table>
						<tr>
							<th>Sr No</th>
							<th>Employees ID</th>
							<th>Amount</th>
							<th>Action</th>
						</tr>
					";

					$i=1;
					while ($f_emp_row = mysqli_fetch_row($f_emp)) 
					{
						echo '

								<tr>
									<td>'.$i.'</td>
									<td>'.$f_emp_row['1'].'</td>
									<td>'.$f_emp_row['2'].'</td>
									<td><a href="wallet_process.php?id='. $f_emp_row['1'] .'">Add Balance</a></td>
								</tr>

							';
						$i++;
					}
						
						
					echo "
							<tr>
								<th>Sr No</th>
								<th>Employees ID</th>
								<th>Amount</th>
								<th>Action</th>
							</tr>
						</table>
				</div>

					";
					

            
        }

?>