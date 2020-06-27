<?php 
    if( session_id()=='' ) { exit(0); }

    $category = fetch_category();

    $file_name = $zero.'.php?';
    
    $link_latest = $file_name."query=type&value=latest";    
    $link_popular = $file_name."query=type&value=popular";

    $js_category = $zero=="article"? "create_link_category_article(this)" : "create_link_category_video(this)";

    $js_class = $zero=="article"? "create_link_class_article(this)" : "create_link_class_video(this)";
?>

<div class="section_panel d-flex flex-row align-items-center justify-content-start">

    <div class="section_title">
        <?php   if( !isset($section) ) { ?>

                    <a href="<?php echo $link_latest; ?>" style="color:black; padding-right:1em;"> LATEST </a> |
                    <a href="<?php echo $link_popular; ?>" style="color:black; padding-left:1em;"> POPULAR </a>

        <?php   } else { 
                    $value = ($section=="POPULAR ARTICLE" || $section=="POPULAR VIDEO") ? "popular" : "latest";
                    $link_section = $file_name."query=type&value=".$value; ?>

                    <a href="<?php echo $link_section; ?>" style="color:black;"> <?php echo $section; ?> </a>
        <?php   } ?>
    </div>

    <div class="section_tags ml-auto">
        <ul>
            <?php   for($i = 0; $i < 4; $i++) {

                        $name = strtoupper( $category[$i]['tag'] );
                        $number = $category[$i][$zero];
                        $link_category = $file_name."query=tag&value=".$category[$i]['tag']; ?>

                        <li> <a href="<?php echo $link_category; ?>"> <?php echo $name.' ('.$number.')'; ?> </a> </li>
            <?php   } ?>
        </ul>
    </div>

    <div class="section_panel_more">
        <ul>
            <li>MORE
                <ul>
                    CATEGORY
                    <select class="custom-select" onchange="<?php echo $js_category; ?>">
                        <option></option>
                        <?php	$n_category = count($category);
                                
                                for($i = 0; $i < $n_category; $i++) {

                                    $name = $category[$i]['tag'];
                                    $number = $category[$i][$zero];
                                    $nn = strtoupper($name).' ('.$number.')'; ?>

                                    <option value='<?php echo $name; ?>'> <?php echo $nn; ?> </option>
                        <?php   } ?>
                    </select>
                    <hr>
                    
                    CLASS
                    <select class="custom-select" onchange="<?php echo $js_class; ?>">
                        <option></option>
                        <?php	for($i = 1; $i <= 12; $i++) { ?>

                                    <option value='<?php echo $i; ?>'> <?php echo $i; ?> </option>
                        <?php 	} ?>
                    </select>
                </ul>
            </li>
        </ul>
    </div>

</div>
