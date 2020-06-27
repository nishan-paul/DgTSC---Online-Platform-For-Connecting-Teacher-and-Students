<?php
	include("developer_functions_0.php");
	include("developer_functions_1.php");
	include("developer_functions_2.php");

	$page_name = "ABOUT US";
	include('about_us_header.php');
?>

	<p class="post_p"> <?php echo $content_about; ?> </p>

	<?php 	if( isset($_SESSION['user']) && $_SESSION["user"]["role"]=="admin" ) { ?> <!-- EDIT ABOUT US -->
				<div style="padding-top:2em;">
					<a href="about_us_edit.php"> <button type="button" class="btn btn-outline-primary btn-sm"> EDIT ABOUT US </button> </a>
				</div>
	<?php 	} ?>

<?php include('about_us_footer.php'); ?>
