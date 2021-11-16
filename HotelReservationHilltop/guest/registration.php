<?php
  require_once "db.php";

  if(isset($_SESSION['user_id'])!="") {
    header("Location: Home.php");
  }

    if (isset($_POST['signup'])) {
        $user_name = mysqli_real_escape_string($conn, $_POST['name']);
        $user_email = mysqli_real_escape_string($conn, $_POST['email']);
        $user_mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $user_password = mysqli_real_escape_string($conn, $_POST['password']);
        $user_cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 
        if (!preg_match("/^[a-zA-Z ]+$/",$user_name)) {
            $user_name_error = "Name must contain only alphabets and space";
        }
        if(!filter_var($user_email,FILTER_VALIDATE_EMAIL)) {
            $user_email_error = "Please Enter Valid Email ID";
        }
        if(strlen($user_password) < 6) {
            $user_password_error = "Password must be minimum of 6 characters";
        }       
        if(strlen($user_mobile) < 10) {
            $user_mobile_error = "Mobile number must be minimum of 10 characters";
        }
        if($user_password != $user_cpassword) {
            $user_cpassword_error = "Password and Confirm Password doesn't match";
        }
        if (!$error) {
            if(mysqli_query($conn, "INSERT INTO useraccount(user_name, user_email, user_mobile ,user_password) VALUES('" . $name . "', '" . $user_email . "', '" . $user_mobile . "', '" . md5($user_password) . "')")) {
             header("location: Login.php");
             exit();
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
                <div class="page-header">
                </div>
                <p>Please fill all fields in the form</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger"><?php if (isset($user_name_error)) echo $user_name_error; ?></span>
                    </div>

                    <div class="form-group ">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="" maxlength="30" required="">
                        <span class="text-danger"><?php if (isset($user_email_error)) echo $user_email_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="mobile" class="form-control" value="" maxlength="12" required="">
                        <span class="text-danger"><?php if (isset($user_mobile_error)) echo $user_mobile_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
                        <span class="text-danger"><?php if (isset($user_password_error)) echo $user_password_error; ?></span>
                    </div>  

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" value="" maxlength="8" required="">
                        <span class="text-danger"><?php if (isset($user_cpassword_error)) echo $user_cpassword_error; ?></span>
                    </div>

                    <input type="submit" class="btn btn-primary" name="signup" value="submit">
                    Already have a account?<a href="Login.php" class="btn btn-default">Login</a>
                </form>
            </div>
        </div>    
    </div>
</body>
</html>
