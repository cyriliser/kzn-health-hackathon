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
                <div class="d-flex justify-content-around">
                    <a href="/nurse/admission.php" class="btn btn-primary mx-auto my-auto">Admit Patient</a>
                    <a href="/nurse/vital_check.php" class="btn btn-primary mx-auto my-auto">Take Vitals</a>
                </div>
            </div>
        </div>
    </div>

<?php require_once("../footer.php");?>
