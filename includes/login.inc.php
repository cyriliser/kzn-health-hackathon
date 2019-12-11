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
            header("location: ../signup.php?signup=success");
            exit();
        }

        return true;
    }
}

function username_email_and_password_match($username_email, $password){
    global $conn;
    $query = "SELECT * FROM staff WHERE username=? OR email=? ;";

    $stmt = mysqli_stmt_init($conn);
    $prepared = mysqli_stmt_prepare($stmt, $query);

    if (!$prepared) {
        echo " unprepared";
        header("location: ../index.php?error=sqlerror");
        exit();
    }else {
        mysqli_stmt_bind_param($stmt,"ss", $username_email, $username_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        // $result_check = mysqli_stmt_num_rows($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $password_check = password_verify($password, $row['password']);
            if ($password_check == false) {
                header("location: ../index.php?login=failed");
                exit();
            }
            elseif ($password_check == true) {
                session_start();
                $_SESSION['userId'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                header("location: ../index.php?login=success");
                exit();
            }
            else {
                header("location: ../index.php?login=failed");
                exit();
            }
        }else {
            header("location: ../index.php?login=failed");
            exit();
        }
    }
}

if (isset($_POST['login-submit']) ) {

    $username_email = $_POST['username_email'];
    // $email = $_POST['email'];
    $password = $_POST['password'];
    // $password_repeat = $_POST['password-repeat'];


    if (empty($username_email) || empty($password) ) {
        header("location: ../index.php?error=emptyfields&username=$username&email=$email");
        exit();
    }
    else {
        if (username_email_and_password_match($username_email, $password) ) {
            echo "matches";
        }
    }

    mysqli_close($conn);
}else {
    header("location: ../index.php");
}