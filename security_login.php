<?php
	include("developer_functions_0.php");
	include("developer_functions_1.php");
	include("developer_functions_2.php");

    if( isset($_SESSION["user"]) ) { exit(0); }

    if( $_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['login']) && $_POST['login']=="LOGIN" ) {

        $errors = "";

        $username = esc($_POST['username']);
        $email = esc($_POST['email']);
        $role = $_POST["role"];
        $password = md5( esc($_POST['password']) ); 
           
        $sql = "SELECT * FROM user WHERE username='$username' and email='$email' and role='$role' and password='$password'";
        $query = mysqli_query($database, $sql);
        $result = mysqli_fetch_assoc($query);

        if( mysqli_num_rows($query) == 1 ) {
            if( $result['state']=="active" )
                $_SESSION['user'] = $result;
            else
                $errors = "ACCOUNT DEACTIVE";
        }
        else
            $errors = "WRONG CREDENTIALS";

        if( $errors == "" )
            echo "<script type='text/javascript'> window.location = 'index.php'; </script>";
        else
            echo "<script type='text/javascript'>alert('$errors');</script>";
    }

    include('security_header.php'); // HEADER
?>

    <form method="POST" id="signup-form" class="signup-form" action="security_login.php">
        <a href="index.php" style="text-decoration:none;"><h3 class="form-title">HOME</h2></a>
        <a href="security_login.php" style="text-decoration:none;"><h2 class="form-title">LOGIN</h2></a>
        <div class="form-group">
            <input type="text" class="form-input" placeholder="USERNAME" name="username" required pattern="[A-Za-z0-9]{3,15}" title="USERNAME WILL CONTAIN ONLY ALPHABET, NUMBER AND LENGTH MUST BE BETWEEN 3-15"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-input" placeholder="EMAIL" name="email" required pattern="([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)" title="PROVIDE VALID EMAIL ADDRESS"/>
        </div>
        <div class="form-group">
            <!-- <input type="password" class="form-input" placeholder="Paswword" name="password" required pattern="[A-Za-z0-9!@#$%^&*()_]{7,20}" title="PASSWORD WILL CONTAIN ALPHABET, NUMBER, SOME SPECIAL SIGNS AND LENGTH MUST BE BETWEEN 7-20"/> -->
            <input type="password" class="form-input" placeholder="PASSWORD" name="password" required title="PASSWORD WILL CONTAIN ALPHABET, NUMBER, SOME SPECIAL SIGNS AND LENGTH MUST BE BETWEEN 7-20"/> <!-- TEMPORARY -->
        </div>
        <br>
            <div class="form-check-inline">
                <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" id="radio1" name="role" value="admin" required title="SELECT YOUR ROLE">ADMIN
                    <input type="radio" class="form-check-input" id="radio2" name="role" value="teacher" required title="SELECT YOUR ROLE">TEACHER
                    <input type="radio" class="form-check-input" id="radio3" name="role" value="student" required title="SELECT YOUR ROLE">STUDENT
                </label>
            </div>
        <br>
        <div class="form-group">
            <input type="submit" id="submit" class="form-submit" value="LOGIN" name="login"/>
        </div>
    </form>

    <p class="loginhere">
        don't have any account ? please, <a href="security_registration.php" class="loginhere-link">register</a>
    </p>

<?php include("security_footer.php"); ?> <!-- FOOTER -->