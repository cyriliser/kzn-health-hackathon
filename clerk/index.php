<?php
require_once("../header.php");

if ($loggedInUser['type'] !== "clerk") {
    header("location: /");
}
    if(isset($_POST['submit'])){

        $hospital = mysqli_real_escape_string($conn, $_POST['hospital_name']);
        $patient_no = mysqli_real_escape_string($conn, $_POST['patient_number']);
        $firstName = mysqli_real_escape_string($conn, $_POST['first_name']);
        $middlename = mysqli_real_escape_string($conn, $_POST['middle_name']);
        $lastName = mysqli_real_escape_string($conn, $_POST['last_name']);
        $idNumber = mysqli_real_escape_string($conn, $_POST['id_number']);
        $birthDate = mysqli_real_escape_string($conn, $_POST['birthday']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $phoneNumber = mysqli_real_escape_string($conn, $_POST['phone']);
        $ethnic = mysqli_real_escape_string($conn, $_POST['ethnic']);
       // $fileUpload = mysqli_real_escape_string($conn, $_POST['file']);

       $allowedExts = array("pdf");
       $temp = explode(".", $_FILES["file"]["name"]);
       $extension = end($temp);
       $upload_pdf=$_FILES["file"]["name"];
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/pdf/" . $_FILES["file"]["name"]);

        $sql = "INSERT INTO patient (PatientNo, Fname, Mname, Lname, Id_No, DOB, Gender, PhoneNo, Address, Ethnic, Hospital, Pdf_file) 
            VALUES ('$patient_no', '$firstName', '$middlename', '$lastName', '$idNumber', '$birthDate', '$gender',  '$phoneNumber', '$address', '$ethnic', '$hospital', '$upload_pdf')";
        if(mysqli_query($conn, $sql)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }


       
       
        //  $sql=mysqli_query($conn,"INSERT INTO `patient`(`Pdf_file`)VALUES($upload_pdf')");
        //  if($sql){
        //      echo "Data Submit Successful";
        //  }
        //  else{
        //      echo "Data Submit Error!!";
        //  }
    }

?>

<script>
    document.querySelector("#bootstrap_file").disabled = true;
</script>

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
    
    <!-- Icons font CSS-->
    <!-- <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> -->
    <!-- <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"> -->
    <!-- Font special for pages-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    
    <!-- Vendor CSS-->
    <!-- <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all"> -->
    
    <!-- Main CSS-->
    <!-- <link href="css/main2.css" rel="stylesheet" media="all"> -->
    <title>Patient Register Form</title>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Patient Details</h2>
                    <form method="POST" role="form" enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Hospital</label>
                                    <input class="input--style-4" type="text" name="hospital_name">
                                </div>
                            </div>
                            <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Patient number</label>
                                        <input class="input--style-4" type="text" name="patient_number">
                                    </div>
                            </div>
                            <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">First Name</label>
                                        <input class="input--style-4" type="text" name="first_name">
                                    </div>
                            </div>
                            <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Middle Name</label>
                                        <input class="input--style-4" type="text" name="middle_name">
                                    </div>
                            </div>
                            <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Last Name</label>
                                        <input class="input--style-4" type="text" name="last_name">
                                    </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">ID Number</label>
                                    <input class="input--style-4" type="text" name="id_number">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Address</label>
                                    <input class="input--style-4" type="address" name="address">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Ethnic Group</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="ethnic">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Black</option>
                                    <option>Coloured</option>
                                    <option>Indians</option>
                                    <option>whites</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="col-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                            <div class="custom-file " style="width: 100% !important;">
                                <input style="width: 100% !important;" type="file" class="custom-file-input" id="inputGroupFile01"aria-describedby="inputGroupFileAddon01" name="file" accept="application/pdf">
                                <!-- <label class="custom-file-label" for="inputGroupFile01" style="width: 40%">Choose file</label> -->
                            </div>
                        </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <!-- Vendor JS-->
    <!-- <script src="vendor/select2/select2.min.js"></script> -->
    <!-- <script src="vendor/datepicker/moment.min.js"></script> -->
    <!-- <script src="vendor/datepicker/daterangepicker.js"></script> -->

    <!-- Main JS-->
    <!-- <script src="js/global.js"></script> -->

<!-- </body>This templates was made by Colorlib (https://colorlib.com) -->

<!-- </html> -->
<!-- end document-->

<?php require_once("../footer.php");?>