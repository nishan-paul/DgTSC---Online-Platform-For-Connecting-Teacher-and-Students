<?php if(  session_id()=='' ) exit(0); ?>

<?php	function weekly_post() {

			global $database;
			
			$w_post = array();

			$query = mysqli_query($database, "SELECT * FROM category");

			while( $result = mysqli_fetch_assoc($query) ) {

				$a_post = array();

				// $hv = intval( strtotime("saturday this week") / 86400 ); $lv = $hv - 7;
				$hv = intval( strtotime("now") / 86400 ); $lv = 0; // TEMPORARY
				$tag = $result['tag'];

				$query_article = mysqli_query($database, "SELECT * FROM article");
				while( $result_article = mysqli_fetch_assoc($query_article) ) {

					$day = intval( strtotime($result_article['publish']) / 86400 );
					if( $day >= $lv && $day <= $hv && $tag == $result_article['tag'] && $result_article['state']=='active' ) {

						$tmp = array( $result_article, intval($result_article['comment']) );
						array_push( $a_post, $tmp );
					}
				}

				$query_video = mysqli_query($database, "SELECT * FROM video");
				while( $result_video = mysqli_fetch_assoc($query_video) ) {

					$day = intval( strtotime($result_video['publish']) / 86400 );
					if( $day >= $lv && $day <= $hv && $tag == $result_video['tag'] && $result_video['state']=='active' ) {

						$tmp = array( $result_video, intval($result_video['comment']) );
						array_push( $a_post, $tmp );
					}
				}

				usort($a_post, "xFactor");

				if( !empty($a_post) ) { array_push( $w_post, $a_post[0][0] ); }
			}

			return $w_post;
		}

		$w_post = weekly_post()
?>

<div class="home">
	<div class="home_slider_container">
		<div class="owl-carousel owl-theme home_slider">

			<?php	$n_week = count($w_post);

				 	for($i = 0; $i < $n_week; $i++) {

						$J = $w_post[$i];

				        $infop = information_post( $J ); ?>

						<div class="owl-item"> <!-- Slider Item -->
							<div class="home_slider_background" style="background-image:url(<?php echo 'images/background.jpg'; ?>)"></div>
							<div class="home_slider_content_container">
								<div style="padding:2em"></div>

								<div class="container center">
									<button type="button" class="btn btn-light btn-sm" disabled>POST OF THE WEEK</button>

									<div class="row">
										<div class="home_slider_content">

											<div class="card card_largest_with_image grid-item">

												<a href="<?php echo $infop['link_w_username_dashboard']; ?>"> <img class="card-img-top" src="<?php echo $infop['p_picture_1']; ?>"> </a>
												
												<div class="card-body">
													<div class="card-title five-cut-text"><a href="<?php echo $infop['post_link']; ?>"><?php echo $infop['title']; ?></a></div>
													<div class="card-text six-cut-text"><?php echo $infop['summary']; ?></div> <br>

													<div class="post-meta three-cut-text">
														<a href="<?php echo $infop['link_profile']; ?>"><?php echo $infop['w_username']; ?></a> &bull;
														<a href="<?php echo $infop['link_publish_dashboard']; ?>"><?php echo $infop['publish_date']; ?></a>
													</div>

													<div class="post-meta three-cut-text">
														<a href="<?php echo $infop['link_class_dashboard']; ?>">Class <?php echo $infop['class'].','; ?> </a>
														<a href="<?php echo $infop['link_tag_dashboard']; ?>"><?php echo $infop['tag']; ?> </a> &bull;
														<a href="<?php echo $infop['post_link']; ?>"><?php echo $infop['comment']; ?> <span class="far fa-comment"></span> </a>
													</div>
												</div>

											</div>

										</div>
									</div>
								</div>

							</div>
						</div>

			<?php 	} ?>

			<div class="owl-item">
				<div class="home_slider_background" style="background-image:url(<?php echo 'images/background.jpg'; ?>)"></div>
			</div>

		</div>
	</div>
</div>
