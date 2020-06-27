<?php
	include("developer_functions_0.php");
	include("developer_functions_1.php");
	include("developer_functions_2.php");

	if( $_SESSION['user']['role'] != "admin" ) { exit(0); }

	$page_name = "EDIT ABOUT US";
	include('about_us_header.php');
?>

	<form method="POST" name="post-form" action="edit_about_us.php">
		<p class="post_p">
			<div class="form-group">
				<textarea class="form-control" id="content_about" name="content_about" required><?php echo $content_about; ?></textarea>
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-outline-primary" name="edit" value="EDIT"/>
			</div>
		</p>
	</form>

<?php include('about_us_footer.php'); ?>

