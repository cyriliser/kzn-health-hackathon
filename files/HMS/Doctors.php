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
    <title>Doctors Notes</title>

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
    <link rel="stylesheet" href="custom.css">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4" style="padding-bottom: 1rem !important;">
                <div class="card-body pb-0">
                    <center><h2 class="title mx-auto" >Doctors Notes</h2></center>
                    <h3 class="title">Patient Details</h3>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">First Name</label>
                                    <input class="input--style-4" type="text" name="patient_name">
                                </div>
                            </div>
                            <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Surname</label>
                                        <input class="input--style-4" type="text" name="surname">
                                    </div>
                            </div>
                            <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Date of Birth</label>
                                        <input class="input--style-4" type="text" name="date_of_birth">
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
                                        <input class="input--style-4" type="text" name="Last_name">
                                    </div>
                            </div>
                            </div>


                            <div class="">
                                <h3 class="title col-12 row">Diagnosis</h3>

                                <!-- codes -->
                                <div class="d-flex flex-row justify-content-around ">
                                    <!-- diagnosis code -->
                                    <div class="input-group">
                                        <label class="label">Diagnosis Code</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="subject">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option>Cancer</option>
                                                <option>Coloured</option>
                                                <option>Indians</option>
                                                <option>whites</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>

                                    <!-- CPT Code -->
                                    <div class="input-group">
                                        <label class="label">CPT Code</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="subject">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option>Surgery   : 10021 - 69990</option>
                                                <option>Radiology : 71106 - 96346</option>
                                                <option>Surgery : 10021 - 69990</option>
                                                <option>Surgery : 10021 - 69990</option>
                                                <option>Surgery : 10021 - 69990</option>

                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Additional Notes -->
                                <div class="row">
                                    <div class="row row-space">
                                        <!-- <div class="col-12"> -->
                                            <div class="input-group">
                                                <label class="label">Additional Notes</label>
                                                <textarea class="input--style-4" name="Additional_Notes" id="" cols="55" rows="5"></textarea>
                                                <!-- <input class="input--style-4" type="email" name="addtionl_notes"> -->
                                            </div>
                                        <!-- </div> -->
                                        </div>
                                    </div>

                                    <!-- CPT Code -->
                                    <div class="col-12">
                                        <div class="input-group">
                                            <label class="label">Send To</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="subject">
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

                            </div>>

                            

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
                        <center class=" mx-auto">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </center>
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

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->