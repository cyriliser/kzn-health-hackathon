<?php include_once("./header.php"); ?>

    <title>Log In</title>
</head>
<body style="background-color:#fff !important;">

    <main>
        <div class="limiter">
            <div class="container-login100" style="background-color:#f0f5f1 !important;">
                <!-- // after sign up -->
                <?php
                    if (isset($_GET['signup']) and $_GET['signup'] == "success" ) {
                        echo "<div class=\"alert alert-success\" role=\"alert\">
                                successfully signed up please Login
                            </div>";
                    }
                ?>

                <?php if (!isset($_SESSION['userId'])) { ?>

                    <!-- login form -->
                    <div class="wrap-login100">
                        <form action="includes/login.inc.php" method="POST" class="login100-form validate-form">
                            <span class="login100-form-title p-b-34">
                                Login
                            </span>
                            
                            <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type Persal Number">
                                <input class="input100" type="text" name="username_email" id="username_email" placeholder="Username / Email" value="thato">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                                <input class="input100" type="password" name="password" id="password" placeholder="Password" value="qwerty123">
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="container-login100-form-btn">
                                <button type="submit" class="btn btn-primary btn-lg" name="login-submit" value="1">Log in</button>
                            </div>

                            <div class="w-full text-center p-t-27 p-b-239">
                                <span class="txt1">
                                    Forgot
                                </span>

                                <a href="#" class="txt2">
                                    Password?
                                </a>
                            </div>

                        </form>

                        <div class="login100-mor px-5 my-auto" style="background-color: #ffff !important;">
                            <img  class="ml-5 my-auto" src="/assets/images/logo.jpg" style="object-fit: cover;" alt="" >
                            <div class="border border-top-0 border-left-0 border-right-0 border-dark">
                                <h1 class="font-weight-bold" style="color: green">health</h1></div>
                                <h2 >Department:</h2>
                                <h2>Health:</h2>
                                <h2 class="font-weight-bold">PROVINCE OF KWAZULU NATAL</h2>

                            

                            <h2></h2>
                        </div>
                    </div>

                <?php }else { ?>
                    <div class="container px-auto">
                        <!-- LogOut Form -->
                        <form class="row" action="./includes/logout.inc.php" method="post">
                            <div class="form-group mx-auto">
                                <button class="btn btn-warning" type="submit" name="logout-submit" value="1">Log Out</button>
                            </div>

                            <!-- <div class="form-group mx-auto">
                                <a class="btn btn-secondary" href="signup.php">signup</a>
                            </div> -->
                        </form>
                        <!-- alert -->
                        <div class="row">
                            <div class="alert alert-success mx-auto" role="alert">
                                successfully signed in
                            </div>
                        </div>

                        <!-- dashboard btn -->
                        <?php
                            switch ($loggedInUser['type']) {
                                case "admin":
                                    $dashboard_url = "/it_admin/index.php";
                                    break;
                                case "nurse":
                                    $dashboard_url = "/nurse/index.php";
                                    break;
                                case "doctor":
                                    $dashboard_url = "/doctor/index.php";
                                    break;
                                case "clerk":
                                    $dashboard_url = "/clerk/index.php";
                                    break;
                                case "pharmacist":
                                    $dashboard_url = "/pharmacist/index.php";
                                    break;
                                case "xray":
                                    $dashboard_url = "/xray-tech/index.php";
                                    break;
                                // case "xra":
                                //     $dashboard_url = "/doctor/index.php";
                                //     break;
                                default:
                                    $dashboard_url = "/";
                                    break;
                            }
                        ?>
                        <div class="row">
                            <a href="<?php echo $dashboard_url; ?>" class="btn btn-primary mx-auto">DashBoard</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </main>

    
<?php include_once('./footer.php'); ?>