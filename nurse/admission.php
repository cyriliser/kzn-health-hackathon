<?php require_once("../header.php");

    if(isset($_POST['submit'])){

        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $surname = mysqli_real_escape_string($conn,$_POST['surname']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        $relationship = mysqli_real_escape_string($conn,$_POST['relationship']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $bed = mysqli_real_escape_string($conn, $_POST['bed']);
        $p_sign = mysqli_real_escape_string($conn, $_POST['p_sign']);
        $n_sign = mysqli_real_escape_string($conn, $_POST['n_sign']);

        
        $array = "INSERT INTO next_of_kin(name, surname, address, relationship, phone, bed, patient_sign, nurse_sign)
        Values('$name', '$surname', '$address', '$relationship', '$phone', '$bed', '$p_sign', '$n_sign')";
        $sql = mysqli_query($conn,$array);
        if($sql){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        
    }
?>

<!-- <!DOCTYPE html>
<html lang="en"> -->

<!-- <head> -->
    <!-- Required meta tags -->
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates"> -->

    <!-- Title Page-->
    
    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="/assets/bootstrap-4.3.1-dist/css/bootstrap.min.css"> -->
    <!-- Icons font CSS-->
    <!-- <link href="/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> -->
    <!-- <link href="/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"> -->
    <!-- Font special for pages-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    
    <!-- Vendor CSS-->
    <!-- <link href="/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all"> -->
    <!-- <link href="/assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all"> -->
    
    <!-- Main CSS-->
    <!-- <link href="/assets/css/main.css" rel="stylesheet" media="all"> -->
    <!-- <link rel="stylesheet" href="/assests/css/custom.css"> -->
    <title>Doctors Notice</title>
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
                <!-- admit section -->
                <div>
                    <!-- patient Details -->
                    <div class="card card-4" style="padding-bottom: 1rem !important;">
                        <div class="card-body pb-0">
                            <div class="card">
                                <div class="card-header w-100">
                                    <h2 class="">Patient Details</h2>
                                </div>
                                <div class="card-body p-2">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><?php echo "$patient_details[Fname] $patient_details[Lname]"; ?></li>
                                        <li class="list-group-item"><?php echo calc_age($patient_details['DOB'])  ; ?> Years Old</li>
                                        <li class="list-group-item"><?php echo $patient_details['Gender']  ; ?></li>
                                        <li class="list-group-item">Other Basic Info About Patient</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="alert alert-info mt-4" role="alert">
                                <h4 class="alert-heading">Note From Doctor</h4>
                                <strong>Heads up!</strong> Patient is nuts
                            </div>

                            <!-- <div class="card mt-4">
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
                            </div> -->

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
                                    <h2 class="">Medical Info</h2>
                                    <!-- <small>15 Minutes ago</small> -->
                                </div>
                                <div class="card-body p-2">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Type Of Case : ...</li>
                                        <li class="list-group-item">Diagnosis    : TB Stage 2</li>
                                        <li class="list-group-item">Ward Name    : TB Ward</li>
                                        <li class="list-group-item">Ward Type    : Private</li>
                                    </ul>
                                </div>
                            </div>



                        </div>
                    </div>

                    <!-- input patient Details -->
                    <div class="card card-4 mt-4" style="padding-bottom: 1rem !important;">
                            <div class="card-body pb-0">
                                <div class="card">
                                    <div class="card-header w-100">
                                        <h2 class="">Next Of Kin Details</h2>
                                    </div>
                                    <form action="" method="post">
                                        <div class="card-body p-2">
                                            <div class="">
                                                <div class="">
                                                    <div class="input-group">
                                                        <label class="label">Name</label>
                                                        <input class="input--style-4" type="text" name="name">
                                                    </div>
                                                </div>
                                                <div class="">
                                                        <div class="input-group">
                                                            <label class="label">Surname</label>
                                                            <input class="input--style-4" type="text" name="surname">
                                                        </div>
                                                </div>
                                                <div class="">
                                                        <div class="input-group">
                                                            <label class="label">Address </label>
                                                            <input class="input--style-4" type="text" name="address">
                                                        </div>
                                                </div>
                                                <div class="">
                                                        <div class="input-group">
                                                            <label class="label">Relationship</label>
                                                            <input class="input--style-4" type="text" name="relationship">
                                                        </div>
                                                </div>
                                                <div class="">
                                                        <div class="input-group">
                                                            <label class="label">Tel No.</label>
                                                            <input class="input--style-4" type="text" name="phone">
                                                        </div>
                                                </div>

                                                </div>

                                            </div>

                                            <div class="alert alert-warning mx-2" role="alert">
                                                <h4 class="alert-heading">Declaration</h4>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta reprehenderit, harum aperiam architecto facere in quas modi quod deserunt blanditiis quae facilis illum molestiae vitae suscipit ipsam nam magni alias!</p>
                                                <div class="d-flex justify-content-around my-3 border border-top-0 border-right-0 border-left-0 border-dotted mx-5">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name='p_sign' value="Signed">
                                                        <label class="custom-control-label" for="customCheck1">Patient Signature</label>
                                                    </div>
            
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2" name="n_sign" value="Signed">
                                                        <label class="custom-control-label" for="customCheck2">Admitting Nurse Signature</label>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <div class="input-group mx-5 mt-5">
                                                <label class="label">Select Bed No</label>
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                    <select name="bed">
                                                        <option>Bed No 1</option>
                                                        <option>Bed No 4 </option>
                                                        <option>Bed No 5</option>
                                                        <option>Bed No 7</option>
                                                    </select>
                                                    <div class="select-dropdown "></div>
                                                </div>
                                            </div>
                                                
                    
                                            <!-- <div class="row row-space">
                                                <div class="col-2">
                                                    <div class="input-group">
                                                        <label class="label">Address</label>
                                                        <input class="input--style-4" type="email" name="email">
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
                                                    <select name="subject">
                                                        <option disabled="disabled" selected="selected">Choose option</option>
                                                        <option>Black</option>
                                                        <option>Coloured</option>
                                                        <option>Indians</option>
                                                        <option>whites</option>
                                                    </select>
                                                    <div class="select-dropdown"></div>
                                                </div>
                                            </div> -->
                                            <center class=" mx-auto my-5">
                                                <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Save</button>
                                            </center>
                                        </div>

                                    </form>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </div>

    <!-- Jquery JS-->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="/assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <!-- Vendor JS-->
    <script src="/assests/vendor/select2/select2.min.js"></script>
    <script src="/assets/vendor/datepicker/moment.min.js"></script>
    <script src="/assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->