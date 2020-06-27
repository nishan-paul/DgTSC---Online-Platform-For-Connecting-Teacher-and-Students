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
                    if( $q_name=='rating' ) { $v_name = $rating.' lesss than'; }
                    $p_name = $zero;
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

                            <?php include('category_home_article_video.php'); ?>

                            <div class="section_content">
                                <div class="grid clearfix">

                                    <?php   $F = ( $_GET['value']=='popular' )? $a_p_store : $a_l_store;
                                            if( $zero=='video' ) { $F = ( $_GET['value']=='popular' )? $v_p_store : $v_l_store; }
                                            $n_post = count($F);

                                            for($i = 0; $i < $n_post; $i++) {

                                                $B = $F[$i][0];

                                                $infop = information_post( $B );

                                                if( condition_post($infop) ) { include('post_card.php'); }
                                            }
                                    ?>
                                </div>
                            </div>
                        </div>
					</div>

					<div class="load_more"> </div>
				</div>

				<?php include('sidebar.php'); ?> <!-- SIDEBAR -->

			</div>
		</div>
	</div>

<?php include('footer.php'); ?> <!-- FOOTER -->