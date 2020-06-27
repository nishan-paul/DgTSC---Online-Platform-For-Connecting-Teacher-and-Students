<?php if( session_id()=='' ) { exit(0); } ?>

<button type='button' class='btn btn-dark' disabled>
    <?php echo $button_name; ?>
</button>

<div class="similar_posts">
    <div class="grid clearfix">

        <?php   for($i = 0; $i < $n_similar; $i++) {

                    $E = $D[$i][0];

                    $infop = information_post( $E );

                    $f0 = !isset($s_id) && isset($flag) && isset($p_id) && $flag == $infop['flag'] && $p_id == $infop['id'];
                    $f1 = $infop["state"]=="deactive";

                    if( $f0 || $f1 ) { continue; }
                    
                    include('post_box.php');
                }
        ?>

    </div>
</div>