<?php
	include("developer_functions_0.php");
	include("developer_functions_1.php");
	include("developer_functions_2.php");
	 
	$v = false;
	if( isset($_GET['query']) && isset($_GET['value']) ) { $v = valid( $_GET['query'], $_GET['value'] ); }
    if( $v==false ) { exit(0); }
    
    $seven = 'user';
?>


<?php include('dashboard_header.php'); ?> <!-- DASHBOARD HEADER -->

    <?php   $query_user = mysqli_query($database, "SELECT * FROM user");
            $K = array();
            while( $J = mysqli_fetch_assoc($query_user) ) { array_push($K, array($J, $J['publish']) ); }
            usort($K, "yFactor");
            $n_user = count($K);

            for($i = 0; $i < $n_user; $i++) {

                $B = $K[$i][0];
                
                $infou = information_user( $B );
                
                if( !condition_user($infou) ) { continue; } ?>

                <div class="card card_small_with_image grid-item"> <!-- POST -->
                    <a href="<?php echo $infou['link_w_username']; ?>"> <img class="card-img-top" src="<?php echo $infou['picture_2']; ?>"> </a>

                    <div class="card-body">
                        <p class="card-text">
                            
                            <pre class="three-cut-text" style="font-size:1em;"> <b>NAME : </b> <a href="<?php echo $infou['link_profile']; ?>" style="color:black;"><?php echo $infou['name']; ?></a> </pre>
                            
                            <pre class="three-cut-text" style="font-size:1em;"> <b>EMAIL : </b> <?php echo $infou['email']; ?> </pre>

                            <?php   if( $infou['role']=='teacher' ) { ?>
                                        <pre class="three-cut-text" style="font-size:1em;"> <b>RATING : </b> <a href="<?php echo $infou['link_rating']; ?>" style="color:black;"><?php echo $infou['rating']; ?></a> </pre>
                            <?php   } else { ?>
                                        <pre class="three-cut-text" style="font-size:1em;"> <b>RATING : </b> N/A </pre>
                            <?php   } ?>

                            <pre class="three-cut-text" style="font-size:1em;"> <b>POST / COMMENT : </b> <a href="<?php echo $infou['link_w_username']; ?>" style="color:black;"><?php echo $infou['n_post']; ?></a> / <a href="<?php echo $infou['comment_list']; ?>" style="color:black;"><?php echo $infou['n_comment']; ?></a> </pre>
                            
                            <?php   if( $_SESSION['user']['role']=='admin' ) { ?>
                                        <pre class="three-cut-text" style="font-size:1em;"> <b>PHONE : </b> <?php echo $infou['phone']; ?> </pre>
                            <?php   } ?>
                            <hr>
                            
                            <div class="three-cut-text">
                                <a href="<?php echo $infou['link_profile']; ?>"><?php echo $infou['username']; ?></a>

                                &bull; <a href="<?php echo $infou['link_publish']; ?>"><?php echo $infou['publish_date']; ?></a>
                            </div>
                        </p>
                    </div>
                </div>
    <?php   } ?>

<?php include('dashboard_footer.php'); ?>