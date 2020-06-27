<?php   
    include("developer_functions_0.php");
    include("developer_functions_1.php");
    include("developer_functions_2.php");

    if( isset($_SESSION["user"]) ) { exit(0); }

    if( $_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["registration"]) && $_POST["registration"]=="REGISTRATION" ) {

        $errors = "";

        $name = esc($_POST['fullname']);
        $username = esc($_POST['username']);
        $phone = esc($_POST['phone']);
        $email = esc($_POST['email']);
        $password = md5( esc($_POST['password']) );
        $role = $_POST['role'];
        $publish = date('Y-m-d');
        $edit = date('Y-m-d');

        if( !empty($username) && only("username", $username) ) { $errors.= '\n USERNAME IS ALREADY TAKEN \n'; }
        if( !empty($phone) && only("phone", $phone) ) { $errors.= '\n PHONE NUMBER IS ALREADY TAKEN \n'; }
        if( !empty($email) && only("email", $email) ) { $errors.= '\n EMAIL IS ALREADY TAKEN \n'; }
        if( !empty($password) && only("password", $password) ) { $errors.= '\n PASSWORD IS WEAK \n'; }
        
        if( $errors == "" ) {

            $password = md5($password);
            $sql = "INSERT INTO user(name, username, phone, email, password, role, publish, edit, state) VALUES('$name', '$username', '$phone', '$email', '$password', '$role', '$publish', '$edit', 'active')";
            mysqli_query($database, $sql);
            $id = mysqli_insert_id($database);

            $_SESSION["user"] = byID($id, "user");
            
            echo "<script type='text/javascript'> window.location = 'index.php'; </script>";
        }
        else
            echo "<script type='text/javascript'>alert('$errors');</script>";
    }

    include('security_header.php'); // HEADER
?>

    <form method="POST" name="signup-form" class="signup-form" action="security_registration.php">
        <a href="index.php" style="text-decoration:none;"><h3 class="form-title">HOME</h2></a>

        <a href="security_registration.php" style="text-decoration:none;"><h2 class="form-title">Create account</h2></a>

        <div class="form-group">
            <input type="text" class="form-input" placeholder="NAME" name="fullname" required pattern="[A-Za-z ]{5,20}" title="NAME WILL CONTAIN ONLY ALPHABET AND LENGTH MUST BE BETWEEN 5-20"/>
        </div>

        <div class="form-group">
            <input type="text" class="form-input" placeholder="USERNAME" name="username" required pattern="[a-z0-9-_]{3,15}" title="USERNAME WILL CONTAIN ONLY ALPHABET (SMALL), NUMBER, HYPHEN, UNDERSCORE AND LENGTH MUST BE BETWEEN 3-15"/>
        </div>

        <div class="form-group">
            <input type="text" class="form-input" placeholder="PHONE NUMBER" name="phone" required pattern="[0-9]{11}" title="PHONE NUMBER WILL CONTAIN EXACT 11 DIGITS"/>
        </div>

        <div class="form-group">
            <input type="text" class="form-input" placeholder="EMAIL" name="email" required pattern="([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)" title="PROVIDE VALID EMAIL ADDRESS"/>
        </div>

        <div class="form-group">
            <input type="password" class="form-input" placeholder="PASSWORD" name="password" required pattern="[A-Za-z0-9!@#$%^&*()_]{7,20}" title="PASSWORD WILL CONTAIN ALPHABET, NUMBER, SOME SPECIAL SIGNS AND LENGTH MUST BE BETWEEN 7-20"/>
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
            <input type="checkbox" id="agree-term" class="agree-term" name="agree-term"/>
            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the <a href="about_us.php" target="_blank" class="term-service">Terms of Services</a></label>
        </div>
        
        <div class="form-group">
            <input type="submit" id="submit" class="form-submit" name="registration" value="REGISTRATION"/>
        </div>
    </form>

    <p class="loginhere">
        already have an account ? please, <a href="security_login.php" class="loginhere-link">login</a>
    </p>

<?php include("security_footer.php"); ?> <!-- FOOTER -->