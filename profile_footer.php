<?php if( session_id()=='' ) { exit(0); } ?>

                        <div class="post_comment"> <!-- SIMILAR POSTS -->
							<?php
                                $D = similar_post( 'uid', $infou['id']);
								$n_similar = count($D);
								$button_name = 'PUBLISHED POST ( '.$n_similar.' )';
								if( $n_similar ) { include('similar_post.php'); }
							?>
						</div>

					</div>

					<div class="load_more"> </div>
				</div>

				<?php include('sidebar.php'); ?> <!-- SIDEBAR -->

			</div>
		</div>
	</div>

<?php include('footer.php'); ?> <!-- FOOTER -->