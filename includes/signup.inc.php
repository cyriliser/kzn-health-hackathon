<?php
require_once("./dbh.inc.php");

function username_does_not_exist($username){
    global $conn;

    $query = "SELECT * FROM staff WHERE username=?";

    $stmt = mysqli_stmt_init($conn);
    $prepared = mysqli_stmt_prepare($stmt, $query);

    if (!$prepared) {
        echo " unprepared";
        header("location: ../signup.php?error=sqlerror");
        exit();
    }else {
        mysqli_stmt_bind_param($stmt,"s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result_check = mysqli_stmt_num_rows($stmt);

        if ($result_check > 1) {
            header("location: ../signup.php?error=emailtaken?username=$username");
            exit();
        }

        return true;
    }
}

function email_does_not_exist($email){
    global $conn;

    $query = "SELECT * FROM staff WHERE email=?";

    $stmt = mysqli_stmt_init($conn);
    $prepared = mysqli_stmt_prepare($stmt, $query);

    if (!$prepared) {
        echo " unprepared";
        header("location: ../signup.php?error=sqlerror");
        exit();
    }else {
        mysqli_stmt_bind_param($stmt,"s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result_check = mysqli_stmt_num_rows($stmt);

        if ($result_check > 1) {
            header("location: ../signup.php?error=emailtaken?email=$email");
            exit();
        }

        return true;
    }
}

function insert_user($username, $email, $password){
    global $conn;

    $query = "INSERT INTO staff (username, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $query)) {
        header("ocation: ../signup.php?error=sqlerror");
        exit();
    }else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"sss", $username,$email,$hashed_password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result_check = mysqli_stmt_num_rows($stmt);

        if ($result_check >= 0) {
            header("location: ../index.php?signup=success");
            exit();
        }

        return true;
    }
}

function insert_user_it($username, $email, $password, $job_title){
    global $conn;

    $query = "INSERT INTO staff (username, email, password,type) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $query)) {
        echo "not prepared";
        echo mysqli_stmt_error($stmt);
        // header("location: ../signup.php?error=sqlerror");
        exit();
    }else {
        echo "prepared";
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"ssss", $username,$email,$hashed_password,$job_title);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result_check = mysqli_stmt_num_rows($stmt);

        if ($result_check >= 0) {
            header("location: ../it_admin/index.php?signup=success");
            exit();
        }

        return true;
    }
}

if (isset($_POST['signup-submit']) ) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password-repeat'];


    if (empty($username) || empty($email) || empty($password) || empty($password_repeat)) {
        header("location: ../signup.php?error=emptyfields&username=$username&email=$email");
        exit();
    }
    else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
    	header("location:../signup.php?error=invalidmail&uid");
    	exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        header("location:../signup.php?error=invalidmail&uid=".$username);
        exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("location: ../signup.php?error=invalidusername&mail=$mail");
        exit();
	}elseif ($password !== $password_repeat) {
        header("location: ../signup.php?error=diffpass&username=$username&email=$email");
    }
    else {
        if (username_does_not_exist($username) && email_does_not_exist($email)) {
            insert_user($username,$email,$password);
        }
    }

    mysqli_close($conn);
}
elseif ($_POST['add_user_submit']) {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $job_title = $_POST['customRadio'];


    if (empty($username) || empty($email) || empty($password) || empty($job_title)) {
        header("location: ../it_admin/index.php?error=emptyfields&username=$username&email=$email");
        exit();
    }
    else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
    	header("location:../signup.php?error=invalidmail&uid");
    	exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        header("location:../signup.php?error=invalidmail&uid=".$username);
        exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("location: ../signup.php?error=invalidusername&mail=$mail");
        exit();
	}
    else {
        echo "validation passed";
        if (username_does_not_exist($username) && email_does_not_exist($email)) {
            echo "user is new";
            insert_user_it($username,$email,$password, $job_title);
        }
    }

    mysqli_close($conn);
}
else {
    header("location: ../signup.php");
}