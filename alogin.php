<!DOCTYPE html>
<html>
 <title>Login</title>
    <body>
        <?php
        $usr = "admin";
        $psw = "password";
        $username = '$_POST[username]';
        $password = '$_POST[password]';
        $usr == $username && $psw == $password;
        session_start();
        if ($_SESSION['login']==true || ($_POST['username']=="admin" && $_POST['password']=="password")) {
            echo '<p><b>RATING THE FORM 2 OF APPLICANT:</b><a href="adminrating.html">click here for Rating the form of the applicant</a>
	    </p>';echo '<br>';
	    echo '<p><b>RATING THE CALL RATING</b><a href="interview.html">click here for Rating the call of the applicant</a>
            </p>';$_SESSION['login']=true;
        }else {
            echo '<script>alert("incorrect login")</script>';
        }
        ?>

            
    </body>
</html>