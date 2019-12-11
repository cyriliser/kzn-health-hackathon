<?php
require_once("../header.php");

    // if(isset($_POST['submit'])){

    //     $exam = mysqli_real_escape_string($con, $_POST['exam']);
    //     $notes = mysqli_real_escape_string($con, $_POST['notes']);
    //     $send = mysqli_real_escape_string($con, $_POST['send']);

    //     $bv = "INSERT INTO notes (examnation, notes, opt) VALUES('$exam', '$notes', '$send')";
    //     $sql = mysqli_query($con,$bv);
    //     if($sql){
    //         echo "Records inserted successfully.";
    //     } else{
    //         echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    //     }
    // }
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head> -->
    <!-- Required meta tags-->
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates"> -->

    <!-- Title Page-->
    
    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <!-- Icons font CSS-->
    <!-- <link href="./vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> -->
    <!-- <link href="./vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"> -->
    <!-- Font special for pages-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    
    <!-- Vendor CSS-->
    <!-- <link href="./vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all"> -->
    
    <!-- Main CSS-->
    <!-- <link href="./css/main2.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="./css/custom.css"> -->
    <title>Doctors Notice</title>
    
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4" style="padding-bottom: 1rem !important;">
                <div class="card-body pb-0">
                    <div class="card">
                        <div class="card-header w-100">
                            <h2 class="">X-Ray Scan</h2>
                        </div>
                        <?php
                            // $sql = mysqli_query($con,"SELECT * FROM patient");
                            // if(!$sql){
                            //     echo mysqli_error($con);
                            // }else{
                            //     $row = mysqli_fetch_assoc($sql);
                            // }
                        ?>
                        
                         <div class="card-body p-2">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><p style='font-weight: bold; display: inline-block'>Name: </p>"//." ".$row['Fname']." ".$row['Mname']</li>
                                <li class="list-group-item"><p style='font-weight: bold; display: inline-block'>Surname: </p>"//." ".$row['Lname']</li>
                                <li class="list-group-item"><p style='font-weight: bold; display: inline-block'>Patient ID: </p>"//." ".$row['Lname']</li>
                                <li class="list-group-item"><p style='font-weight: bold; display: inline-block'>Body Part: </p>"//." ".$row['Lname']</li>
                                <li class="list-group-item"><p style='font-weight: bold; display: inline-block'>Priority: </p>"//." ".$row['PatientNo']</li>
                                <li class="list-group-item"><p style='font-weight: bold; display: inline-block'>Mobility: </p>"//." ".$row['Id_No']</li>
                                <li class="list-group-item"><p style='font-weight: bold; display: inline-block'>Patient Category: </p> "//." ".$row['PatientNo']</li>
                                <li class="list-group-item"><p style='font-weight: bold; display: inline-block'>Infection Risk: </p> "//." ".$row['PatientNo']</li>
                            </ul>
                        </div>
                    </div> <br><br>
                     
                    <form method="Post">
                         <div class="input-group">
                            <div class="custom-file"> 
                                <input type="file" class="custom-file-input" id="inputGroupFile01"aria-describedby="inputGroupFileAddon01" name="file" accept="application/pdf">
                                <label class="custom-file-label" for="inputGroupFile01">Upload X-Ray Scan</label>
                            </div>
                        </div>
                                       
                        <center class="mx-auto">
                                <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Done</button>
                        </center>
                        </form>
                </div>
            </div>
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

<!-- </body> -->

<!-- </html> -->
<!-- end document-->

<?php require_once("../footer.php");?>