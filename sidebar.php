<?php if(  session_id()=='' ) { exit(0); } ?>

<div class="col-lg-3">
    <div class="sidebar">
        <div class="sidebar_background"></div>

        <?php
            include('sidebar_profile.php'); // PROFILE

            $section = "ARTICLES"; // SIDEBAR ARTICLES
            $H = $a_t_store;
            $one = "owl-carousel owl-theme sidebar_slider_top";
            $two = "sidebar_section future_events";
            $three = "custom_prev custom_prev_top";
            $four = "custom_dots custom_dots_top";
            $five = "custom_dot custom_dot_top active";
            $six = "custom_next custom_next_top";
            include('sidebar_post.php');

            $section = "VIDEOS"; // SIDEBAR VIDEOS
            $H = $v_t_store;
            $one = "owl-carousel owl-theme sidebar_slider_vid";
            $two = "sidebar_section newest_videos";
            $three = "custom_prev custom_prev_vid";
            $four = "custom_dots custom_dots_vid";
            $five = "custom_dot custom_dot_vid active";
            $six = "custom_next custom_next_vid";
            include('sidebar_post.php');
        ?>
    </div>
</div>
