<!-- Header Include -->
<?php include('db.php');session_start(); ?>	
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php include("prevent_admin.php"); ?>


<style type="text/css">
	p .fa{color: #EF3652;font-size:55px}
	p .fab{color: #EF3652;font-size:55px}
	p .fas{color: #EF3652;font-size:55px}
	p .material-icons{color: #EF3652;font-size:55px}
	header.special {text-align: center !important;margin-bottom: 2rem !important; }
</style>
<?php  

	$admin = mysqli_query($conn,"SELECT * FROM admin WHERE id='{$_SESSION['admin_id']}'");

	$admin_row = mysqli_fetch_row($admin);

	if (mysqli_num_rows($admin)>0)
        {
        	$c_enrolled_emp = mysqli_query($conn,"SELECT * FROM users WHERE status = 'allowed'");
        	$c_enrolled_can = mysqli_query($conn,"SELECT * FROM can_cred WHERE status = 'allowed'");
        	$c_payment = mysqli_query($conn,"SELECT sum(amount) FROM user_wallet");
        	$c_payment_row = mysqli_fetch_row($c_payment);

        	$total = $c_payment_row['0'];

        // 	$listing_p = mysqli_query($conn,"SELECT * FROM listing WHERE status = '0' ");
        // 	$blog = mysqli_query($conn,"SELECT * FROM blog WHERE status != '0'");
        // 	$blog_p = mysqli_query($conn,"SELECT * FROM blog WHERE status = '0' ");
        // 	$user = mysqli_query($conn,"SELECT * FROM user_type ");
        // 	$member = mysqli_query($conn,"SELECT * FROM user_type WHERE type = 'free' OR type = 'standard' OR type = 'premium'");
        // 	$feedback = mysqli_query($conn,"SELECT * FROM feedback");
        // 	$visitor = mysqli_query($conn,"SELECT * FROM visitor");
      		// $visitor_row = mysqli_fetch_row($visitor);
      		// $payment = mysqli_query($conn,"SELECT * FROM payment");

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
	            	<label><a href='home.php'>Home</a></label>
	            </div>
	            <div class='count_box'>
					<section class='wrapper'>
						<div class='inner'>
							<header class='special'>
							</header>
							<div class='highlights'>
								<section>
									<div class='content padding_reduce_content'>
										<header>
											<p><i class='fa fa-check'></i></p>
											<h3 style='margin-bottom: 5%;'>ENROLLED EMPLOYEES</h3>
											<h4 style='margin-bottom: 5%;'>".mysqli_num_rows($c_enrolled_emp)."</h4>
										</header>
									</div>
								</section>
								<section>
									<div class='content padding_reduce_content'>
										<header>
											<p><i class='fa fa-clock-o'></i></p>
											<h3 style='margin-bottom: 5%;'>ENROLLED CANTEENS</h3>
											<h4 style='margin-bottom: 5%;'>".mysqli_num_rows($c_enrolled_can)."</h4>
										</header>
									</div>
								</section>
								<section>
									<div class='content padding_reduce_content'>
										<header>
											<p><i class='fa fa-check'></i></p>
											<h3 style='margin-bottom: 5%;'>FOOD ITEMS</h3>
											<h4 style='margin-bottom: 5%;'>65</h4>
										</header>
									</div>
								</section>
								<section>
									<div class='content padding_reduce_content'>
										<header>
											<p><i class='fa fa-clock-o'></i></p>
											<h3 style='margin-bottom: 5%;'>ORDERED FOOD ITEMS</h3>
											<h4 style='margin-bottom: 5%;'>78</h4>
										</header>
									</div>
								</section>
								<section>
									<div class='content padding_reduce_content'>
										<header>
											<p><i class='fas fa-wallet'></i></p>
											<h3 style='margin-bottom: 5%;'>CATEGORIES</h3>
											<h4 style='margin-bottom: 5%;'>23</h4>
										</header>
									</div>
								</section>
								<section>
									<div class='content padding_reduce_content'>
										<header>
											<p><i class='fas fa-user-friends'></i></p>
											<h3 style='margin-bottom: 5%;'>PAYMENT</h3>
											<h4 style='margin-bottom: 5%;'>".$total."</h4>
										</header>
									</div>
								</section>
							</div>
						</div>
					</section>
				</div>

            ";
        }

?>
<title>Sachivalay - <?php echo $admin_row['1']; ?></title>