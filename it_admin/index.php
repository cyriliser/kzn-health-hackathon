<?php require_once("../header.php") ?>

<?php
    if (!$loggedInUser['type'] == "admin") {
        // echo $loggedInUser['type'];
        header("location: ../index.php?error=notauthorised");
    }
?>

</head>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4" style="padding-bottom: 1rem !important;">
                    <!-- // after sign up -->
                    <?php
                    if (isset($_GET['signup']) and $_GET['signup'] == "success" ) {
                        echo "<div class=\"alert alert-success\" role=\"alert\">
                                successfully added user and email sent with credentials
                            </div>";
                    }
                    ?>

                <a href="/" class="btn btn-primary my-3" >
                Home
                </a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add Staff Member
                </button>

                <!-- Modal -->
                <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="/includes/signup.inc.php" method="post">
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Username</label>
                                <input name="username" type="text" class="form-control" id="formGroupExampleInput" placeholder="username/doctorNo/nurseNo">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Email</label>
                                <input name="email" type="email" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Password</label>
                                <div class="input-group">
                                <input type="password" id="password" name="password" value="qwerty123" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button">Generate Random</button>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Job Title</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" value="doctor" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Doctor</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" value="nurse" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Nurse</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio" value="pharmacist" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Pharmacist</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="customRadio" value="xray" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4">Xray Technician</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio5" name="customRadio" value="clerk" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio5">Clerk</label>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="customRadio" value="doctor">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button name="add_user_submit" value="1" type="submit" class="btn btn-primary">Add</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>

<?php require_once("../footer.php");?>
