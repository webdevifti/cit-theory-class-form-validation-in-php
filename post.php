<?php 
session_start();

if(isset($_POST['register'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $date_of_birth = $_POST['dob'];

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $spacial_char = preg_match('@[!,@,#,$,%,^,&,*]@', $password);

    if(empty($first_name)){
        $_SESSION['first_name_error'] = "First Name Field is Required.";
        header('location: index.php');
    }else if(empty($last_name)){
        $_SESSION['last_name_error'] = "Last Name Field is Required.";
        header('location: index.php');
    }else if(empty($email)){
        $_SESSION['email_error'] = "Email Field is Required.";
        header('location: index.php');
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['email_error'] = "Please Provide a Validate Email.";
        header('location: index.php');
    }else if(empty($date_of_birth)){
        $_SESSION['dob_error'] = "Date of Birth is Required.";
        header('location: index.php');

    }else if(empty($password)){
        $_SESSION['password_error'] = "Password Field is Required.";
        header('location: index.php');
    }else if(empty($confirm_password)){
        $_SESSION['conpassword_error'] = "Confirm Password Field is Required.";
        header('location: index.php');
    }else if($password != $confirm_password){
        $_SESSION['conpassword_error'] = "Does not match both password.";
        header('location: index.php');
    }else if(!$uppercase || !$lowercase || !$number || !$spacial_char || !strlen($password) > 8){
        $_SESSION['password_error'] = "1. Password must be a uppercase 2. Password must be a lowercase. 3. Password must be a number 4. Password must be spacial character and greater then 8 character.";
        header('location: index.php');
    }else{
        echo $first_name;
        echo "<br />";
        echo $last_name;
        echo "<br />";
        echo $email;
        echo "<br />";
        echo $date_of_birth;
        echo "<br />";
        echo $password;
        echo "<br />";
        echo $confirm_password;
    }
}



?>