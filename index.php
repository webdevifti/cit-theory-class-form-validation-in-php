<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Five | Form Validation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h2>Registration Form</h2>
            <form action="post.php" method="POST">  
                <div class="input-fields">
                    <input type="text" name="first_name" autocomplete="off" placeholder="Enter Your First Name">
                    <?php if(isset($_SESSION['first_name_error'])){   ?>
                        <span class="input-error"><?= $_SESSION['first_name_error']; ?></span>
                    <?php } unset($_SESSION['first_name_error']); ?>
                </div>
                <div class="input-fields">
                    <input type="text" name="last_name"  autocomplete="off" placeholder="Enter Your Last Name">
                    <?php if(isset($_SESSION['last_name_error'])){   ?>
                        <span class="input-error"><?= $_SESSION['last_name_error']; ?></span>
                    <?php } unset($_SESSION['last_name_error']); ?>
                </div>
              
                <div class="input-fields">
                    <input type="email" name="email"  autocomplete="off" placeholder="Enter Your Email">
                    <?php if(isset($_SESSION['email_error'])){   ?>
                        <span class="input-error"><?= $_SESSION['email_error']; ?></span>
                    <?php } unset($_SESSION['email_error']); ?>
                </div>
                <div class="input-fields">
                    <input type="date" name="dob">
                    <?php if(isset($_SESSION['dob_error'])){   ?>
                        <span class="input-error"><?= $_SESSION['dob_error']; ?></span>
                    <?php } unset($_SESSION['dob_error']); ?>
                </div> 
                <div class="input-fields eye-position">
                    <input type="password" id="password_hint" name="password"  autocomplete="off" placeholder="Enter Your Password">
                    <i class="fa fa-eye eye-icon"></i>
                    <?php if(isset($_SESSION['password_error'])){   ?>
                        <span class="input-error"><?= $_SESSION['password_error']; ?></span>
                    <?php } unset($_SESSION['password_error']); ?>
                </div>
                <div class="input-fields">
                    <input type="password" name="confirm_password"  autocomplete="off" placeholder="Re-type the password">
                    <?php if(isset($_SESSION['conpassword_error'])){   ?>
                        <span class="input-error"><?= $_SESSION['conpassword_error'] ?></span>
                    <?php } unset($_SESSION['conpassword_error']); ?>
                </div>
                <div class="input-fields">
                    <button type="submit" name="register">Register</button>
                </div>
            </form>
        </div>
        <span class="copyrights">Copyright &copy;<a href="https://github.com/webdevifti"> webdevifti</a></span>
    </div>

    <script>
        let eye = document.querySelector('.eye-icon');
        let passwordField = document.getElementById('password_hint');

        eye.addEventListener('click', () => {
            if(passwordField.type == 'password'){
                passwordField.type = 'text';
            }else{
                passwordField.type = 'password';
            }
        })
    </script>
</body>
</html>