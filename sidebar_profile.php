<?php   if( session_id()=='' ) { exit(0); } ?>

<?php	if( isset($_SESSION["user"]) ) {

            $s_id = $_SESSION["user"]["id"];
            if( isset($C["uid"]) ) $s_id = $C["uid"];
            if( isset($_GET['s_id']) ) $s_id = intval($_GET['s_id']);

            $G = byID( $s_id, 'user' );

            $s_name = $G['name'];
            $s_username = $G['username'];
            $s_role = $G['role'];
            $s_email = $G['email'];
            $s_education = esc_reverse( $G['education'] );
            $s_profession = esc_reverse( $G['profession'] );
            $s_picture = "images/profile.jpg";
            
            $link_profile = "profile.php?s_id=".$s_id; ?>

            <div class="sidebar_title_container" style="width: 22.25em;">
                <div class="sidebar_title">PROFILE</div>

                <div style="padding-top:2.75em;"></div>
                
                <div class="card">
                    <img class="card-img-top" src="<?php echo $s_picture; ?>">

                    <div class="card-body">

                        <div style="font: bold 1.5em Georgia; color:black;">
                            <a href="<?php echo $link_profile; ?>"> <?php echo $s_name; ?> </a>
                        </div>
                        <br>

                        <p class="card-text">
                            <div class="three-cut-text" style="color:black;"> <b>USERNAME : </b>   <?php echo $s_username; ?>   </div>
                            <div class="three-cut-text" style="color:black;"> <b>ROLE : </b>       <?php echo $s_role; ?>       </div>
                            <div class="five-cut-text"  style="color:black;"> <b>EMAIL : </b>      <?php echo $s_email; ?>      </div>
                            <div class="nine-cut-text"  style="color:black;"> <b>EDUCATION : </b>  <?php echo $s_education; ?>  </div>
                            <div class="nine-cut-text"  style="color:black;"> <b>PROFESSION : </b> <?php echo $s_profession; ?> </div>
                            <div></div>
                        </p>
                        <br>
                        
                        <?php   if( $s_id==$_SESSION["user"]["id"] && ( $_SESSION["user"]["role"]=="teacher" || $_SESSION["user"]["role"]=="admin" ) ) { ?>
                                    <a href="post_create.php"> <button type="button" class="btn btn-outline-primary btn-sm"> CREATE POST  </button> </a>
                        <?php   } ?>

                    </div>
                </div>
            </div>
<?php   } ?>

<?php   if( !isset($_SESSION["user"]) ) { ?>
            <div class="sidebar_title_container" style="width: 22.25em;">
                <div class="sidebar_title">PROFILE</div> <br> <br>

                <div class="card">
                    <img class="card-img-top" src="<?php echo 'images/profile.jpg'; ?>">

                    <div style="color:black; padding:1em;">
                        <a href="security_register.php">REGISTER</a> / <a href="security_login.php">LOGIN</a> TO CREATE PROFILE
                    </div>
                </div>
            </div>
<?php   } ?>

