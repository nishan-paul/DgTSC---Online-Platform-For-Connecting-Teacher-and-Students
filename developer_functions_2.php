<?php
    if( session_id()=='' ) { exit(0); }

    function information_post( $A ) {
        global $database;

        $infop = array(); 

        $infop['id'] = $A['id'];
        $infop['flag'] = isset($A['link']) ? 'video' : 'article';
        $infop['title'] = esc_reverse( $A["title"] );
        $infop['summary'] = esc_reverse( $A["summary"] );
        $infop['content'] = esc_reverse( $A["content"] );
        $infop['link'] = '';
        $infop['video_link'] = '';
        $infop['publish_date'] = format_date( $A["publish"] );
        $infop['class'] = intval( $A["class"] );
        $infop['tag'] = $A["tag"];
        $infop['comment'] = $A["comment"];
        $infop['state'] = $A["state"];

        $infop['w_id'] = byID( $A["uid"], "user" )["id"];
        $infop['w_username'] = byID( $A["uid"], "user" )["username"];
        $infop['w_picture'] = "images/profile-1.jpg";

        $infop['p_picture'] = "images/".$infop['tag'].".jpg";
        $infop['p_picture_1'] = "images/".$infop['tag']."-1.jpg";
        $infop['p_picture_2'] = "images/".$infop['tag']."-2.jpg";
        
        $infop['profile'] = "profile.php?s_id=".$infop['w_id'];

        $infop['link_w_username'] = $infop['flag'].".php?query=username&value=".$infop['w_username'];
        $infop['link_publish'] = $infop['flag'].".php?query=publish_date&value=".$A["publish"];
        $infop['link_class'] = $infop['flag'].".php?query=class&value=".$infop['class'];
        $infop['link_tag'] = $infop['flag'].".php?query=tag&value=".$infop['tag'];

        $infop['link_w_username_dashboard'] = "dashboard_post.php?query=username&value=".$infop['w_username'];
        $infop['link_publish_dashboard'] = "dashboard_post.php?query=publish_date&value=".$A["publish"];
        $infop['link_class_dashboard'] = "dashboard_post.php?query=class&value=".$infop['class'];
        $infop['link_tag_dashboard'] = "dashboard_post.php?query=tag&value=".$infop['tag'];

        $infop['post_link'] = "post.php?flag=".$infop['flag']."&p_id=".$infop['id'];
        $infop['post_link_edit'] = "post_edit.php?flag=".$infop['flag']."&p_id=".$infop['id'];
        $infop['post_link_active'] = "post_edit.php?flag=".$infop['flag']."&p_id=".$infop['id']."&status=inactive";
        $infop['post_link_inactive'] = "post_edit.php?flag=".$infop['flag']."&p_id=".$infop['id']."&status=active";

        if( $infop['flag']=='video') {
            parse_str( parse_url( $A["link"], PHP_URL_QUERY ), $vars );
            $infop['link'] = esc_reverse( $A['link'] );
            $infop['video_link'] = $vars['v']; }

        return $infop;
    }

    function information_user( $A ) {
        global $database;

        $infou = array();

        $infou['id'] = $A["id"];
        $infou['name'] = $A["name"];
        $infou['username'] = $A["username"];
        $infou['email'] = $A["email"];
        $infou['publish_date'] = format_date( $A["publish"] );
        $infou['phone'] = $A["phone"];
        $infou['role'] = $A["role"];
        $infou['state'] = $A["state"];
        $infou['rating'] = intval($A["rating"]);

        $infou['n_post'] = count_comment_post('article', 'video', $infou['id']);
        $infou['n_comment'] = count_comment_post('comment_article', 'comment_video', $infou['id']);

        $infou['picture'] = "images/profile.jpg";
        $infou['picture_1'] = "images/profile-1.jpg";
        $infou['picture_2'] = "images/profile-2.jpg";

        $infou['bio'] = esc_reverse( $A['bio'] );
        $infou['education'] = esc_reverse( $A['education'] );
        $infou['profession'] = esc_reverse( $A['profession'] );
        $infou['address'] = esc_reverse( $A['address'] );
        $infou['email'] = esc_reverse( $A['email'] );
        $infou['phone'] = esc_reverse( $A['phone'] );

        $infou['profile'] = "profile.php?s_id=".$infou['id'];
        $infou['profile_comment'] = "profile_comment.php?s_id=".$infou['id'];
        $infou['profile_edit'] = "profile_edit.php?p_id=".$infou['id'];
        $infou['profile_active'] = "profile.php?p_id=".$infou['id']."&status=inactive";
        $infou['profile_inactive'] = "profile.php?p_id=".$infou['id']."&status=active";

        $infou['link_publish'] = "dashboard_user.php?query=publish_date&value=".$A["publish"];
        $infou['link_rating'] = "dashboard_user.php?query=rating&value=".$infou['rating'];
        $infou['link_w_username'] = "dashboard_post.php?query=username&value=".$infou['username'];

        return $infou;
    }

    function information_comment( $A ) {
        global $database;

        $infoc['w_username'] = byID( $A["uid"], "user" )["username"];
        $infoc['w_picture'] = "images/profile-1.jpg";
        $infoc['publish_date'] = format_date( $A["publish"] );
        $infoc['content'] = esc_reverse( $A["content"] );

        $infoc['profile'] = "profile.php?s_id=".byID( $A["uid"], "user" )["id"];

        $infoc['link_w_username'] = "dashboard_post.php?query=username&value=".$infoc['w_username'];
        $infoc['link_publish'] = "dashboard_post.php?query=date&value=".$A["publish"];

        return $infoc;
    }

    function similar_post($name, $value) {
        global $database;
        
        $A = array();
    
        $query_article = mysqli_query($database, "SELECT * FROM article WHERE $name='$value'");
        while( $result_article = mysqli_fetch_assoc($query_article) ) {
            array_push( $A, array($result_article, $result_article['comment']) );
        }
    
        $query_video = mysqli_query($database, "SELECT * FROM video WHERE $name='$value'");
        while( $result_video = mysqli_fetch_assoc($query_video) ) {
            array_push( $A, array($result_video, $result_video['comment']) );
        }
    
        usort($A, "xFactor");
    
        return $A;
    }

    function check_post() {
        global $database;

        $v = false;

        if( $name=="type" && ($value=="latest" || $value=="popular") ) { $v = true; }
        if( $name=="class" && ( intval($value)>=1 && intval($value)<=12 ) ) { $v = true; }
        if( $name=="tag" ) {
            $category = fetch_category();
            $n = count($category);
            for($i = 0; $i < $n; $i++) { if( $value == $category[$i]["tag"] ) $v = true; }
        }
        if( $name=="publish_date" ) {
            $d = DateTime::createFromFormat('Y-m-d', $value);
            $v = $d && $d->format('Y-m-d') === $value;
        }
        if( $name=="article" || $name=="video" ) {
            $value = intval($value);
            $result = mysqli_query($database, "SELECT * FROM $name WHERE id='$value'");
            if( mysqli_num_rows($result) ) $v = true;
        }
        if( $name=="username" ) {
            $result = mysqli_query($database, "SELECT * FROM user WHERE username='$value'");
            if( mysqli_num_rows($result) ) $v = true;
        }
        if( ($name=="state" || $name=="link_comment") && ($value=='active' || $value=='inactive' || $value=='deactive') ) { $v = true; }

        return $v;
    }

    function check_user() {
        global $database;

        $v = false;

        if( $name=="type" && ($value=="latest" || $value=="popular") ) { $v = true; }
        if( $name=="publish_date" ) {
            $d = DateTime::createFromFormat('Y-m-d', $value);
            $v = $d && $d->format('Y-m-d') === $value;
        }
        if( $name=="role" && ($value=='admin' || $value=='teacher' || $value=='student') ) { $v = true; }
        if( ($name=="state" || $name=="link_comment") && ($value=='active' || $value=='inactive' || $value=='deactive') ) { $v = true; }
        if( $name=="rating" && intval($value) >= 0 ) { $v = true; }

        return $v;
    }

    function condition_post( $infop ) {
        if( $infop['state'] != 'active' && isset($_SESSION['user']) && $_SESSION['user']['role'] != 'admin' ) return false;
        if( $_GET['query'] == 'username' && $_GET['value'] != $infop['w_username'] ) return false;
        if( $_GET['query'] == 'publish_date' && $_GET['value'] != $infop['publish_date'] ) return false;
        if( $_GET['query'] == 'class' && $_GET['value'] != $infop['class'] ) return false;
        if( $_GET['query'] == 'tag' && $_GET['value'] != $infop['tag'] ) return false;
        if( $_GET['query'] == 'state' && $_GET['value'] != $infop['state'] ) return false;

        return true;
    }

    function condition_user( $infou ) {
        if( $infou['state'] != 'active' && isset($_SESSION['user']) && $_SESSION['user']['role'] != 'admin' ) return false;
        if( $_GET['query'] == 'publish_date' && $_GET['value'] != $infou['publish_date'] ) return false;
        if( $_GET['query'] == 'state' && $_GET['value'] != $infou['state'] ) return false;
        if( $_GET['query'] == 'role' && $_GET['value'] != $infou['role'] ) return false;
        if( $_GET['query'] == 'rating' && $infou['role']!='teacher' && intval($_GET['value'])<=$infou['rating'] ) return false;

        return true;
    }
?>