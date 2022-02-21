<?php require_once("Includes/DB.php"); ?>
<?php require_once("Includes/Functions.php"); ?>
<?php require_once("Includes/Sessions.php"); ?>
<?php
if(isset($_REQUEST["submit"]))

{
  $Lname           = $_REQUEST["Lname"];
  $UserName        = $_REQUEST["username"];
  $fname           = $_REQUEST["fname"];
  $email           = $_REQUEST["email"];
  $Password        = $_REQUEST["password"];
  $ConfirmPassword = $_REQUEST["confirmpassword"];
 
  if(empty($fname)||empty($Lname)||empty($UserName)||empty($email)||empty($Password)||empty($ConfirmPassword)){
    $_SESSION["ErrorMessage"]= "All fields must be filled out";
    Redirect_to("register.php");
  }elseif (strlen($Password)<4) {
    $_SESSION["ErrorMessage"]= "Password should be greater than 3 characters";
    Redirect_to("register.php");
  }elseif ($Password !== $ConfirmPassword) {
    $_SESSION["ErrorMessage"]= "Password and Confirm Password should match";
    Redirect_to("register.php");
  }elseif (CheckUserNameExistsOrNot($UserName)) {
    $_SESSION["ErrorMessage"]= "Username Exists. Try Another One! ";
    Redirect_to("register.php");
  }else{
    // Query to insert registration in DB When everything is fine
    //global $ConnectingDB;
    $sql="INSERT INTO users (fname,Lname,username,email,password)VALUES('$fname','$Lname','$UserName','$email','$Password')";
    //mysqli_query($ConnectingDB, $sql);
    $result = $ConnectingDB->query($sql);
    $_SESSION["SuccessMessage"]="New user is registered Successfully ";
    Redirect_to("login.php");
		/*if ($ConnectingDB->query($sql) === TRUE) 
    //if (!(mysqli_query($ConnectingDB, $sql)))
   {
      //echo "New record created successfully";
      Redirect_to("login.php");
    } */
   /* else 
    {
       echo "Error: " . $sql . "<br>" . $ConnectingDB->error;
    }*/
   /* $sql = "INSERT INTO users(fname,Lname,username,email,password)";
    $sql .= "VALUES(:fname,:Lname,:username,:email,:password)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':fname',$fname);
    $stmt->bindValue(':Lname',$Lname);
    $stmt->bindValue(':username',$username);
    $stmt->bindValue(':email',$email);
    $stmt->bindValue(':password',$Password);
    $Execute=$stmt->execute();
    if($Execute){*/
    /*if (mysqli_num_rows($insert) > 0) {
      //echo "inserted";
      $_SESSION["SuccessMessage"]="New user is registeres ";
      Redirect_to("login.php");
    }else {
      //echo "not inserted";
      $_SESSION["ErrorMessage"]= "Something went wrong. Try Again !";
      Redirect_to("register.php");
    }*/
  }
} //Ending of Submit Button If-Condition
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/Styles.css">
  <title>Register</title>
</head>
<body>
  <!-- NAVBAR -->
  <div style="height:10px; background:#27aae1;"></div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="#" class="navbar-brand"> Team02 Blog</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarcollapseCMS">
      </div>
    </div>
  </nav>
    <div style="height:10px; background:#27aae1;"></div>
    <!-- NAVBAR END -->
    <!-- HEADER -->
    <header class="bg-dark text-white py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER END -->
    <!-- Main Area Start -->
    <section class="container py-2 mb-4">
    <div class="container">
    <div class="row">
    <?php
       echo ErrorMessage();
       echo SuccessMessage();
       ?>
        <div class="col-md-6 offset-md-3">
            <div class="signup-form">
                <form action="" class="mt-5 border p-4 bg-light shadow">
                    <h4 class="mb-5 text-secondary">Create Your Account</h4>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label>First Name<span class="text-danger">*</span></label>
                            <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label>Last Name<span class="text-danger">*</span></label>
                            <input type="text" name="Lname" class="form-control" placeholder="Enter Last Name">
                        </div>
                        <div class="mb-3 col-md-12">
                            <label>username<span class="text-danger">*</span></label>
                            <input type="text" name="username" class="form-control" placeholder="User Name">
                        </div>
                        <div class="mb-3 col-md-12">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="mb-3 col-md-12">
                            <label>Password<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="mb-3 col-md-12">
                            <label>Confirm Password<span class="text-danger">*</span></label>
                            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="col-md-12">
                           <button class="btn btn-primary float-end" type="submit" name="submit">Signup Now</button>
                        </div>
                    </div>
                </form>
                <p class="text-center mt-3 text-secondary">If you have account, Please <a href="login.php">Login Now</a></p>
            </div>
        </div>
    </div>
</div>
    </section>
    <!-- Main Area End -->
    <!-- FOOTER -->
    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row">
        <div class="col">
          <p class="lead text-center">Theme By | Team 02 | <span id="year"></span> &copy; ----All right Reserved.
          </p>
          <p class="text-center small"><a style="color: white; text-decoration: none; cursor: pointer;"> This site is
              Our team project present you all with this micro-blog platform which
              can be implemented in classrooms for encouraging informal learning
              for faster collaboration and knowledge sharing among students.
              By adapting this collaborative paradigm, education systems can evolve
              towards gaining numerous benefits with enhanched problem solving
              skills and interactive active teaching methods.
        </div>
         </div>
      </div>
    </footer>
        <div style="height:10px; background:#27aae1;"></div>
    <!-- FOOTER END-->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
  $('#year').text(new Date().getFullYear());
</script>
</body>
</html>
