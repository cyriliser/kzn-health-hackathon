<?php include_once("./header.php"); ?>

    <title>Sign Up </title>
</head>
<body>
    
    <!-- Login Form -->
    <form action="./includes/signup.inc.php" method="post">
        <h1>signup</h1>
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="qwerty123">
        </div>

        <div>
            <label for="password-repeat">Password</label>
            <input type="password" name="password-repeat" id="password-repeat" value="qwerty123">
        </div>

        <button type="submit" name="signup-submit" value="1">Sign Up</button>
        <a href="/">Login</a>
    </form>

    
<?php include_once('./footer.php'); ?>