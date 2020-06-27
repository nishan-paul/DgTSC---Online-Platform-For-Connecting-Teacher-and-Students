<?php
	include("developer_functions_0.php");
	include("developer_functions_1.php");
	include("developer_functions_2.php");
	 
	$v = false;
	if( isset($_GET['query']) && isset($_GET['value']) ) { $v = valid( $_GET['query'], $_GET['value'] ); }
	if( $v==false ) { exit(0); }
	
	$category = fetch_category();

	$seven = 'post';
?>


<?php include('dashboard_header.php'); ?> <!-- DASHBOARD HEADER -->

	<?php   $F = array_merge($a_l_store, $v_l_store);
			usort($F, "yFactor");
			$n_post = count($F);

			for($i = 0; $i < $n_post; $i++) {

				$B = $F[$i][0];

				$infop = information_post( $B );

				if( condition_post($infop) ) { include('post_box.php'); }
			}
	?>

<?php include('dashboard_footer.php'); ?> <!-- DASHBOARD FOOTER -->
