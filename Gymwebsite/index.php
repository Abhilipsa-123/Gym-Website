<!DOCTYPE html>
<html>
<head>
	<title>GYM WEBSITE</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
 
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Abhi Gym</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>


      <li class="nav-item">
        <a class="nav-link " href="#Contact">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="Gym">
  <h1>Join the best Gym</h1>
  <form action="user1.php" method="POST">
  <div class="form-group">
          <input type="text" name="name"id="name"placeholder="enter your name">
          <p id="p1"></p>
        </div>
        <div class="form-group">
          <input type="text" name="age"id="age"placeholder="enter your age">
          <p id="p2"></p>
        </div>
        <div class="form-group">
          <input type="text" name="gender"id="gender"placeholder="enter your gender">
          <p id="p3"></p>
        </div>
        <div class="form-group">
          <input type="text" name="locality"id="locality"placeholder="enter your locality">
          <p id="p4"></p>
        </div>
        <button class="btn">submit</button>
   </form>
  <div class="py-5">
    <h3 class="text-center">About Us</h3>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="https://thumbs.dreamstime.com/b/metal-dumbbell-gym-background-d-rendering-78457398.jpg"  class="img-fluid aboutimg"> 
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">Abhi Gym</h2> 
      <p class="py-3">< dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. </p>
      <a href="about.php" class="btn btn-success"> Check More</a>
    </div>
  </div>
</div>
<div class="py-5">
  <h2 class="text-center" id="Contact">Contact Us</h2>
</div>

<form action="user.php" method="POST">
  <div class="form-group">
          <input type="text" name="user"class="form-control"placeholder="Username">
        </div>
        <div class="form-group">
          <input type="text" name="email"class="form-control"placeholder="Email id">
        </div>
        <div class="form-group">
          <input type="text" name="mobile"class="form-control"placeholder="Mobile Number">
        </div>
        
        <button class="btn">submit</button>
   </form>




</div>
<footer>
  <p class="p-3 bg-dark text-white text-center" >@abhigym123</p>
</footer>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
