<div class="post_body">
    <p class="post_p">
        <?php   $q_comment_article = mysqli_query($database, "SELECT * FROM comment_article WHERE uid='$s_id'");
                while( $r_comment_article = mysqli_fetch_assoc($q_comment_article) ) {
                    $flag = 'article';
                    $p_id = $r_comment_article['pid'];
                    $post_link = 'post.php?flag='.$flag.'&p_id='.$p_id;
                    $post_title = esc_reverse( byID($r_comment_article['pid'], 'article')['title'] );
                    $content_comment = esc_reverse( $r_comment_article['content'] ); ?>

                    <a href="<?php echo $post_link; ?>" title="<?php echo $post_title; ?>">
                        <div class="form-group">
                            <div class="form-control">
                                <p> <?php echo $content_comment; ?> </p>
                            </div>
                        </div>
                    </a>
        <?php   } ?>

        <?php   $q_comment_video = mysqli_query($database, "SELECT * FROM comment_video WHERE uid='$s_id'");
                while( $r_comment_video = mysqli_fetch_assoc($q_comment_video) ) {
                    $flag = 'video';
                    $p_id = $r_comment_video['pid'];
                    $post_link = 'post.php?flag='.$flag.'&p_id='.$p_id;
                    $post_title = esc_reverse( byID($r_comment_video['pid'], 'video')['title'] );
                    $content_comment = esc_reverse( $r_comment_video['content'] ); ?>

                    <a href="<?php echo $post_link; ?>" title="<?php echo $post_title; ?>">
                        <div class="form-group">
                            <div class="form-control">
                                <p> <?php echo $content_comment; ?> </p>
                            </div>
                        </div>
                    </a>
        <?php   } ?>
    </p>
</div>
