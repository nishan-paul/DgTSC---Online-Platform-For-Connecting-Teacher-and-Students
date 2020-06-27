<?php
	include("developer_functions_0.php");
	include("developer_functions_1.php");
	include("developer_functions_2.php");

	if( !isset($_SESSION['user']) ) { exit(0); }

	if( $_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["post"]) && $_POST["post"]=="POST" ) {

		$uid = $_SESSION['user']['id'];
		$title = esc( $_POST['title'] );
		$summary = esc( $_POST['summary'] );
		$content = esc( $_POST['content'] );
		$link = empty( esc($_POST['link']) ) ? '' : esc($_POST['link']);
		$class = intval( $_POST['class'] );
		$tag = $_POST['tag'];
		$publish_edit = date('Y-m-d');
		$edit_date = date('Y-m-d');
		$state = 'active';

		if( !empty($title) && !empty($summary) && !empty($content) && !empty($class) && !empty($tag) ) {
			if( empty($link) )
				mysqli_query( $database, "INSERT INTO article(title, summary, content, tag, class, uid, publish, edit, state) VALUES('$title', '$summary', '$content', '$tag', '$class', '$uid', '$publish_edit', '$edit_date', '$state')" );
			else
				mysqli_query( $database, "INSERT INTO video(title, summary, content, link, tag, class, uid, publish, edit, state) VALUES('$title', '$summary', '$content', '$link', '$tag', '$class', '$uid', '$publish_edit', '$edit_date', '$state')" );
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
			<button type="button" class="btn btn-light" disabled> CREATE POST </button>
		</div>
	</div>

	<div class="page_content"> <!-- PAGE CONTENT -->
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-9">
					<div class="post_content">

						<form method="POST" name="post-form" action="create_post.php">

							<div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start"> <!-- Top Panel -->
								<div class="post_meta"> <!-- CATEGORY -->
									<li class="post_share_item">
										<select class="form-control" name="class" style="color:black;">
											<option value="">CLASS</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									</li>
									<li class="post_share_item">
										<select class="form-control" name="tag" style="color:black;">
											<option value="Bangla">BANGLA</option>
											<option value="English">ENGLISH</option>
											<option value="Sociology">SOCIOLOGY</option>
											<option value="Physics">PHYSICS</option>
											<option value="Chemistry">CHEMISTRY</option>
											<option value="Mathematics">MATHEMATICS</option>
											<option value="Biology">BIOLOGY</option>
											<option value="ICT">ICT</option>
										</select>
									</li>
								</div>
							</div>

							<div style="padding-bottom:1em;"></div>

							<div class="post_body"> <!-- POST BODY -->
								<p class="post_p">
									<div class="form-group">
										<label for="title" style="font-size:1.2em; color:black;">TITLE :</label>
										<textarea class="form-control" rows="1" id="title" name="title" required style="font-size:1em; color:black;"></textarea>
									</div>

									<div class="form-group">
										<label for="summary" style="font-size:1.2em; color:black;">SUMMARY :</label>
										<textarea class="form-control" rows="4" id="summary" name="summary" required style="font-size:1em; color:black;"></textarea>
									</div>

									<div class="form-group">
										<label for="content" style="font-size:1.2em; color:black;">CONTENT :</label>
										<textarea class="form-control" id="content" name="content"></textarea>
									</div>

									<div class="form-group">
										<label for="link" style="font-size:1.2em; color:black;">LINK ( OPTIONAL ) :</label>
										<textarea class="form-control" rows="2" id="link" name="link"></textarea>
									</div>
									<br>

									<div class="form-group">
										<input type="submit" class="btn btn-outline-primary" name="post" value="POST"/>
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