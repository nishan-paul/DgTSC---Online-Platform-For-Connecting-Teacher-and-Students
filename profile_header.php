<?php
	$s_id = intval( $_GET['s_id'] );

    $K = byID($s_id, 'user');
    $infou = information_user( $K );
    
	if( $_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["edit"]) && $_POST["edit"]=="EDIT" ) {

		$bio = esc( $_POST['bio'] );
		$education = esc( $_POST['education'] );
		$profession = esc( $_POST['profession'] );
		$address = esc( $_POST['address'] );
		$email = esc( $_POST['email'] );
		$phone = esc( $_POST['phone'] );
		$password = md5( esc( $_POST['password'] ) );
		$password_new = md5( esc( $_POST['password_new'] ) );
		$edit_date = date('Y-m-d');

		if( $password == $_SESSION['user']['password'] ) {

			mysqli_query( $database, "UPDATE user SET bio='$bio' WHERE id='$s_id'" );
			mysqli_query( $database, "UPDATE user SET education='$education' WHERE id='$s_id'" );
			mysqli_query( $database, "UPDATE user SET profession='$profession' WHERE id='$s_id'" );
			mysqli_query( $database, "UPDATE user SET address='$address' WHERE id='$s_id'" );
			mysqli_query( $database, "UPDATE user SET email='$email' WHERE id='$s_id'" );
			mysqli_query( $database, "UPDATE user SET phone='$phone' WHERE id='$s_id'" );
			mysqli_query( $database, "UPDATE user SET password='$password' WHERE id='$s_id'" );
			mysqli_query( $database, "UPDATE user SET edit='$edit_date' WHERE id='$s_id'" );

		} else {

			echo "<script type='text/javascript'> alert('PASSWORD DID NOT MATCH'); </script>";
			echo "<script type='text/javascript'> window.location = 'profile.php'; </script>";
		}
	}

    $button_name = $s_id==$_SESSION['user']['id'] ? "PROFILE" : "PROFILE [ USERNAME : ".strtoupper($infou['username'])." ]";
?>

<?php include('header.php'); ?> <!-- HEADER -->
<link rel="stylesheet" type="text/css" href="styles/post.css">
<link rel="stylesheet" type="text/css" href="styles/post_responsive.css">

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo 'images/background.jpg'; ?>" data-speed="0.8"></div>
		<div class="home_content">
			<button type="button" class="btn btn-light" disabled>
				<?php echo $button_name; ?>
			</button>
		</div>
	</div>

	<div class="page_content"> <!-- PAGE CONTENT -->
		<div class="container">
			<div class="row row-lg-eq-height">

				<div class="col-lg-9">
					<div class="post_content">

						<div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start"> <!-- WRITER -->
							<a href="<?php echo $infou['profile']; ?>">
								<div class="author_image">
									<div>
										<img src="<?php echo $infou['picture_1']; ?>">
									</div>
								</div>
							</a>

							<div class="post_quote post_p">
								<a href="<?php echo $infou['profile']; ?>"> <?php echo $infou['username']; ?> </a>

								&bull; <a href="<?php echo $infou['link_publish']; ?>"> <?php echo $infou['publish_date']; ?> </a>

								&bull; <a href="<?php echo $infou['profile_comment']; ?>"> <i class="far fa-comment"></i> comment</a>
							</div>

							<div class="post_share ml-sm-auto">
								<div class="post_quote post_p">
									<a href="<?php echo $infou['link_role']; ?>"> <?php echo $infou['role']; ?> </a>
									
									<?php	if( $infou['role']=='teacher') { ?>
												&bull; <a href="<?php echo $infou['link_rating']; ?>"> <i class="fa fa-star" aria-hidden="true"> <?php echo $infou['rating']; ?> </i> </a>
									<?php 	} ?>
								</div>
							</div>
						</div>

						<div style="padding-bottom:1em;"></div>