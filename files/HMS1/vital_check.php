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
    <title>Patient Billing</title>

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
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">BP</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Weight</label>
                                        <input class="input--style-4" type="text" name="weight">
                                    </div>
                            </div>
                            <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">BMI</label>
                                        <input class="input--style-4" type="text" name="bmi">
                                    </div>
                            </div>
                            <div class="input-group">
                                    <label class="label">HIV Status</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected">Select Status</option>
                                            <option>Positive</option>
                                            <option>Negative</option>
                                        </select>
                                    <div class="select-dropdown"></div>
                                </div>
                             </div>
                            <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Cholesterol</label>
                                        <input class="input--style-4" type="text" name="weight">
                                    </div>
                            </div>
                        <div class="input-group">
                                <label class="label">Clinic</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="subject">
                                        <option disabled="disabled" selected="selected">Select Clinic</option>
                                        <option>Optometry</option>
                                        <option>maternity</option>
                                        <option>Psych</option>                                       
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
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