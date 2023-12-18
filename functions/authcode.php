<?php
session_start();
include('../config/dbconn.php');

if (isset($_POST['register_btn'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['first_name']);
    $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);
    $c_pwd = mysqli_real_escape_string($conn, $_POST['password_confirmation']);

    //check if email already exist
    $check_email_query = "SELECT email FROM users WHERE email='$email'";
    $check_email_query_run = mysqli_query($conn, $check_email_query);
    if (mysqli_num_rows($check_email_query_run) > 0) {
        $_SESSION['message'] = "Email already exist";
        header('Location: ../user/signup.php');
    } else {
        if ($pwd == $c_pwd) {
            $insert_query = "INSERT INTO users (f_name,l_name,email,password) VALUES ('$fname','$lname','$email','$pwd')";
            $query_run = mysqli_query($conn, $insert_query);
            if ($query_run) {
                $_SESSION['message'] = "Registered Successfully";
                header('Location: ../user/login.php');
            } else {
                $_SESSION['message'] = "Something went wrong";
                header('Location: ../user/signup.php');
            }
        } else {
            $_SESSION['message'] = "Passwords do not match";
            header('Location: ../user/signup.php');
        }
    }
} elseif (isset($_POST['login_btn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$pwd'";
    $login_query_run = mysqli_query($conn, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {
        $_SESSION['auth'] = true;
        $userdata = mysqli_fetch_array($login_query_run);
        $username = trim($userdata['f_name']) . ' ' . trim($userdata['l_name']);
        $useremail = $userdata['email'];

        $_SESSION['auth_user'] = [
            'name' => $username,
            'email' => $useremail
        ];
        $_SESSION['message'] = "Logged In Successfully";
        header('Location: ../index.php');
    } else {
        $_SESSION['message'] = "Invalid Credentials";
        header('Location: ../user/login.php');
    }
}
