<?php
	include("developer_functions_0.php");
	include("developer_functions_1.php");
	include("developer_functions_2.php");
?>

<?php include('header.php'); ?> <!-- HEADER -->
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

	<?php include('weekly_post.php'); ?> <!-- POST OF THE WEEK -->

	<div class="page_content"> <!-- PAGE CONTENT -->
		<div class="container">
			<div class="row row-lg-eq-height">

				<div class="col-lg-9">
					<div class="main_content">
						<?php
							$section = "POPULAR ARTICLE";
							$A = $a_p_store;
							$zero 	= "article";
							include('newsfeed.php'); // BLOG SECTION - POPULAR ARTICLE

							$section = "POPULAR VIDEO";
							$A = $v_p_store;
							$zero 	= "video";
							include('newsfeed.php'); // BLOG SECTION - POPULAR VIDEO

							$section = "LATEST ARTICLE";
							$A = $a_l_store;
							$zero 	= "article";
							include('newsfeed.php'); // BLOG SECTION - LATEST ARTICLE

							$section = "LATEST VIDEO";
							$A = $v_l_store;
							$zero 	= "video";
							include('newsfeed.php'); // BLOG SECTION - LATEST VIDEO
						?>
					</div>

					<div class="load_more">
						<a href="<?php echo $link; ?>">
							<div id="load_more" class="load_more_button text-center trans_200">LOAD MORE</div>
						</a>
					</div>
				</div>

				<?php include('sidebar.php'); ?> <!-- SIDEBAR -->
				
			</div>
		</div>
	</div>

<?php include('footer.php'); ?> <!-- FOOTER -->