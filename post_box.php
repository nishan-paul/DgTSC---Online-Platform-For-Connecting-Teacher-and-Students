<?php if( session_id()=='' ) { exit(0); } ?>

<div class="card card_small_with_image grid-item"> <!-- POST -->
    <a href="<?php echo $infop['link_w_username_dashboard']; ?>"> <img class="card-img-top" src="<?php echo $infop['p_picture']; ?>"> </a>
    
    <div class="card-body">
        <div class="card-title card-title-small one-cut-text"><a href="<?php echo $infop['post_link']; ?>"><?php echo $infop['title']; ?></a></div>

        <div class="three-cut-text">
            <a href="<?php echo $infop['profile']; ?>"><?php echo $infop['w_username']; ?></a>

            &bull; <a href="<?php echo $infop['link_publish_dashboard']; ?>"><?php echo $infop['publish_date']; ?></a>
        </div>

        <div class="three-cut-text">
            <a href="<?php echo $infop['link_class_dashboard']; ?>">Class <?php echo $infop['class'].","; ?> </a>
            <a href="<?php echo $infop['link_tag_dashboard']; ?>"><?php echo $infop['tag']; ?> </a> &bull;
            <a href="<?php echo $infop['post_link']; ?>"><?php echo $infop['comment']; ?> <span class="far fa-comment"></span> </a>
        </div>
    </div>
</div>
