<?php require_once("../header.php")?>
    <title>X-ray Requisition</title>
    <script>
        document.querySelector("#bootstrap_file").disabled = true;
    </script>
</head>

<body" >
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4" style="padding-bottom: 1rem !important;">
                <div class="card-body pb-0">
                    <center><h2 class="title mx-auto" >X-ray Requisition</h2></center>
                    <!-- <h3 class="title">Patient Details</h3> -->
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Body Location</label>
                                    <input class="input--style-4" type="text" name="body_location">
                                </div>
                            </div>
                                    <!-- CPT Code -->
                                    <div class="col-2">
                                        <label class="label">Priority</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="priority">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option>High</option>
                                                <option>Meduim</option>
                                                <option>Low</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>

                                    <div class="col-2">
                                            <label class="label">Mobility</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="mobility">
                                                    <option disabled="disabled" selected="selected">Choose option</option>
                                                    <option>Wheel-Chair</option>
                                                    <option>Walking</option>
                                                    <option>Hoist Required</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>

                                        <div class="col-2">
                                                <div class="input-group">
                                                    <label class="label">Patient Category</label>
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="patient_category">
                                                            <option disabled="disabled" selected="selected">Choose option</option>
                                                            <option>NHS</option>
                                                            <option>CAT</option>
                                                            <option>PP</option>
                
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
        
                                </div>

                            <!-- CPT Code -->

                                    <div class="col-12">
                                            <div class="input-group">
                                                <label class="label">Infection Risk</label>
                                                <input class="input--style-4" type="text" name="Infection_risk">
                                            </div>
                                        </div>
                                </div>

                                <center class=" mx-auto">
                                        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                                    </center>

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
    <!-- <s/>cript src="js/global.js"></script> -->

<!-- </body>This templates was made by Colorlib (https://colorlib.com) -->

<!-- </html> -->
<!-- end document-->

<?php require_once("../footer.php")?>