<?php

$con = mysqli_connect("localhost", "root", "", "hms");
echo("Connected to the HMS dataBase");
if($con->connect_error)die("Fatal Error!");