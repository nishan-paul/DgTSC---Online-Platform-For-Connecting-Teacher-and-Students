<?php if( session_id()=='' ) { exit(0); } ?>

<?php include('header.php'); ?> <!-- HEADER -->
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/post.css">
<link rel="stylesheet" type="text/css" href="styles/post_responsive.css">

    <div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo 'images/background.jpg'; ?>" data-speed="0.8"></div>
		<div class="home_content">
            <button type="button" class="btn btn-light" disabled>
				<?php
                    $q_name = $_GET['query'];
					$v_name = $_GET['value'];
					if( $q_name=='publish_date' && $seven=='post' ) { $q_name = 'published'; $v_name = format_date($v_name); }
					if( $q_name=='publish_date' && $seven=='user' ) { $q_name = 'joined'; $v_name = format_date($v_name); }
					if( $q_name=='rating' ) { $v_name = $v_name.' lesss than'; }
                    $p_name = $seven=='user'? 'dashboard of users' : 'dashboard of videos';
					echo strtoupper( $p_name.' [ '.$q_name.' : '.$v_name.' ]' );
                ?>
			</button>
		</div>
	</div>

	<div class="page_content"> <!-- PAGE CONTENT -->
		<div class="container">
			<div class="row row-lg-eq-height">

				<div class="col-lg-9">
					<div class="main_content">
                        <div class="blog_section">

							<?php
								if( $seven=='post' )
									include('category_dashboard_admin_post.php');
								else
									include('category_dashboard_admin_user.php');
							?>

                            <div class="section_content">
                                <div class="grid clearfix">