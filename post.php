<?php
	include("developer_functions_0.php");
	include("developer_functions_1.php");
	include("developer_functions_2.php");

    $v0 = isset( $_SESSION['user'] );
    $v1 = ( isset($_GET['flag']) && isset($_GET['p_id']) && valid($_GET['flag'], $_GET['p_id']) );
	if( !$v0 || !$v1 ) { exit(0); }

	$flag = $_GET["flag"];
	$p_id = intval( $_GET["p_id"] );
	$query_post = mysqli_query($database, "SELECT * FROM $flag WHERE id='$p_id'");
    $A = mysqli_fetch_assoc($query_post);
    
    $infop = information_post( $A );
	
	if( $infop['state']=='deactive' || ( $infop['state']=='inactive' && $infop['w_id']!=$_SESSION['user']['id'] ) ) { exit(0); }

	if( $_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["comment"]) && $_POST["comment"]=="COMMENT" ) {

		$content = esc($_POST['content_comment']);
		$publish = date('Y-m-d');
        $edit = date('Y-m-d');
        $state = 'active';

        if( !empty($content) ) {

            $table_post = $flag;
            $table_comment = 'comment_'.$flag;
            
            $sql = "INSERT INTO $table_comment(pid, content, publish, edit, uid, state) VALUES('$p_id', '$content', '$publish', '$edit', '$w_id', '$state')";
            mysqli_query( $database, $sql );
            
            update_comment($table_post, $table_comment, $p_id);
        }
        else
            echo "<script type='text/javascript'>alert('EMPTY FIELD');</script>";
    }
?>

<?php include('header.php'); ?> <!-- HEADER -->
<link rel="stylesheet" type="text/css" href="styles/post.css">
<link rel="stylesheet" type="text/css" href="styles/post_responsive.css">

	<div class="home"> <!-- TAG AND TITLE -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo 'images/background.jpg'; ?>" data-speed="0.8"></div>
		<div class="home_content">
			<div class="post_category trans_200">
				<a href="<?php echo $infop['link_tag_dashboard']; ?>" class="trans_200">
					<?php echo $infop['tag']; ?>
				</a>
			</div>
			<a href="<?php echo $infop['post_link']; ?>">
				<div class="post_title eight-cut-text">
					<?php echo $infop['title']; ?>
				</div>
			</a>
		</div>
	</div>
	
	<div class="page_content"> <!-- PAGE CONTENT -->
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-9">
					<div class="post_content">
						<div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start"> <!-- WRITER -->
							<a href="<?php echo $infop['profile']; ?>">
								<div class="author_image">
									<div>
										<img src="<?php echo $infop['w_picture']; ?>">
									</div>
								</div>
							</a>

							<div class="post_quote post_p">
								<a href="<?php echo $infop['$link_w_username_dashboard']; ?>"> <?php echo $infop['w_username']; ?> </a>

								&bull; <a href="<?php echo $infop['link_publish_dashboard']; ?>"> <?php echo $infop['publish_date']; ?> </a>
							</div>

							<div class="post_share ml-sm-auto">
								<div class="post_quote post_p">
									<a href="<?php echo $infop['link_class_dashboard']; ?>"> Class <?php echo $infop['class']; ?> </a>

									&bull; <a href="<?php echo $infop['link_tag_dashboard']; ?>"> <?php echo $infop['tag']; ?> </a>

									<?php	if( $infop['w_id']==$_SESSION['user']['id'] && $infop['state']=='active' ) { ?>
												&bull; <a href="<?php echo $infop['post_link_inactive']; ?>"> <?php echo $infop['state']; ?> </a>
									<?php 	} if( $infop['w_id']==$_SESSION['user']['id'] && $infop['state']=='inactive' ) { ?>
												&bull; <a href="<?php echo $infop['post_link_active']; ?>"> <?php echo $infop['state']; ?> </a>
									<?php 	} ?>
								</div>
							</div>
						</div>

						<div style="padding-bottom:1em;"></div>

						<div class="post_body"> <!-- POST BODY -->
							<p class="post_p"> <?php echo $infop['content']; ?> </p> <!-- CONTENT -->

							<?php 	if( $flag=="video" ) { ?> <!-- VIDEO LINK -->
										<div style="padding-top:3em; padding-bottom:3em;">
											<div class="section_content">
												<div class="row">
													<div class="col">
														<div class="videos">
															<div class="player_container">
																<div id="P1" class="player" data-property="{videoURL:'<?php echo $infop['video_link']; ?>',containment:'self',startAt:0,mute:false,autoPlay:false,loop:false,opacity:1}"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
							<?php 	} ?>

							<?php 	if( $infop['w_username'] == $_SESSION["user"]["username"] ) { ?> <!-- EDIT POST -->
										<div style="padding-top:2em;">
											<a href="<?php echo $infop['post_link_edit']; ?>"> <button type="button" class="btn btn-outline-primary btn-sm"> EDIT POST  </button> </a>
										</div>
							<?php 	} ?>
						</div>

						<div class="post_comment"> <!-- SIMILAR POSTS -->
                            <?php
                                $D = similar_post( 'tag', $infop['tag']);
								$n_similar = count($D) <= 6 ? count($D) : 6;
								$button_name = 'SIMILAR POST';
								if( $n_similar ) { include('similar_post.php'); }
							?>
						</div>
						
						<div class="similar_posts"> <!-- CREATE AND FETCH COMMENT -->
							<?php include('create_comment.php'); ?>
							<?php if( $infop['comment'] ) { include('comment.php'); } ?>
						</div>
					</div>

					<div class="load_more"> </div>
				</div>

				<?php include('sidebar.php'); ?> <!-- SIDEBAR -->
			</div>
		</div>
	</div>

<?php include('footer.php'); ?> <!-- FOOTER -->
