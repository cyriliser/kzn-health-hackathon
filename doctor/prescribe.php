<?php require_once("../header.php");?>
    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="/assets/bootstrap-4.3.1-dist/css/bootstrap.min.css"> -->

    <!-- Icons font CSS-->
    <!-- <link href="/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> -->
    <!-- <link href="/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"> -->
    <!-- Font special for pages-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

    <!-- Vendor CSS-->
    <!-- <link href="/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all"> -->

    <!-- Main CSS-->
    <!-- <link href="/assets/css/main2.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="/assests/css/custom.css"> -->
    <title>Pharmacist</title>
    
</head>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4" style="padding-bottom: 1rem !important;">
                <div class="card-body pb-0">
                    <center><h2 class="title mx-auto" >Pharmacy</h2></center>
                    <h3 class="title">Patient Details</h3>
                    <form action="../includes/send_priscription.inc.php" method="POST">
                        <div class="row row-space">
                            <div class="">
                                <div class="input-group">
                                    <label class="label">Medicine Name</label>
                                    <input class="input--style-4" type="text" name="medicine_name">
                                </div>
                            </div>
                            <div class="">
                                    <div class="input-group">
                                        <label class="label">Quantity</label>
                                        <input class="input--style-4" type="text" name="quantity">
                                    </div>
                            </div>


                            <!-- <div class="col-2">
                                    <div class="input-group">
                                        <label class="label"></label>
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
                            </div> -->
                            </div>


                            <div class="">
                                <h1 class="title col-12 row">Dosage</h1>

                                <div class=" ">
                                    <div class="input-group">
                                        <label class="label mt-3">Use</label>
                                        <input class="input--style-4 w-50 mx-2" type="text" name="dosage">
                                        <label class="mt-3" for="">Times a Day</label>
                                    </div>
                                </div>

                                <!-- Additional Notes -->
                                <div class="row">
                                    <div class="row row-space">
                                        <!-- <div class="col-12"> -->
                                            <div class="input-group">
                                                <label class="label">Additional Notes</label>
                                                <textarea class="input--style-4" name="additional_notes" id="" cols="55" rows="3"></textarea>
                                                <!-- <input class="input--style-4" type="email" name="addtionl_notes"> -->
                                            </div>
                                        <!-- </div> -->
                                        </div>
                                    </div>

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
                        <center class=" mx-auto">
                            <?php echo $_GET['query'] ;?>
                            <input type="hidden" name="patient_id" value="<?php echo $_GET['query'] ;?>">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit_prescription" value="1">Submit</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <!-- <script src="/assets/vendor/jquery/jquery.min.js"></script> -->
    <!-- Vendor JS-->
    <!-- <script src="/assests/vendor/select2/select2.min.js"></script>
    <script src="/assets/vendor/datepicker/moment.min.js"></script>
    <script src="/assets/vendor/datepicker/daterangepicker.js"></script> -->

    <!-- Main JS-->
    <!-- <script src="js/global.js"></script> -->

<!-- </body>This templates was made by Colorlib (https://colorlib.com) -->

<!-- </html> -->
<!-- end document-->

<?php require_once("../footer.php");?>