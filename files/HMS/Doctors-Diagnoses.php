<?php
include_once('resource/db.php');

    if(isset($_POST['submit'])){

        $exam = mysqli_real_escape_string($con, $_POST['exam']);
        $notes = mysqli_real_escape_string($con, $_POST['notes']);
        $send = mysqli_real_escape_string($con, $_POST['send']);

        $bv = "INSERT INTO notes (examnation, notes, opt) VALUES('$exam', '$notes', '$send')";
        $sql = mysqli_query($con,$bv);
        if($sql){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Doctors Notice</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Icons font CSS-->
    <link href="./vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="./vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="./vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="./css/main2.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="./css/custom.css">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4" style="padding-bottom: 1rem !important;">
                <div class="card-body pb-0">
                    <div class="card">
                        <div class="card-header w-100">
                            <h2 class="">Patient Details</h2>
                        </div>
                        <?php
                            $sql = mysqli_query($con,"SELECT * FROM patient");
                            if(!$sql){
                                echo mysqli_error($con);
                            }else{
                                $row = mysqli_fetch_assoc($sql);
                            }
                        ?>
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

                    <div class="card mt-4">
                        <div class="card-header w-100">
                            <h2 class="">Patient Last 5 Vists</h2>
                        </div>
                        <div class="card-body p-2">
                            <ul class="list-group list-group-flush" >
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

                    <div class="card mt-3">
                        <div class="card-header d-flex justify-content-between w-100">
                            <h2 class="">Vitals</h2>
                            <small>15 Minutes ago</small>
                        </div>

                        <?php
                            $sql = mysqli_query($con,"SELECT * FROM vital");
                            if(!$sql){
                                echo mysqli_error($con);
                            }else{
                                $row = mysqli_fetch_assoc($sql);
                            }
                        ?>
                        <div class="card-body p-2">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>BP: </p>"." ".$row['BP'])?></li>
                                <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Weight: </p>"." ".$row['Weight'])?></li>
                                <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>BMI: </p>"." ".$row['BMI'])?></li>
                                <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>HIV: </p>"." ".$row['HIV'])?></li>
                                <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Cholesterol: </p>"." ".$row['Cholesterol'])?></li>
                            </ul>
                        </div>
                    </div>
                    <form method="POST" action="">
                    <div class="card mt-3">
                        <div class="card-header d-flex justify-content-between w-100">
                            <h2 class="">Examnation</h2>
                            <small>15 Minutes ago</small>
                        </div>
                        <div class="card-body p-2">
                             <div >
                                   <div >
                                        <div class="input-group">
                                            <textarea class="input--style-4" name="exam" id="" cols="70"  rows="4"></textarea>
                                        </div>
                                    </div>
                             </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                            <div class="card-header d-flex justify-content-between w-100">
                                <h2 class="">Doctors Notes</h2>
                                <small>28 Minutes ago</small>
                            </div>
                            <div class="card-body p-2">
                                 <div >
                                       <div >
                                            <div class="input-group">
                                                <textarea class="input--style-4" name="notes" id="" cols="70"  rows="4"></textarea>
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
                                        <select name="send">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option>Pharmacy</option>
                                                <option>X-Ray</option>
                                                <option>Admission Ward</option>
                                                <option>Home</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center class="mx-auto">
                                <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
                        </center>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <!-- Vendor JS-->
    <script src="/assests/vendor/select2/select2.min.js"></script>
    <script src="/assets/vendor/datepicker/moment.min.js"></script>
    <script src="/assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->