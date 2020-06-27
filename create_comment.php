<?php if( session_id()=='' ) { exit(0); } ?>

<div class="post_comment">
    <div class="post_comment_title">CREATE COMMENT</div>
    <div class="row">
        <div class="col-xl-10">
            <div class="post_comment_form_container">

                <form method="POST" action="<?php echo $post_link; ?>">
                    <div class="form-group">
                        <textarea class="form-control" id="content_comment" name="content_comment"></textarea>
                    </div>

                    <div class="form-group" style="padding-top:1em;">
                        <input type="submit" class="btn btn-outline-primary" name="comment" value="COMMENT"/>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
