<?php include('db.php'); session_start(); ?>

<!-- CSS Link -->
<link rel="stylesheet" href="css/style.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Mobile Toggle Menu -->
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery(".togglemnu").click(function(){
			jQuery(".nav_header").slideToggle();
		});

		//Dashboard Sidebar
		jQuery("<div class='sdbr_tgl'><span></span><span></span><span></span></div>").insertBefore(".sidebar");
		jQuery(".sdbr_tgl").click(function(){
			jQuery(this).toggleClass("open_sidebar");
		});
	});
</script>

<!-- Header User Butoon and Session -->
<?php  

	if (isset($_SESSION['admin_id'])) 
	{
		$query = mysqli_query($conn,"SELECT * FROM admin WHERE id='{$_SESSION['admin_id']}'");
		$row = mysqli_fetch_row($query);
		
	}

?>