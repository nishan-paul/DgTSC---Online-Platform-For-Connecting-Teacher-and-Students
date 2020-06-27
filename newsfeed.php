<?php if( session_id()=='' ) { exit(0); } ?>

<div class="blog_section">

    <?php include('category_home_article_video.php'); ?> <!-- CATEGORY -->

    <div class="section_content">
        <div class="grid clearfix">

            <?php   $initial = !isset($_GET['start'])? 0 : intval($_GET['start']);

                    $n_post = count($A);

                    for( $i = $initial; $i < $initial + 6 && $i < $n_post; $i++ ) {

                        $B = $A[$i][0];

                        if( $B['state'] != 'active' ) { continue; }

                        $infop = information_post( $B );

                        include('post_card.php');
                    }
            ?>

        </div>
    </div>

</div>

