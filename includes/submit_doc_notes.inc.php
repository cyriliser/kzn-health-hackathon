<?php
session_start();
require_once("./dbh.inc.php");
function insert_patient_record($examination, $doc_notes, $short_diagnosis, $vitails_id,$send_to,$patient_id){
    global $conn;

    $time = 1576053561;//time();
    $query = "INSERT INTO patient_records (examination, doctor_notes, short_diagnosis,vitals_id,doctor_id,patient_id) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $query)) {
        echo "not prepared";
        echo mysqli_stmt_error($stmt);
        // header("location: ../signup.php?error=sqlerror");
        exit();
    }else {
        echo "prepared";
        mysqli_stmt_bind_param($stmt,"sssiii", $examination,$doc_notes,$short_diagnosis,$vitails_id,$_SESSION['userId'],$patient_id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result_check = mysqli_stmt_num_rows($stmt);

        if ($result_check >= 0) {
            switch ($send_to) {
                case 'pharmacy':
                    $url = "../doctor/prescribe.php?record_insert=success&query=$patient_id";
                    break;
                case 'x_ray':
                    $url = "../doctor/x-ray.php?record_insert=success";
                    break;
                case 'admission':
                    $url = "../doctor/admission.php?record_insert=success";
                    break;
                case 'home':
                    $url = "../doctor/index.php?record_insert=success";
                    break;
                default:
                    $url = "../doctor/index.php?record_insert=success";
                    break;
            }
            header("location: $url");
            exit();
        }

        return true;
    }
}

if (isset($_POST['submit_doc_notes'])) {
    
    $examination = $_POST['examination'];
    $doc_notes = $_POST['doc_notes'];
    $short_diagnosis = $_POST['short_diagnosis'];
    $vitails_id = $_POST['vitals_id'];
    $send_to = $_POST['send_to'];
    $patient_id = $_POST['patient_id'];
    insert_patient_record($examination,$doc_notes,$short_diagnosis,$vitails_id,$send_to,$patient_id);

}