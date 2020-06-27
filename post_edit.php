<?php
	include("developer_functions_0.php");
	include("developer_functions_1.php");
	include("developer_functions_2.php");

    $v0 = isset( $_SESSION['user'] );
    $v1 = isset($_GET['flag']) && isset($_GET['p_id']) && valid($_GET['flag'], $_GET['p_id']);
	if( !$v0 || !$v1 ) { exit(0); }

	$flag = $_GET["flag"];
	$p_id = intval( $_GET["p_id"] );
	$query_post = mysqli_query( $database, "SELECT * FROM $flag WHERE id='$p_id'" );
    $A = mysqli_fetch_assoc($query_post);
    
    $infop = information_post( $A );
	
	if( $infop['state']=='deactive' || ( $infop['state']=='inactive' && $infop['w_id']!=$_SESSION['user']['id'] ) ) { exit(0); }

	if( $_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["edit"]) && $_POST["edit"]=="EDIT" ) {

		$title = esc( $_POST['title'] );
		$summary = esc( $_POST['summary'] );
		$content = esc( $_POST['content'] );
		$link = empty( esc($_POST['link']) ) ? '' : esc( $_POST['link'] );
		$class = intval( $_POST['class'] );
		$tag = $_POST['tag'];
		$edit = date('Y-m-d');

		if( !empty($title) && !empty($summary) && !empty($content) && !empty($class) && !empty($tag) ) {

            $table = empty($link) ? 'article' : 'video';

			mysqli_query( $database, "UPDATE $table SET title='$title' WHERE id='$p_id'" );
			mysqli_query( $database, "UPDATE $table SET summary='$summary' WHERE id='$p_id'" );
			mysqli_query( $database, "UPDATE $table SET content='$content' WHERE id='$p_id'" );
			mysqli_query( $database, "UPDATE $table SET class='$class' WHERE id='$p_id'" );
            mysqli_query( $database, "UPDATE $table SET tag='$tag' WHERE id='$p_id'" );
            mysqli_query( $database, "UPDATE $table SET edit='$edit' WHERE id='$p_id'" );

			if( !empty($link) ) mysqli_query( $database, "UPDATE $table SET link='$link' WHERE id='$p_id'" );

			echo "<script type='text/javascript'> window.location = '$post_link'; </script>";
		}
		else
			echo "<script type='text/javascript'>alert('ONE OF THE FIELDS IS EMPTY');</script>";
	}
?>

<?php include('header.php'); ?> <!-- HEADER -->
<link rel="stylesheet" type="text/css" href="styles/post.css">
<link rel="stylesheet" type="text/css" href="styles/post_responsive.css">

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo 'images/background.jpg'; ?>" data-speed="0.8"></div>
		<div class="home_content">
			<button type="button" class="btn btn-light" disabled> EDIT POST </button>
		</div>
	</div>

	<div class="page_content"> <!-- PAGE CONTENT -->
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-9">
					<div class="post_content">

						<form method="POST" name="post-form" action="<?php echo $post_link; ?>">

							<div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start"> <!-- Top Panel -->
								<div class="post_meta"> <!-- CATEGORY -->
									<li class="post_share_item">
										<select class="form-control" name="class" style="color:black;">

											<option value="">CLASS</option>

                                            <?php
                                                for($i = 1; $i <= 12; $i++) {
                                                    if( $i != $infop['class'] )
                                                        echo "<option value='$i'>$i</option>";
                                                    else
                                                        echo "<option value='$i' selected>$i</option>";
                                                }
											?>
										</select>
									</li>

									<li class="post_share_item">
										<select class="form-control" name="tag" style="color:black;">
													
                                            <?php
                                                $category = fetch_category();
                                                $n_category = count($category);

                                                for($i = 0; $i < $n_category; $i++) {

                                                    $j = $category[$i]['tag'];
                                                    $k = strtoupper($category[$i]['tag']);
                                                    if( $j != $infop['tag'] )
                                                        echo "<option value='$j'>$k</option>";
                                                    else
                                                        echo "<option value='$j' selected>$k</option>";
                                                }
											?>
										</select>
									</li>
								</div>
							</div>

							<div style="padding-bottom:1em;"></div>

							<div class="post_body"> <!-- POST BODY -->
								<p class="post_p">
									<div class="form-group">
										<label for="title" style="font-size:1.2em; color:black;">TITLE :</label>
										<textarea class="form-control" rows="1" id="title" name="title" required style="font-size:1em; color:black;"><?php echo $infop['title']; ?></textarea>
									</div>

									<div class="form-group">
										<label for="summary" style="font-size:1.2em; color:black;">SUMMARY :</label>
										<textarea class="form-control" rows="4" id="summary" name="summary" required style="font-size:1em; color:black;"><?php echo $infop['summary']; ?></textarea>
									</div>

									<div class="form-group">
										<label for="content" style="font-size:1.2em; color:black;">CONTENT :</label>
										<textarea class="form-control" id="content" name="content"><?php echo $infop['content']; ?></textarea>
									</div>

									<div class="form-group">
										<label for="link" style="font-size:1.2em; color:black;">LINK ( OPTIONAL ) :</label>
										<textarea class="form-control" rows="2" id="link" name="link"><?php echo $infop['link']; ?></textarea>
									</div>
									<br>

									<div class="form-group">
										<input type="submit" class="btn btn-outline-primary" name="edit" value="EDIT"/>
									</div>
								</p>
							</div>

						</form>

					</div>

					<div class="load_more"> </div>
				</div>

				<?php include('sidebar.php'); ?> <!-- SIDEBAR -->

			</div>
		</div>
	</div>

<?php include('footer.php'); ?> <!-- FOOTER -->