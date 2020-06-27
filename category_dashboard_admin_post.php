<?php if( session_id()=='' ) { exit(0); } ?>

<div class="section_panel d-flex flex-row align-items-center justify-content-start">

    <div class="section_title">
        <a href="<?php echo "dashboard_post.php?query=type&value=latest"; ?>" style="color:black; padding-right:1em;"> POSTS </a> |
        <a href="<?php echo "dashboard_user.php?query=type&value=latest"; ?>" style="color:black; padding-left:1em;"> USERS </a>
    </div>

    <div class="section_tags ml-auto">
        <ul>
            <li> <a href="<?php echo 'dashboard_post.php?query=state&value=active'; ?>"> <?php echo $n_active_post; ?> </a> </li>
            <li> <a href="<?php echo 'dashboard_post.php?query=state&value=inactive'; ?>"> <?php echo $n_inactive_post; ?> </a> </li>
            <li> <a href="<?php echo 'dashboard_post.php?query=state&value=deactive'; ?>"> <?php echo $n_deactive_post; ?> </a> </li>
        </ul>
    </div>

    <div class="section_panel_more">
        <ul>
            <li>MORE
                <ul>
                    CATEGORY
                    <select class="custom-select" onchange="create_link_category(this)">
                        <option></option>
                        <?php	$n_category = count($category);
                                
                                for($i = 0; $i < $n_category; $i++) {

                                    $name = $category[$i]['tag'];
                                    $number = $category[$i]['article'] + $category[$i]['video'];
                                    $nn = strtoupper($name).' ('.$number.')'; ?>

                                    <option value='<?php echo $name; ?>'> <?php echo $nn; ?> </option>
                        <?php   } ?>
                    </select>
                    <hr>
                    
                    CLASS
                    <select class="custom-select" onchange="create_link_class(this)">
                        <option></option>
                        <?php	for($i = 1; $i <= 12; $i++) { ?>

                                    <option value='<?php echo $i; ?>'> <?php echo $i; ?> </option>
                        <?php 	} ?>
                    </select>
                    <hr>

                    POST
                    <select class="custom-select" onchange="create_link_post(this)">
                        <option></option>
                        <option value='active'> <?php echo $n_active_post; ?> </option>
                        <option value='inactive'> <?php echo $n_inactive_post; ?> </option>
                        <option value='deactive'> <?php echo $n_deactive_post; ?> </option>
                    </select>
                    <hr>

                    COMMENT
                    <select class="custom-select" onchange="create_link_comment(this)">
                        <option></option>
                        <option value='active'> <?php echo $n_active_comment; ?> </option>
                        <option value='inactive'> <?php echo $n_inactive_comment; ?> </option>
                        <option value='deactive'> <?php echo $n_deactive_comment; ?> </option>
                    </select>
                </ul>
            </li>
        </ul>
    </div>

</div>
