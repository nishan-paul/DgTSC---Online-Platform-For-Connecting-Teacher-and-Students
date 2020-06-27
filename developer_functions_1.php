<?php
    if( session_id()=='' ) { exit(0); }


    // COUNT NUMBER OF POSTS FROM PARTICULAR STATE
    function state_post( $state ) {
        global $database;

        $r_article = mysqli_query($database, "SELECT * FROM article WHERE state='$state'");
        $n_article = mysqli_num_rows($r_article);

        $r_video = mysqli_query($database, "SELECT * FROM video WHERE state='$state'");
        $n_video = mysqli_num_rows($r_video);

        return ( $n_article + $n_video );
    }


    // COUNT NUMBER OF USERS FROM PARTICULAR STATE
    function state_user( $state ) {
        global $database;

        $r_user = mysqli_query($database, "SELECT * FROM user WHERE state='$state'");
        $n_user = mysqli_num_rows($r_user);

        return $n_user;
    }


    // COUNT NUMBER OF COMMENTS FROM PARTICULAR STATE
    function state_comment( $state ) {
        global $database;

        $r_comment_article = mysqli_query($database, "SELECT * FROM comment_article WHERE state='$state'");
        $n_comment_article = mysqli_num_rows($r_comment_article);

        $r_comment_video = mysqli_query($database, "SELECT * FROM comment_video WHERE state='$state'");
        $n_comment_video = mysqli_num_rows($r_comment_video);

        return ( $n_comment_article + $n_comment_video );
    }


    // COUNT NUMBER OF USERS FROM PARTICULAR ROLE
    function role_user( $role ) {
        global $database;

        $r_user = mysqli_query($database, "SELECT * FROM user WHERE role='$role'");
        $n_user = mysqli_num_rows($r_user);

        return $n_user;
    }

    $n_active_user = 'ACTIVE'.' ('.state_user('active').')';
    $n_inactive_user = 'INACTIVE'.' ('.state_user('inactive').')';
    $n_deactive_user = 'DEACTIVE'.' ('.state_user('deactive').')';

    $n_active_post = 'ACTIVE'.' ('.state_post('active').')';
    $n_inactive_post  = 'INACTIVE'.' ('.state_post('inactive').')';
    $n_deactive_post  = 'DEACTIVE'.' ('.state_post('deactive').')';

    $n_active_comment = 'ACTIVE'.' ('.state_comment('active').')';
    $n_inactive_comment = 'INACTIVE'.' ('.state_comment('inactive').')';
    $n_deactive_comment = 'DEACTIVE'.' ('.state_comment('deactive').')';

    $n_admin = 'ADMIN ('.role_user('admin').')';
    $n_teacher = 'TEACHER ('.role_user('teacher').')';
    $n_student = 'STUDENT ('.role_user('student').')';


    // COUNT NUMBER OF COMMENTS FROM PARTICULAR PERSON
    function count_comment_post( $table_1, $table_2, $id ) {
        global $database;

        $r_article = mysqli_query($database, "SELECT * FROM $table_1 WHERE uid='$id'");
        $n_article = mysqli_num_rows($r_article);

        $r_video = mysqli_query($database, "SELECT * FROM $table_2 WHERE uid='$id'");
        $n_video = mysqli_num_rows($r_video);

        return ( $n_article + $n_video );
    }    
    

	// UPDATE AND FETCH CATEGORY LIST
	function update_category($flag, $tag) {
		global $database;

        $query = mysqli_query($database, "SELECT * FROM $flag WHERE tag='$tag'");
        $n = mysqli_num_rows($query);
        mysqli_query( $database, "UPDATE category SET $flag='$n' WHERE tag='$tag'" );
	}

    function fetch_category() {
		global $database;

        $category = array();

		$query = mysqli_query($database, "SELECT * FROM category");
		while( $result = mysqli_fetch_assoc($query) ) {
			array_push( $category, $result );
		}

		return $category;
    }


	// UPDATE NUMBER OF COMMENT IN EVERY POST
	function update_comment($table_post, $table_comment, $pid) {
		global $database;

		$query = mysqli_query($database, "SELECT * FROM $table_comment WHERE pid='$pid'");
		$n = mysqli_num_rows($query);
		mysqli_query($database, "UPDATE $table_post SET comment='$n' WHERE id='$pid'" );
	}


	// UPDATE RATING OF TEACHERS
	function rating_teacher() {
		global $database;

		$query = mysqli_query($database, "SELECT * FROM user WHERE role='teacher'");
		while( $result = mysqli_fetch_assoc($query) ) {
			$id = $result['id'];
	
			$query_article = mysqli_query($database, "SELECT * FROM article WHERE uid='$id'");
			$query_video = mysqli_query($database, "SELECT * FROM video WHERE uid='$id'");
			$post = mysqli_num_rows($query_article) + mysqli_num_rows($query_video);
	
			$comment = 0;
			while( $result_article = mysqli_fetch_assoc($query_article) ) {
				$comment += $result_article['comment'];
			}
			while( $result_video = mysqli_fetch_assoc($query_video) ) {
				$comment += $result_video['comment'];
			}
	
			$rating = $post*10 + $comment*5;
			mysqli_query($database, "UPDATE user SET rating='$rating' WHERE id='$id'");
		}	
	}

	rating_teacher();
    

    // POSTS FROM TEACHERS
    function post_teacher(&$p_t_store, $table_name) {
        global $database;

        $m = 0; $n = 0; $k = 0; $i = 0;
        $t_store = array();

        $query = mysqli_query($database, "SELECT * FROM user WHERE role='teacher'");
        $m = mysqli_num_rows($query);
        while( $result = mysqli_fetch_assoc($query) ) {
            $store = array();

            $id = $result['id'];
            $query_post = mysqli_query($database, "SELECT * FROM $table_name WHERE uid='$id'");
            $n += mysqli_num_rows($query_post);
            while( $result_post = mysqli_fetch_assoc($query_post) ) {
                array_push($store, $result_post);
            }

            $rating = $result['rating'];
            shuffle($store);
            array_push( $t_store, array($store, $rating) );
        }

        usort($t_store, "xFactor");

        while( $i < $n ) {
            for($j = 0; $j < $m; $j++) {
                if( $k < count($t_store[$j][0]) ) {
                    array_push( $p_t_store, $t_store[$j][0][$k] );
                    $i++;
                }
            }
            $k++;
        }
    }


    // POPULAR POSTS AND LATEST POSTS
    function post_latest_popular(&$p_p_store, &$p_l_store, $table_name) {
        global $database;
        $query_post = mysqli_query($database, "SELECT * FROM $table_name");
        while( $result_post = mysqli_fetch_assoc($query_post) ) {
            array_push( $p_p_store, array($result_post, $result_post['comment']) );
            array_push( $p_l_store, array($result_post, $result_post['publish']) );
        }
        usort($p_p_store, "xFactor");
        usort($p_l_store, "yFactor");
	}


	$a_t_store = array(); // ARTICLES FROM TEACHERS
	$v_t_store = array(); // VIDEOS FROM TEACHERS
    $a_p_store = array(); // POPULAR ARTICLES
	$a_l_store = array(); // LATEST ARTICLES
    $v_p_store = array(); // POPULAR VIDEOS
    $v_l_store = array(); // LATEST VIDEOS

	post_teacher($a_t_store, "article");
	post_teacher($v_t_store, "video");
    post_latest_popular($a_p_store, $a_l_store, "article");
	post_latest_popular($v_p_store, $v_l_store, "video");


    // VALIDITY
    function valid($name, $value) {
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

        if( $name=="article" || $name=="video" || $name=="user" ) {
            $value = intval($value);
            $result = mysqli_query($database, "SELECT * FROM $name WHERE id='$value'");
            if( mysqli_num_rows($result) ) $v = true;
        }

        if( $name=="username" ) {
            $result = mysqli_query($database, "SELECT * FROM user WHERE username='$value'");
            if( mysqli_num_rows($result) ) $v = true;
        }

        if( $name=="role" && ($value=='admin' || $value=='teacher' || $value=='student') ) { $v = true; }

        if( ($name=="state" || $name=="link_comment") && ($value=='active' || $value=='inactive' || $value=='deactive') ) { $v = true; }

        if( $name=="rating" && intval($value) >= 0 ) { $v = true; }

        return $v;
	}


	// URL
	$start = !isset($_GET["start"])? 6 : intval($_GET["start"]) + 6;
	$start = $start <= max( count($a_p_store),count($v_p_store) )? $start : 0;
	$link = "index.php?start=".$start;	
?>

<!-- type                          | latest, popular -->
<!-- tag                           | tag_name -->
<!-- class                         | 1-12 -->
<!-- date                          | date_value -->
<!-- article, video, user          | id -->
<!-- username                      | username_value -->