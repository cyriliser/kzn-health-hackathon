<?php
include_once('resource/db.php');

    if(isset($_POST['submit'])){

        $bp = mysqli_real_escape_string($con, $_POST['bp']);
        $weight = mysqli_real_escape_string($con, $_POST['weight']);
        $bmi = mysqli_real_escape_string($con, $_POST['bmi']);
        $hiv = mysqli_real_escape_string($con, $_POST['hiv']);
        $cholesterol = mysqli_real_escape_string($con, $_POST['cholesterol']);
        $clinic = mysqli_real_escape_string($con, $_POST['clinic']);

        $Patient_id = 12487;
        $ww = "SELECT * from patient Where Id_No='$Patient_id'";
        $result = mysqli_query($con, $ww);
        if(!$result){
            echo mysqli_error($con);
        }else {
            $patient_details = mysqli_fetch_assoc($result);

            // $query = "INSERT INTO vital(Id_No) SELECT Id_No FROM patient WHERE Id_No";
            //     if(mysqli_query($con, $query))
            
            $sql = "INSERT INTO vital (BP, Weight, BMI, HIV, Cholesterol, Clinic, Id_No) 
                VALUES ('$bp', '$weight', '$bmi', '$hiv', '$cholesterol', '$clinic', '$patient_details[Id_No]')"; 
            if(mysqli_query($con, $sql)){
                echo "Records inserted successfully.";
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
            }
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
    <title>Doctor-Patient Details</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main2.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Vital Checks</h2>
                    <form method="POST">
                        <div class="row row-space">
                                <div class="row-2"></div>
                                <a href="History.php">View Patient History</a>
                                </div>
                        <form method="POST">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">BP</label>
                                            <input class="input--style-4" type="text" name="bp" required>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                            <div class="input-group">
                                                <label class="label">Weight</label>
                                                <input class="input--style-4" type="text" name="weight" required>
                                            </div>
                                    </div>
                                    <div class="col-2">
                                            <div class="input-group">
                                                <label class="label" >BMI</label>
                                                <input class="input--style-4" type="text" name="bmi" required>
                                            </div>
                                    </div>
                                    <div class="input-group">
                                            <label class="label">HIV Status</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="hiv" required>
                                                    <option disabled="disabled" selected="selected">Select Status</option>
                                                    <option>Positive</option>
                                                    <option>Negative</option>
                                                </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                     </div>
                                    <div class="col-2">
                                            <div class="input-group">
                                                <label class="label" required >Cholesterol</label>
                                                <input class="input--style-4" type="text" name="cholesterol">
                                            </div>
                                    </div>
                                <div class="input-group">
                                        <label class="label">Clinic</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="clinic" required>
                                                <option disabled="disabled" selected="selected">Select Clinic</option>
                                                <option>Optometry</option>
                                                <option>Maternity</option>                                     
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                <div class="p-t-15">
                                    <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
                                </div>
                            </form>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->