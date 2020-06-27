<?php
	include("developer_functions_0.php");
	include("developer_functions_1.php");
	include("developer_functions_2.php");

    if( !isset($_GET['s_id']) || !valid('user', $_GET['s_id']) ) { exit(0); }

    include('profile_header.php');
?>

<div class="post_body">
    <p class="post_p">
        <div class="form-group">
            <label for="bio" style="font-size:1.2em; color:black;">BIO :</label>
            <div class="form-control"> <?php echo $infou['bio']; ?> </div>
        </div>

        <div class="form-group">
            <label for="education" style="font-size:1.2em; color:black;">EDUCATION :</label>
            <div class="form-control"> <?php echo $infou['education']; ?> </div>
        </div>

        <div class="form-group">
            <label for="profession" style="font-size:1.2em; color:black;">PROFESSION :</label>
            <div class="form-control"> <?php echo $infou['profession']; ?> </div>
        </div>

        <div class="form-group">
            <label for="address" style="font-size:1.2em; color:black;">ADDRESS :</label>
            <div class="form-control"> <?php echo $infou['address']; ?> </div>
        </div>

        <div class="form-group">
            <label for="email" style="font-size:1.2em; color:black;">EMAIL :</label>
            <div class="form-control"> <p> <?php echo $infou['email']; ?> </p> </div>
        </div>

        <div class="form-group">
            <label for="phone" style="font-size:1.2em; color:black;">PHONE :</label>
            <div class="form-control"> <p> <?php echo $infou['phone']; ?> </p> </div>
        </div>
        <br>

        <div class="form-group">
            <?php	if( isset($_SESSION['user']) && $s_id == $_SESSION['user']['id'] ) { ?>
                        <a href="<?php echo $infou['profile_edit']; ?>">
                            <input type="submit" class="btn btn-outline-primary" value="EDIT PROFILE"/>
                        </a>
            <?php 	} ?>
        </div>
    </p>
</div>

<?php include('profile_footer.php'); ?>
