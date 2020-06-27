<?php if( session_id()=='' ) { exit(0); } ?>

<div class="section_panel d-flex flex-row align-items-center justify-content-start">

    <div class="section_title">
        <a href="<?php echo 'dashboard_post.php?query=type&value=latest'; ?>" style="color:black; padding-right:1em;"> POSTS </a> |
        <a href="<?php echo 'dashboard_user.php?query=type&value=latest'; ?>" style="color:black; padding-left:1em;"> USERS </a>
    </div>

    <div class="section_tags ml-auto">
        <ul>
            <li> <a href="<?php echo 'dashboard_user.php?query=state&value=active'; ?>"> <?php echo $n_active_user; ?> </a> </li>
            <li> <a href="<?php echo 'dashboard_user.php?query=state&value=inactive'; ?>"> <?php echo $n_inactive_user; ?> </a> </li>
            <li> <a href="<?php echo 'dashboard_user.php?query=state&value=deactive'; ?>"> <?php echo $n_deactive_user; ?> </a> </li>
        </ul>
    </div>

    <div class="section_panel_more">
        <ul>
            <li>MORE
                <ul>
                    USERS' STATE
                    <select class="custom-select" onchange="create_link_state(this)">
                        <option></option>
                        <option value='active'> <?php echo $n_active_user; ?> </option>
                        <option value='inactive'> <?php echo $n_inactive_user; ?> </option>
                        <option value='deactive'> <?php echo $n_deactive_user; ?> </option>
                    </select>
                    <hr>
                    
                    USERS' ROLE
                    <select class="custom-select" onchange="create_link_role(this)">
                        <option></option>
                        <option value='admin'> <?php echo $n_admin; ?> </option>
                        <option value='teacher'> <?php echo $n_teacher; ?> </option>
                        <option value='student'> <?php echo $n_student; ?> </option>
                    </select>
                </ul>
            </li>
        </ul>
    </div>

</div>
