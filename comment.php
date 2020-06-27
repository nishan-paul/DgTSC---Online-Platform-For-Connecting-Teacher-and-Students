<?php if( session_id()=='' ) { exit(0); } ?>

<div class="comments">

    <div class="comments_title">
        COMMENT <span>(<?php echo $infop['comment']; ?>)</span>
    </div>

    <div class="row">
        <div class="col-xl-10">
            <div class="comments_container">
                <ul class="comment_list">
                    <li class="comment">
                        <?php   $table_comment = 'comment_'.$infop['flag'];
                                $query_comment = mysqli_query($database, "SELECT * FROM $table_comment WHERE pid='$p_id'");
                                
                                while( $F = mysqli_fetch_assoc($query_comment) ) {

                                    $infoc = information_comment( $F ) ?>

                                    <ul class="comment_list">
                                        <li class="comment">
                                            <div class="comment_body">
                                                <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                                                    <a href="<?php echo $infoc['profile']; ?>">
                                                        <div class="author_image">
                                                            <div>
                                                                <img src="<?php echo $infoc['w_picture']; ?>">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <pre> </pre>
                                                    <div>
                                                        <a href="<?php echo $infoc['link_w_username']; ?>"><?php echo $infoc['w_username']; ?></a> &bull;
                                                        <a href="<?php echo $infoc['link_publish']; ?>"><?php echo $infoc['publish_date']; ?></a>
                                                    </div>
                                                </div>
                                                <div class="comment_content">
                                                    <p><?php echo $infoc['content']; ?></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                        <?php   } ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>	
</div>