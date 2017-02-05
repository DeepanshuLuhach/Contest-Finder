<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Contest Finder </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <style type="text/css">
    	.navbar 
    	{
        	background: #2f2f2f;
        	opacity: 1;
            color:black;
	    }
	    .top-nav-collapse
	    {
	        background: #000;
            opacity: 1;
	    }
	    @media only screen and (max-width: 768px)
	    {
        	.navbar 
        	{
            	background: #000;
                opacity: 1;
                color:black;
        	}
    	}
content {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
.view 
		{
		    background: url("img/bk.jpg")center fixed;
		    background-size: cover;
		}
    </style>

</head>

<body>
    
    <!-- Start your project here-->

    <header>
    	<nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">
    		<button class="navbar-toggler hidden-sm-up" data-toggle="collapse" data-target="#togg"> <span class="fa fa-bars"> </span> </button>
    		<div class="container">
    			<div class="collapse navbar-toggleable-xs" id="togg">
    				<a class="navbar-brand" href="index.php" style=" font-size:150%"> Contest Finder </a>
    				<ul class="nav navbar-nav" >
    					<li class="nav-item">
                            <a class="nav-link" href="up.php"style="font-size:120%" > Upcoming Contests </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="on.php"style="font-size:120%"> Ongoing Contests </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" style="font-size:120%"> About Me </a>
    				</ul>
    			</div>
    		</div>
    	</nav>
        
    </header>
    <!-- /Start your project here-->

    <div class="content">
    
 <div class="view bg-1 text-center" style="margin-top:7vh;">
  <h3 class="margin"><br><br>Who Am I?</h3>
  <img src="img/me.jpg" class="img-responsive img-circle margin" style="display:inline" alt="DragonFist" width="50%" height="50%">
  <h3>I'm an adventurer. The one in the middle.</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center" >
  <h3 class="margin">What Am I?</h3>
    <p> I am a Second Year IT student from Army Institute of Technology, Pune, India.<br> Also known by name <a href="http://codeforces.com/profile/DragonFist" target="_blank" style="color:cyan;">DragonFist</a> on Codeforces. </p>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Where To Find Me?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="img/git.png" class="img-responsive margin" style="width:100%;height:250px;" alt="Image">
    <a href="https://github.com/DeepanshuLuhach" class="btn btn-primary" role="button" target="_blank">GitHub</a>
    </div>
    <div class="col-sm-4"> 
      <img src="img/codeforces2.png" class="img-responsive margin" style="width:100%;height:250px;" alt="Image">
        <a href="http://codeforces.com/profile/DragonFist" class="btn btn-primary" role="button" target="_blank">Codeforces</a>
    </div>
    <div class="col-sm-4"> 
      <img src="img/fb.jpg" class="img-responsive margin" style="width:100%;height:250px" alt="Image">
        <a href="https://www.facebook.com/deepanshu.luhach" class="btn btn-primary" role="button" target="_blank">Facebook</a>
    </div>
  </div>
</div>
    
</div>  
   

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Made By Deepanshu Luhach aka DragonFist</p> 
</footer>

</body>

</html>