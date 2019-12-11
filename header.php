<?php 
session_start(); 
require_once("includes/dbh.inc.php");
?>

<!-- functions -->
<?php 
    function get_staff_details($id){
        // echo $id;
        global $conn;

        $query = "SELECT * FROM staff WHERE id=\"$id\" ";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo mysqli_error($conn);
            // header("location: ../signup.php?error=".mysqli_error($conn));
            // exit();
        }else {
            $details = mysqli_fetch_assoc($result);
            // echo $details['type'];
            return $details;
        }

    }

    function search_patient($id){
        global $conn, $patient_details, $error;
        if (isset($_GET['query'])) {
            $_SESSION["lastPatient"] = $_GET['query'];
        }
        // $_SESSION["lastPatient"] = (isset($_GET['query'])) ? $_GET['query'] : $_SESSION["lastPatient"] ;
        $query = $_SESSION["lastPatient"]; 
        // gets value sent over search form
        
        $min_length = 3;
        // you can set minimum length of the query if you want
        
        if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
            
            $query = htmlspecialchars($query); 
            // changes characters used in html to their equivalents, for example: < to &gt;
            
            $query = mysqli_real_escape_string($conn, $query);
            // makes sure nobody uses SQL injection
            
            $raw_results = mysqli_query($conn, "SELECT * FROM patient
                WHERE (`Id_No` LIKE '%".$query."%') OR (`PatientNo` LIKE '%".$query."%')") or die(mysqli_error($conn));
                
            // * means that it selects all fields, you can also write: `id`, `title`, `text`
            // articles is the name of our table
            
            // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
            // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
            // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
            
            if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
                
                while($results = mysqli_fetch_array($raw_results)){
                // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                    $patient_details = $results;
                    $_SESSION["lastPatient"] = $patient_details['id'];
                    // echo "<a href='vital_check.php'><p><h3>".$results['Fname']." ".$results['Lname']." ".$results['Id_No']."</h3></p></a>";
                    // posts results gotten from database(title and text) you can also show id ($results['id'])
                }
                
            }
            else{ // if there is no matching rows do following
                $error =  "No results found with patient ID";
            }
            
        }
        else{ // if query length is less than minimum
        $error = "Identity or Patient Number is incomplete";
        }
    }

    function calc_age($dob){
        $year = intval(explode("-", $dob)[0]);
        $age = date("Y") - $year;

        return $age;
    }

    function calc_time_passed($time){
        $time_difference = time() - $time;
    
        if( $time_difference < 1 ) { return 'less than 1 second ago'; }
        $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                    30 * 24 * 60 * 60       =>  'month',
                    24 * 60 * 60            =>  'day',
                    60 * 60                 =>  'hour',
                    60                      =>  'minute',
                    1                       =>  'second'
        );
    
        foreach( $condition as $secs => $str )
        {
            $d = $time_difference / $secs;
    
            if( $d >= 1 )
            {
                $t = round( $d );
                return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
            }
        }
    }

    function get_last_5_patient_records($id){
        global $conn ;
        $query = "SELECT * FROM patient_records WHERE patient_id=\"$id\"";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo mysqli_error($conn);
        }else {
            $output = [];
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($output, $row);
            }

            return $output;
        }
    }

    function get_doc_details($id)
    {
        global $conn;
        $query = "SELECT * FROM staff WHERE id=\"$id\" ";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo mysqli_error($conn);
        }else {
            return mysqli_fetch_assoc($result);
        }
    }
?>
<!-- functions end -->

<!-- usefull variables -->
<?php
    if (isset($_SESSION['userId'])) {
        $loggedInUser = get_staff_details($_SESSION['userId']);
        // echo $loggedInUser['type'];
    }

    $patient_details;

    $error;

    if (isset($_GET['query'])) {
        search_patient($_GET['query']);
    }

    if (isset($_SESSION["lastPatient"])) {
        search_patient($_SESSION["lastPatient"]);
    }

    // $_SESSION["lastPatient"]

?>
<!-- usefull variables end -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootsrap css -->
    <!-- ============================================================================================= -->
    <link rel="shortcut icon" href="/assets/images/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css" id="bootstrap_file">
    <link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="/assets/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/util.css">
    
    <!-- Vendor CSS-->
    <link href="/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assets/css/main2.css" rel="stylesheet" media="all">
    <!-- <link rel="stylesheet" href="/assests/css/custom.css"> -->
    <link rel="stylesheet" href="/assets/css/main3.css">


	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <!-- ============================================================================================= -->
    <!-- custom style css -->
    <link rel="stylesheet" href="/assets/css/style.css">
