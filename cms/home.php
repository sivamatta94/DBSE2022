<?php require_once("Includes/DB.php"); ?>
<?php require_once("Includes/Functions.php"); ?>
<?php require_once("Includes/Sessions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <!-- font awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- custom styling --> 
    <link rel="stylesheet" type="text/css" href="Css/home.css">

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
          <a href="home.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">About Us</a>
        </li>
        <li class="nav-item">
          <a href="Blog.php?page=1" class="nav-link">Blog</a>
        </li>
        <li class="nav-item">
          <a href="contactus.php" class="nav-link">Contact Us</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Features</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <form class="form-inline d-none d-sm-block" action="Blog.php">
          <div class="form-group">
          <input class="form-control mr-2" type="text" name="Search" placeholder="Search here"value="">
          <button  class="btn btn-primary" name="SearchButton">Go</button>
          </div>
        </form>
      </ul>
      </div>
    </div>
  </nav>
    <div style="height:10px; background:#27aae1;"></div>
    <!-- design part -->
  	<div class="banner-area">
			<h2>A Micro-blogging platform to <br>stimulate informal learning beyond classrooms</h2>
			<img src="images/banner1.jpg" class="banner-image">
			
		</div>

		<!--<img src="assets/images/imagelogo.png" class="system"-->	
			

		<div class="content-area">
			<div class="wrapper">
				<h1><b><br>ABOUT</b></h1>
				<br>
				<p>Welcome to our microblogging platform!! <br> <br> Blogging is a user-friendly platform that helps  teachers and learners to improve many of their writing skills To educate others, you will improve your writing skills and you will connect with new people. Incorporating micro-blogging into teaching methodologies takes advantage of the theoretical possibilities it offers. Crucial aspects such as developing critical thinking, acquiring knowledge, answering questions from other students, and enabling new mechanisms helps in  developing the skills that must be acquired. The new paradigm and assessment of acquired skills has forced teachers to rethink classical learning objectives.</p>
				
			</div>
			
		</div>
		
	</div>
				
	

	<!-- design part -->
	<section class="design" id="design">
		<div class="container">
			<div class="title">
				<u><h2>Integrating Microblogging in Traditional Teaching</h2></u>
				<br>
				<p>This platform comes across as a tool for communicating classroom announcements,<br> as a way to enable students to reflect on their learning, a chance to get instant feedback from their colleagues, and as the specific tool used to facilitate in-class conversations.<br> The frequent usage of micro-blogging will enhance the ability to change the social dynamics of a classroom, expanding the active learning in classrooms beyond the physical.</p>
			</div>
			
			<!-- for now comments 
			<div class="design-content">
				
				<div class="design-item">
					<div class="design-img">
						<img src="design4.jpg" alt="">
					</div>
				</div>
				
			</div>
			-->

			<div class="wrapper1">
				<img src="assets/images/mainpageimage2.jpg" alt="" class="wrapper1-image">
				<div class="wrapper1-text">
					<h2>Best collaborative experience for active learning</h2>
					<br>
					<h4><i>Your Thoughts,Your Ways.. </i></h4>
				</div>
			</div>

		</div>
	

	</section>






  
    <!-- FOOTER -->
    <footer class="bg-dark text-white">
      <div class="container">
          <div class="row">
             <div class="col">
                  <p class="lead text-center">Theme By | Team 02 | <span id="year"></span> &copy; ----All right Reserved. </p>
               <p class="text-center small"><a style="color: white; text-decoration: none; cursor: pointer;"> 
                This site is Our team project present you all with this micro-blog platform which
                can be implemented in classrooms for encouraging informal learning
                for faster collaboration and knowledge sharing among students.
                By adapting this collaborative paradigm, education systems can evolve
                towards gaining numerous benefits with enhanched problem solving
                skills and interactive active teaching methods.</p>
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
