<?php
require_once("../header.php");

    if(isset($_POST['submit'])){

        $exam = mysqli_real_escape_string($conn, $_POST['exam']);
        $notes = mysqli_real_escape_string($conn, $_POST['notes']);
        $send = mysqli_real_escape_string($conn, $_POST['send']);

        $bv = "INSERT INTO notes (examnation, notes, opt) VALUES('$exam', '$notes', '$send')";
        $sql = mysqli_query($conn,$bv);
        if($sql){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
    
    // get top 5 records
    // $records = get_last_5_patient_records($patient_details['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    
    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <!-- Icons font CSS-->
    <!-- <link href="./vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="./vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"> -->
    <!-- Font special for pages-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    
    <!-- Vendor CSS-->
    <!-- <link href="./vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all"> -->
    
    <!-- Main CSS-->
    <!-- <link href="./css/main2.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="./css/custom.css"> -->
    <title>Doctors Notes</title>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <!-- search patient -->
            <div class="py-5"> 
            <div class="s003 d-flex flex-column py-0 px-0 " style="min-height: 100%">
                
                <?php
                    if (isset($error)) {
                    echo "
                    <div class=\"alert alert-danger mt-3\" role=\"alert\">
                    <strong>$error</strong>
                    </div>
                    ";

                    unset($error);
                    }
                ?>


                <form>
                    <div class="inner-form">

                    <div class="input-field second-wrap">
                        <input id="search" type="text" placeholder="Enter ID or Patient Number?" name="query" />
                    </div>
                    <div class="input-field third-wrap">
                        <button class="btn-search" type="button">
                        <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                        </button>
                    </div>
                    </div>
                </form>

                </div>

            </div>
            
            <?php if (isset($patient_details)) { ?>
                <!-- results -->
                <div class="card card-4" style="padding-bottom: 1rem !important;">
                    <div class="card-body pb-0">
                        <div class="card">
                            <div class="card-header w-100">
                                <h2 class="">Patient Details</h2>
                            </div>
                            <?php
                                $sql = mysqli_query($conn,"SELECT * FROM patient");
                                if(!$sql){
                                    echo mysqli_error($conn);
                                }else{
                                    $row = mysqli_fetch_assoc($sql);
                                }
                            ?>
                            <!-- patient basic info -->
                            <div class="card-body p-2">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Name: </p>"." ".$row['Fname']." ".$row['Mname'])?></li>
                                    <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Surname: </p>"." ".$row['Lname'])?></li>
                                    <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Patient Number: </p>"." ".$row['PatientNo'])?></li>
                                    <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>ID Number: </p>"." ".$row['Id_No'])?></li>
                                    <li class="list-group-item">Other Basic Info About Patient</li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- patient record history -->
                        <div class="card mt-4">
                            
                            <div class="card-header w-100">
                                <h2 class="">Patient Last 5 Vists</h2>
                            </div>
                            <div class="card-body p-2">
                                <ul class="list-group list-group-flush" >
                                    <!-- $records = get_doc_details($patient_details[]); -->
                                    <?php 
                                    //foreach ($records as $record) {
                                        echo "<li class=\"list-group-item list-group-item-action\" style=\"display: flex !important; justify-content: space-between !important;\"> 
                                            <button data-toggle=\"modal\" data-target=\".bd-example-modal-lg\" class=\"w-100\" style=\"display: flex !important; justify-content: space-between !important;\"> 
                                                <span class=\"\">4 day(s) ago</span> 
                                                <span class=\"\">Dr L M Mncube</span>  
                                                <span class=\"\">Coughing</span> 
                                            </button>
                                        </li>";
                                        
                                    //  } 
                                     ?>

                                    <li class="list-group-item list-group-item-action" style="display: flex !important; justify-content: space-between !important;"> <button data-toggle="modal" data-target=".bd-example-modal-lg" class="w-100" style="display: flex !important; justify-content: space-between !important;"> <span class="">4 day(s) ago</span> <span class="">Dr L M Mncube</span>  <span class="">Coughing</span> </button></li>
                                    <li class="list-group-item list-group-item-action" style="display: flex !important; justify-content: space-between !important;"> <button data-toggle="modal" data-target=".bd-example-modal-lg" class="w-100" style="display: flex !important; justify-content: space-between !important;"> <span class="">1 week(s) ago</span> <span class="">Dr L M Mncube</span>  <span class="">Coughing</span> </button></li>
                                    <li class="list-group-item list-group-item-action" style="display: flex !important; justify-content: space-between !important;"> <button data-toggle="modal" data-target=".bd-example-modal-lg" class="w-100" style="display: flex !important; justify-content: space-between !important;"> <span class="">2 week(s) ago</span> <span class=""> Dr L M Mncube</span>  <span class="">Coughing</span> </button></li>
                                    <li class="list-group-item list-group-item-action" style="display: flex !important; justify-content: space-between !important;"> <button data-toggle="modal" data-target=".bd-example-modal-lg" class="w-100" style="display: flex !important; justify-content: space-between !important;"> <span class="">2 month(s) ago</span> <span class="">Dr S G Langa</span>  <span class="">Leg Injury</span> </button></li>
                                    <li class="list-group-item list-group-item-action" style="display: flex !important; justify-content: space-between !important;"> <button data-toggle="modal" data-target=".bd-example-modal-lg" class="w-100" style="display: flex !important; justify-content: space-between !important;"> <span class="">3 month(s) ago</span> <span class="">Dr S G Langa</span>  <span class="">Flu</span> </button></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Large modal -->
                        <!-- <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                            Large modal
                        </button> -->
                        
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <!-- why patient was at hospital -->
                                <div class="modal-content py-2 px-2">
                                    <div class="alert alert-info" role="alert">
                                        <h4 class="alert-heading">Patient Description</h4>
                                        You successfully read this important alert message.
                                    </div>
                                </div>

                                <!-- doctors Diagnosis -->
                                <div class="modal-content py-2 px-2">
                                    <div class="alert alert-info" role="alert">
                                        <h4 class="alert-heading">Doctor Diagnosis</h4>
                                        You successfully read this important alert message.
                                    </div>
                                </div>

                                <!-- doctors Diagnosis -->
                                <div class="modal-content py-2 px-2">
                                    <div class="alert alert-info" role="alert">
                                        <h4 class="alert-heading">Medication Given</h4>
                                        You successfully read this important alert message.
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- patient vitals -->
                        <div class="card mt-3">
                            <?php
                                $sql = mysqli_query($conn,"SELECT * FROM vital WHERE id_No=\"$patient_details[Id_No]\" ");
                                if(!$sql){
                                    echo mysqli_error($conn);
                                }else{
                                    $patient_vitals = mysqli_fetch_assoc($sql);
                                    // echo "hello world";
                                }
                            ?>

                            <div class="card-header d-flex justify-content-between w-100">
                                <h2 class="">Vitals</h2>
                                <small><?php echo calc_time_passed(intval($patient_vitals['time']));?></small>
                            </div>

                            <div class="card-body p-2">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>BP: </p>"." ".$patient_vitals['BP'])?></li>
                                    <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Weight: </p>"." ".$patient_vitals['Weight'])?></li>
                                    <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>BMI: </p>"." ".$patient_vitals['BMI'])?></li>
                                    <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>HIV: </p>"." ".$patient_vitals['HIV'])?></li>
                                    <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Cholesterol: </p>"." ".$patient_vitals['Cholesterol'])?></li>
                                </ul>
                            </div>
                        </div>

                        <!-- doctors inputs -->
                        <form method="POST" action="../includes/submit_doc_notes.inc.php">
                        <div class="card mt-3">
                            <div class="card-header w-100">
                                <h2 class="">Examnation</h2>
                            </div>
                            <div class="card-body p-2">
                                <div >
                                    <div >
                                        <div class="input-group">
                                            <textarea class="input--style-4" name="examination" id="" cols="70"  rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                                <div class="card-header d-flex justify-content-between w-100">
                                    <h2 class="">Doctors Notes</h2>
                                </div>
                                <div class="card-body p-2">
                                    <div >
                                        <div >
                                                <div class="input-group">
                                                    <label for="short_diagnosis" >Short Diagnosis</label>
                                                    <input class="input--style-4" name="short_diagnosis"  id="short-diagnosis" cols="70"  rows="4"></input>
                                                </div>
                                                <div class="input-group">
                                                    <label for="doc_diagnosis" >Doc Full Diagnosis</label>
                                                    <textarea class="input--style-4" name="doc_notes" id="doc_diagnosis" cols="70"  rows="4"></textarea>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CPT Code -->
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label">Send To</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select  name="send_to" >
                                                    <!-- <option disabled="disabled" selected="selected">Choose option</option> -->
                                                    <option name="send_to" value="pharmacy">Pharmacy</option>
                                                    <option name="send_to" value="x_ray">X-Ray</option>
                                                    <option name="send_to" value="admission">Admission Ward</option>
                                                    <option name="send_to" value="home" selected="selected">Home</option>
                                            </select>
                                            <div name="send_to" class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <center class="mx-auto">
                                    <input type="hidden" name="patient_id" value="<?php echo $patient_details['id']; ?>">
                                    <input type="hidden" name="vitals_id" value="<?php echo $patient_vitals['id']?>">
                                    <button class="btn btn--radius-2 btn--blue" type="submit" name="submit_doc_notes" value="1">Submit</button>
                            </center>
                            </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Jquery JS-->
    <!-- <script src="./vendor/jquery/jquery.min.js"></script> -->
    <!-- bootstrap -->
    <!-- <script src="./bootstrap/js/bootstrap.min.js"></script> -->
    <!-- Vendor JS-->
    <!-- <script src="/assests/vendor/select2/select2.min.js"></script> -->
    <!-- <script src="/assets/vendor/datepicker/moment.min.js"></script> -->
    <!-- <script src="/assets/vendor/datepicker/daterangepicker.js"></script> -->

    <!-- Main JS-->
    <!-- <script src="js/global.js"></script> -->

/
<!-- end document-->

<?php require_once("../footer.php") ?>