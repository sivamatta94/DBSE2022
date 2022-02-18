<?php require_once("Includes/DB.php"); ?>
<?php require_once("Includes/Functions.php"); ?>
<?php require_once("Includes/Sessions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/profile.css">
  <title>Blog Page</title>
  <style media="screen">
  .heading{
      font-family: Bitter,Georgia,"Times New Roman",Times,serif;
      font-weight: bold;
       color: #005E90;
  }
  .heading:hover{
    color: #0090DB;
  }
  </style>
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
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="Blog.php?page=1" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="Blog_create_post.php" class="nav-link">Create Post</a>
        </li>
        <li class="nav-item">
          <a href="Blog.php?page=1" class="nav-link">Blog</a>
        </li>
        <li class="nav-item">
          <a href="contactus.php" class="nav-link">Contact Us</a>
        </li>
       
      </ul>
      <ul class="navbar-nav ml-auto">
        <form class="form-inline d-none d-sm-block" action="Blog.php">
          <div class="form-group">
          <input class="form-control mr-2" type="text" name="Search" placeholder="Search here"value="">
          <button  class="btn btn-primary" name="SearchButton">Go</button> 
          <li class="nav-item"><a href="Logout.php" class="nav-link text-danger">
             <i class="fas fa-user-times"></i> Logout</a></li>
          </div>
        </form>
      </ul>
      </div>
    </div>
  </nav>
    <div style="height:10px; background:#27aae1;"></div>
    <br>
    <!-- NAVBAR END -->
    <header>
        <!-- about info with picture -->
       
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card user-card">
                <div class="card-header">
                    <h5>Profile</h5>
                </div>
                <div class="card-block">
                    <div class="user-image">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-radius" alt="User-Profile-Image">
                    </div>
                    <h6 class="f-w-600 m-t-25 m-b-10">Siva Matta</h6>
                    <p class="text-muted">Student: Masters in Digital Engineering </p>
                    <p>Hello, My name is Matta Siva. I am a developer,also being one of the admin member of our team project for this blog.</p>
                   
                   <div class="bg-c-white counter-block m-t-10 p-20">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/mansi.tripathy.3511/"><i class="fab fa-facebook-f"></i></a>
                         <a href="https://www.linkedin.com/in/mansi-tripathy-97334a139/"><i class="fab fa-linkedin"></i></a>
		                  	<a href="https://twitter.com/mansi_django"><i class="fab fa-twitter"></i></a>
			                  <a href="https://elearning.ovgu.de/user/profile.php?id=25007"><i class="far fa-envelope"></i></a>
	  	              </div>

                   </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card user-card">
                <div class="card-header">
                    <h5>Profile</h5>
                </div>
                <div class="card-block">
                    <div class="user-image">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-radius" alt="User-Profile-Image">
                    </div>
                    <h6 class="f-w-600 m-t-25 m-b-10">Madhuri Tawde</h6>
                    <p class="text-muted">Student: Masters in Digital Engineering </p>
                    <p>Hello, My name is Madhuri Tawde. I am a developer,also being one of the admin member of our team project for this blog.</p>
                   
                   <div class="bg-c-white counter-block m-t-10 p-20">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/mansi.tripathy.3511/"><i class="fab fa-facebook-f"></i></a>
                         <a href="https://www.linkedin.com/in/mansi-tripathy-97334a139/"><i class="fab fa-linkedin"></i></a>
		                  	<a href="https://twitter.com/mansi_django"><i class="fab fa-twitter"></i></a>
			                  <a href="https://elearning.ovgu.de/user/profile.php?id=25007"><i class="far fa-envelope"></i></a>
	  	              </div>

                   </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card user-card">
                <div class="card-header">
                    <h5>Profile</h5>
                </div>
                <div class="card-block">
                    <div class="user-image">
                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png" class="img-radius" alt="User-Profile-Image">
                    </div>
                    <h6 class="f-w-600 m-t-25 m-b-10">Mansi Tripathy</h6>
                    <p class="text-muted">Student: Masters in Digital Engineering </p>
                    <p>Hello, My name is Mansi Tripathy. I am a developer,also being one of the admin member of our team project for this blog.</p>
                   
                   <div class="bg-c-white counter-block m-t-10 p-20">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/mansi.tripathy.3511/"><i class="fab fa-facebook-f"></i></a>
                         <a href="https://www.linkedin.com/in/mansi-tripathy-97334a139/"><i class="fab fa-linkedin"></i></a>
		                  	<a href="https://twitter.com/mansi_django"><i class="fab fa-twitter"></i></a>
			                  <a href="https://elearning.ovgu.de/user/profile.php?id=25007"><i class="far fa-envelope"></i></a>
	  	              </div>

                   </div>
                    
                </div>
            </div>
        </div>
	</div>
</div>
	

    </header>
    <br>
  
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
<?php //require_once("footer.php");?> 
