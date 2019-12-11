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
    
  <?php
  if (isset($_GET['query'])) {
    search_patient($_GET['query']);
    // $query = $_GET['query']; 
    // // gets value sent over search form
     
    // $min_length = 3;
    // // you can set minimum length of the query if you want
     
    // if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
    //     $query = htmlspecialchars($query); 
    //     // changes characters used in html to their equivalents, for example: < to &gt;
        
    //     $query = mysqli_real_escape_string($conn, $query);
    //     // makes sure nobody uses SQL injection
         
    //     $raw_results = mysqli_query($conn, "SELECT * FROM patient
    //         WHERE (`Id_No` LIKE '%".$query."%') OR (`PatientNo` LIKE '%".$query."%')") or die(mysqli_error($conn));
             
    //     // * means that it selects all fields, you can also write: `id`, `title`, `text`
    //     // articles is the name of our table
         
    //     // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
    //     // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
    //     // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
    //     if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
    //         while($results = mysqli_fetch_array($raw_results)){
    //         // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
    //             $patient_details = $results;
    //             $_SESSION["lastPatient"] = $patient_details['id'];
    //             // echo "<a href='vital_check.php'><p><h3>".$results['Fname']." ".$results['Lname']." ".$results['Id_No']."</h3></p></a>";
    //             // posts results gotten from database(title and text) you can also show id ($results['id'])
    //         }
             
    //     }
    //     else{ // if there is no matching rows do following
    //         $error =  "No results found with patient ID";
    //     }
         
    // }
    // else{ // if query length is less than minimum
    //   $error = "Identity or Patient Number is incomplete";
    // }
  }    

?>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <!-- search  -->
            <div class="s003 " style="display: flex; flex-direction: column; margin-bottom: 1rem; min-height: 100%;">
                <!-- response  -->
                <?php
                    if (isset($error) and $error) {
                    echo "
                    <div class=\"alert alert-danger\" role=\"alert\">
                    <strong>$error</strong>
                    </div>
                    ";
                    }
                ?>
                <!-- search -->
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

                <?php if(isset($patient_details)){ ?>
                    <div class="card mt-5 " style="width: 60%">
                        <div class="card-header d-flex flex-column justify-content-around w-100" style="display: flex; flex-direction: column; justify-content: space-around;width: 100%;">
                            <h2 class="mx-auto mb-4">Patient Details</h2>

                        </div>
                        <div class="card-body p-2">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Name: </p>"." ".$patient_details['Fname']." ".$patient_details['Mname'])?></li>
                                <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Surname: </p>"." ".$patient_details['Lname'])?></li>
                                <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Patient Number: </p>"." ".$patient_details['PatientNo'])?></li>
                                <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>ID Number: </p>"." ".$patient_details['Id_No'])?></li>
                                <li class="list-group-item">Other Basic Info About Patient</li>
                            </ul>
                        </div>
                    </div>
                <?php }?>
            </div>

            
            <?php if(!isset($patient_details)){ ?>
                <!-- patient registration -->
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
            <?php }?>
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
<script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
<?php require_once("../footer.php");?>