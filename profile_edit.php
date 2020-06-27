<?php
	include("developer_functions_0.php");
	include("developer_functions_1.php");
	include("developer_functions_2.php");

    if( !isset($_SESSION['user']) || !isset($_GET['s_id']) || !valid('user', $_GET['s_id']) ) { exit(0); }

    include('profile_header.php');
?>

    <form method="POST" action="edit_profile.php">
        <div class="post_body"> <!-- POST BODY -->
            <p class="post_p">
                <div class="form-group">
                    <label for="bio" style="font-size:1.2em; color:black;">BIO :</label>
                    <textarea class="form-control" id="bio" name="bio"><?php echo $infou['bio']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="education" style="font-size:1.2em; color:black;">EDUCATION :</label>
                    <textarea class="form-control" id="education" name="education"><?php echo $infou['education']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="profession" style="font-size:1.2em; color:black;">PROFESSION :</label>
                    <textarea class="form-control" id="profession" name="profession"><?php echo $infou['profession']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="address" style="font-size:1.2em; color:black;">ADDRESS :</label>
                    <textarea class="form-control" id="address" name="address"><?php echo $infou['address']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="email" style="font-size:1.2em; color:black;">EMAIL :</label>
                    <input type="text" class="form-control" placeholder="<?php echo $infou['email']; ?>" id="email" name="email" required pattern="([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)" title="PROVIDE VALID EMAIL ADDRESS" style="font-size:1em; color:black;"/>
                </div>

                <div class="form-group">
                    <label for="phone" style="font-size:1.2em; color:black;">PHONE :</label>
                    <input type="text" class="form-control" placeholder="<?php echo $infou['phone']; ?>" id="phone" name="phone" required pattern="[0-9]{11}" title="PHONE NUMBER WILL CONTAIN EXACT 11 DIGITS" style="font-size:1em; color:black;"/>
                </div>

                <div class="form-group">
                    <label for="password" style="font-size:1.2em; color:black;">PASSWORD :</label>
                    <!-- <input type="password" class="form-control" id="password" name="password" required pattern="[A-Za-z0-9!@#$%^&*()_]{7,20}" title="PASSWORD WILL CONTAIN ALPHABET, NUMBER, SOME SPECIAL SIGNS AND LENGTH MUST BE BETWEEN 7-20" style="font-size:1em; color:black;"/> -->
                    <input type="password" class="form-control" id="password" name="password" required title="PASSWORD WILL CONTAIN ALPHABET, NUMBER, SOME SPECIAL SIGNS AND LENGTH MUST BE BETWEEN 7-20" style="font-size:1em; color:black;"/> <!-- TEMPORARY -->
                </div>

                <div class="form-group">
                    <label for="password_new" style="font-size:1.2em; color:black;">NEW PASSWORD :</label>
                    <!-- <input type="password" class="form-control" id="password_news" name="password_new" required pattern="[A-Za-z0-9!@#$%^&*()_]{7,20}" title="PASSWORD WILL CONTAIN ALPHABET, NUMBER, SOME SPECIAL SIGNS AND LENGTH MUST BE BETWEEN 7-20" style="font-size:1em; color:black;"/> -->
                    <input type="password" class="form-control" id="password_news" name="password_new" required title="PASSWORD WILL CONTAIN ALPHABET, NUMBER, SOME SPECIAL SIGNS AND LENGTH MUST BE BETWEEN 7-20" style="font-size:1em; color:black;"/> <!-- TEMPORARY -->
                </div>
                <br>

                <div class="form-group">
                    <input type="submit" class="btn btn-outline-primary" name="edit" value="EDIT"/>
                </div>
            </p>
        </div>
    </form>

<?php include('profile_footer.php'); ?>

