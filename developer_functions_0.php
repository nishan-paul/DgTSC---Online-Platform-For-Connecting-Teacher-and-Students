<?php
    session_start();


	// DATABASE CONNECTION
	date_default_timezone_set('Asia/Dhaka');
	// $database = mysqli_connect("localhost", "dreams4tomorrow_hello", "hello", "dreams4tomorrow_hello");
	$database = mysqli_connect("localhost", "root", "", "15_dreams_for_tomorrow"); // TEMPORARY
	if( !$database ) { die("ERROR CONNECTING TO DATABASE: " . mysqli_connect_error()); }
	mysqli_query($database,'SET CHARACTER SET utf8');
	mysqli_query($database,"SET SESSION collation_connection ='utf8_general_ci'");


	// ENCODE USER INPUT
	function esc( $value ) {
		global $database;
		$value = trim($value);
		$value = htmlspecialchars($value);
		$value = mysqli_real_escape_string($database, $value);
        return $value;
	}


    // DECODE USER INPUT
    function esc_reverse( $value ) {
        $value = stripslashes($value);
		$value = htmlspecialchars_decode($value);
        return $value;
    }


	// GET INFORMATION FROM TABLE BY ID
	function byID( $id, $table ) {
		global $database;
		
		$sql = "SELECT * FROM $table WHERE id='$id' LIMIT 1";
		$query = mysqli_query($database, $sql);
		$result = mysqli_fetch_assoc($query);
		return $result;
	}


	// CHECKING IF THE INPUT VALUE IS UNIQUE
	function only( $key, $value ) {
        global $database;

        if( $key=="password") $value = md5($value);
        $sql = "SELECT * FROM user WHERE $key='$value' LIMIT 1";
		$query = mysqli_query($database, $sql);
        $n = mysqli_num_rows($query);
        return $n;
	}


	// SORT BY COMMENT OR RATING
	function xFactor($a, $b) {
		$sec = (int)$b[1];
		$fst = (int)$a[1];
		return $sec - $fst;
	}


	// SORT BY DATE
	function yFactor($a, $b) {
		$sec = $b[1];
		$fst = $a[1];
		return $sec > $fst;
	}

	
	function format_date($date) { return date('M d, Y', strtotime($date)); } // FORMAT LIKE: Jan 12, 1996

	if( isset($_SESSION["user"]) ) { $_SESSION["user"] = byID( $_SESSION["user"]["id"], "user" ); } // UPDATE USER VARIABLE

	if( isset($_POST['action']) && $_POST['action']=='logout' ) { session_destroy(); } // LOGOUT
?>
