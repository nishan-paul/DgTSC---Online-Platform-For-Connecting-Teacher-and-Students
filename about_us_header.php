<?php
    if( session_id()=='' ) { exit(0); }

    $query_about = mysqli_query($database, "SELECT * FROM about_us");
    $result_about = mysqli_fetch_assoc($query_about);
    $content_about = htmlspecialchars_decode( $result_about["content"] );

    if( $_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["edit"]) && $_POST["edit"]=="EDIT" ) {
        $id = 0;
        $content_about_edit = esc( $_POST['content_about'] );

        if( !empty($_POST['content_about']) ) {
            mysqli_query($database, "UPDATE about_us SET content='$content_about_edit' WHERE id='$id'");
            echo "<script type='text/javascript'> window.location = 'about_us.php'; </script>";
        }
        else
            echo "<script type='text/javascript'> alert('EMPTY FIELD'); </script>";
    }
?>

<?php include('header.php'); ?> <!-- HEADER -->
<link rel="stylesheet" type="text/css" href="styles/post.css">
<link rel="stylesheet" type="text/css" href="styles/post_responsive.css">

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo 'images/background.jpg'; ?>" data-speed="0.8"></div>
		<div class="home_content">
			<button type="button" class="btn btn-light" disabled> <?php echo $page_name; ?> </button>
		</div>
	</div>

	<div class="page_content"> <!-- PAGE CONTENT -->
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-9">
					<div class="post_content">

						<div style="padding-top:11.50em;"></div>
						
						<div class="post_body">