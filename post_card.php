<?php if( session_id()=='' ) { exit(0); } ?>

<div class="card card_small_with_image grid-item"> <!-- POST -->
    <a href="<?php echo $infop['link_w_username']; ?>"> <img class="card-img-top" src="<?php echo $infop['p_picture']; ?>"> </a>
    
    <div class="card-body">
        <div class="card-title card-title-small one-cut-text"><a href="<?php echo $infop['post_link']; ?>"><?php echo $infop['title']; ?></a></div>

		<p class="card-text two-cut-text"><?php echo $infop['summary']; ?></p>

		<div style="padding-top:0.75em"></div>

        <div class="three-cut-text">
            <a href="<?php echo $infop['profile']; ?>"><?php echo $infop['w_username']; ?></a>

            &bull; <a href="<?php echo $infop['link_publish']; ?>"><?php echo $infop['publish_date']; ?></a>
        </div>

        <div class="three-cut-text">
            <a href="<?php echo $infop['link_class']; ?>">Class <?php echo $infop['class'].","; ?> </a>
            <a href="<?php echo $infop['link_tag']; ?>"><?php echo $infop['tag']; ?> </a> &bull;
            <a href="<?php echo $infop['post_link']; ?>"><?php echo $infop['comment']; ?> <span class="far fa-comment"></span> </a>
        </div>
    </div>
</div>
