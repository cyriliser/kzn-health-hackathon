<?php
session_start();
require_once("./dbh.inc.php");
function insert_prescription_request($medicine_name, $quantity, $dosage, $additional_notes,$patient_id){
    global $conn;

    $time = 1576053561;//time();
    $query = "INSERT INTO prescriptions (medicine_name, quantity, dosage,additional_notes,doctor_id,patient_id) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $query)) {
        echo "not prepared";
        echo mysqli_stmt_error($stmt);
        header("location: ../signup.php?error=sqlerror");
        exit();
    }else {
        echo "prepared";
        mysqli_stmt_bind_param($stmt,"ssssii", $medicine_name, $quantity, $dosage, $additional_notes,$_SESSION['userId'],$patient_id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result_check = mysqli_stmt_num_rows($stmt);

        if ($result_check >= 0) {
            $url = "../doctor/index.php?record_insert=success";
            header("location: $url");
            exit();
        }

        return true;
    }
}

if (isset($_POST['submit_prescription'])) {
    $medicine_name = $_POST['medicine_name'];
    $quantity = $_POST['quantity'];
    $dosage = $_POST['dosage'];
    $additional_notes = $_POST['additional_notes'];
    $patient_id = $_POST['patient_id'];
    echo $patient_id;
    insert_prescription_request($medicine_name, $quantity, $dosage, $additional_notes,$patient_id);
} else {
    header("location: ../index.php");
}
