<?php
  require_once("../header.php");
?>
</head>
<body>

  <?php
  if (isset($_GET['query'])) {
    search_patient($_GET['query']);
    // $query = $_GET['query']; 
    // // gets value sent over search form
     
    // $min_length = 3;
    // // you can set minimum length of the query if you want
     
    // if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
    //     $query = htmlspecialchars($query); 
    //     // changes characters used in html to their equivalents, for example: < to &gt;
        
    //     $query = mysqli_real_escape_string($conn, $query);
    //     // makes sure nobody uses SQL injection
         
    //     $raw_results = mysqli_query($conn, "SELECT * FROM patient
    //         WHERE (`Id_No` LIKE '%".$query."%') OR (`PatientNo` LIKE '%".$query."%')") or die(mysqli_error($conn));
             
    //     // * means that it selects all fields, you can also write: `id`, `title`, `text`
    //     // articles is the name of our table
         
    //     // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
    //     // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
    //     // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
    //     if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
    //         while($results = mysqli_fetch_array($raw_results)){
    //         // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
    //             $patient_details = $results;
    //             $_SESSION["lastPatient"] = $patient_details['id'];
    //             // echo "<a href='vital_check.php'><p><h3>".$results['Fname']." ".$results['Lname']." ".$results['Id_No']."</h3></p></a>";
    //             // posts results gotten from database(title and text) you can also show id ($results['id'])
    //         }
             
    //     }
    //     else{ // if there is no matching rows do following
    //         $error =  "No results found with patient ID";
    //     }
         
    // }
    // else{ // if query length is less than minimum
    //   $error = "Identity or Patient Number is incomplete";
    // }
  }    

?>

    <div class="s003 d-flex flex-column">
      
      <?php
        if (isset($error)) {
          echo "
          <div class=\"alert alert-danger\" role=\"alert\">
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

      <!-- patient Details -->
      <?php 

        if (isset($patient_details)) {
          ?>

            <div class="card mt-5">
                <div class="card-header d-flex flex-column justify-content-around w-100">
                    <h2 class="mx-auto mb-4">Patient Details</h2>
                    <div class="row">
                      <small class="mx-2"><a href="/nurse/vital_check.php" class="btn btn-sm btn-primary">Record Vitals</a></small>
                      <small class="mx-2"><a href="/nurse/admission.php" class="btn btn-sm btn-primary">Admit Patient</a></small>
                    </div>
                </div>
                <div class="card-body p-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Name: </p>"." ".$patient_details['Fname']." ".$patient_details['Mname'])?></li>
                        <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Surname: </p>"." ".$patient_details['Lname'])?></li>
                        <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>Patient Number: </p>"." ".$patient_details['PatientNo'])?></li>
                        <li class="list-group-item"><?php echo("<p style='font-weight: bold; display: inline-block'>ID Number: </p>"." ".$patient_details['Id_No'])?></li>
                        <li class="list-group-item">Other Basic Info About Patient</li>
                    </ul>
                </div>
            </div>

          <?php
        }
      ?>
    </div>

    <script src="js/extention/choices.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>

  </body>
</html>
