<?php if( session_id()=='' ) { exit(0); } ?>

<div class="<?php echo $two; ?>" style="width: 22.25em;">

    <div class="sidebar_title_container"> <!-- SLIDER -->
        <div class="sidebar_title"><?php echo $section; ?></div>
        <div class="sidebar_slider_nav">
            <div class="custom_nav_container sidebar_slider_nav_container">
                <div class="<?php echo $three; ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                        <polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
                    </svg>
                </div>
                <ul id="custom_dots" class="<?php echo $four; ?>">
                    <li class="<?php echo $five; ?>"><span></span></li>
                </ul>
                <div class="<?php echo $six; ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                        <polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar_section_content"> <!-- POSTS -->
        <div class="sidebar_slider_container">
            <div class="<?php echo $one; ?>">

                <?php $initial = 0; $n_sidebar = count($H); while( $initial < $n_sidebar ) { ?>

                    <div class="owl-item">

                        <?php   for($i = $initial; $i < $initial+5 && $i < $n_sidebar; $i++) {

                                    $I = $H[$i];

                                    $flag = isset( $I["link"] )? "video":"article";
                                    $p_id = $I["id"];
                                    $w_username = byID( $I["uid"], "user" )["username"];
                                    $title = $I["title"];
                                    $class = $I["class"];
                                    $tag = $I["tag"];
                                    $p_picture = 'images/'.$tag.'-2.jpg';
                                    $post_link = "post.php?flag=$flag&p_id=$p_id";
                                    
                                    $file_name = $flag.'.php';

                                    $link_profile = "profile.php?s_id=".byID( $I["uid"], "user" )["id"];
                                    $link_tag = $file_name."query=tag&value=".$tag;            

                                    $information = $w_username.' &bull; Class '.$class.', '.$tag;
                                    
                                    if( $I["state"] == "deactive" ) { continue; } ?>
            
                                    <div class="side_post">
                                            <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                <a href="<?php echo $link_tag; ?>">
                                                    <div class="side_post_image">
                                                        <div>
                                                            <img src="<?php echo $p_picture; ?>">
                                                        </div>
                                                    </div>
                                                </a>
                                                
                                                <div class="side_post_content">
                                                    <a href="<?php echo $post_link; ?>">
                                                        <div class="side_post_title four-cut-text">
                                                            <?php echo $title; ?>
                                                        </div>
                                                    </a>
                                                    <small class="post_meta three-cut-text">
                                                        <a href="<?php echo $link_profile; ?>">
                                                            <?php echo $information; ?>
                                                        </a>
                                                    </small>
                                                </div>
                                            </div>
                                        
                                    </div>

                        <?php   } ?>

                    </div>

                <?php $initial += 5; } ?>
                
            </div>
        </div>
    </div>

</div>
