<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ShuvoBibaho| A Trustable Wedding Planning Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="boot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="swiper.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<?php
session_start();
$dBServername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="ip";
$conn=mysqli_connect($dBServername,$dBUsername,$dBPassword,$dBName);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
$userprofile=$_SESSION['user_name'];
if($userprofile==true)
{
    //echo "<p align=center>Welcome .$_SESSION['user_name']</p>"
    echo "Welcome ".$_SESSION['user_name'];
    
    $sqlSelect="Select * FROM customer WHERE username='$userprofile'";
   
    $records=mysqli_query($conn,$sqlSelect);
    $count=mysqli_num_rows($records);
    if($count==1)
    {
       $field=mysqli_fetch_array($records);
       $_SESSION['username']=$field['username'];
       $_SESSION['emailid']=$field['emailid'];
       $_SESSION['phonenumber']=$field['phonenumber'];
       $_SESSION['password']=$field['password'];
       $_SESSION['cpassword']=$field['cpassword'];
     
       //echo"<script language=Javascript>document.location.href=''</script>";
        
    }
    /*else
    {
        echo"nooo";
    }
    */
    
}
else{
  header('location:mhome.php');
}



$sql="SELECT * from customer WHERE username='$userprofile'";

$result=mysqli_query($conn,$sql);
$result1=mysqli_fetch_assoc($result);
?>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
        <img src="logo-modified.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                  <a class="dropdown-item" href="healthtips.php">Health Tips</a>
                  <a class="dropdown-item" href="makupblog.php">Makeup Guides</a>
                  <a class="dropdown-item" href="aos.php">Menu Idea</a>
                </div>
            </li>
          

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Vendor
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                  <a class="dropdown-item" href="photographer.php">Photographer</a>
                  <a class="dropdown-item" href="mvenue.php">Venues</a>
                  <a class="dropdown-item" href="mart.php">Makeup Artist</a>
                  <a class="dropdown-item" href="eventplanner.php">Event Manager</a>
                
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="clientreview.php">Client Review</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pofile1.php">Your Profile</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="mhome.php">Logout</a>
            </li>
           
            
          </ul>
         
        </div>
      </div>
      </nav>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="g8.jpg"class="d-block w-100"  alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animated bounceInRight" style="animation-delay: 1s">Latest Sabyasachi Bridal Lehengas 2020</h5>
                <p class="animated bounceInLeft" style="animation-delay: 2s">Fulfill Your Dreams By Wearing a Sabyasachi Lehenga.....</p>
                <p class="animated bounceInRight" style="animation-delay: 3s"> <a href="trend.html">More Info</a></p>
             </div>
          </div>
          <div class="carousel-item">
            <img src="b6.jpg"class="d-block w-100"  alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animated bounceInRight" style="animation-delay: 1s">Top Royal Wedding Outfits 2020</h5>
                <p class="animated bounceInLeft" style="animation-delay: 2s">These Royal Wedding Outfits Are Something Every Bride Has An Eye On.....</p>
                <p class="animated bounceInRight" style="animation-delay: 3s"><a href="trend1.html">More Info</a></p>
             </div>
          </div>
          <div class="carousel-item">
            <img src="b7.jpg"class="d-block w-100"  alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animated bounceInRight" style="animation-delay: 1s">Best Bridal Jwelley Collection 2020</h5>
                <p class="animated bounceInLeft" style="animation-delay: 2s">Gorgeous Wedding Jwellery Worn By Our Beautiful Brides.....</p>
                <p class="animated bounceInRight" style="animation-delay: 3s"><a href="trend1.html">More Info</a></p>
             </div>
          </div>
          <div class="carousel-item">
            <img src="b9.jpg"class="d-block w-100"  alt="Forth slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animated bounceInRight" style="animation-delay: 1s">Wedding Moments 2020</h5>
                <p class="animated bounceInLeft" style="animation-delay: 2s">Brides Going Through An Emotional Ride</p>
                <p class="animated bounceInRight" style="animation-delay: 3s"><a href="trend1.html">More Info</a></p>
             </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

   
    <div class="parallax"></div>

        <div class="about">
            <h1>About Us..</h1>

                Planning your wedding, whether you have two years or three months to do it, 
                can be stressful. If like us, you make endless lists in your head (or on a scrap of paper) 
                only to forget them minutes later, then our Ultimate Wedding Checklist is for you. 
                A step-by-step wedding planning timeline of all the main things you need to do to pull off a fabulous wedding day.
                Wedding planning can be daunting; doing research, managing a budget, and working out what to do when. 
                So we created a full downloadable list of all the essential things you will need to do, from finding 
                a wedding venue to going dress shopping, and planning a honeymoon to organising the RSVP list.
        </div>

     <div class="caption">
         <h1>Some of our Beautiful clients</h1>
    </div>
     <div class="main">
        <div class="cards">
            <div class="image">
                <img src="sa.png">
    
            </div>  
            
            <div class="title">
                <h3>SIAM AND ABONTEE'S WEDDING</h3>
    
            </div>
            <div class="des">
                <span class="text1">SHUBHO BIBAHO, </span>
                <span class="text2">12 OCTOBER 2019 </span><br>
                <a href="sialbum.html" class="btn btn-outline-secondary">See More</a>
                
            </div>
        </div>
    
        <div class="cards">
            <div class="image">
                <img src="g3.jpg">
    
            </div>  
            
            <div class="title">
                <h3>TURJO AND ADHORA'S WEDDING</h3>
    
            </div>
            <div class="des">
                <span class="text1">SHUBHO BIBAHO, </span>
                <span class="text2">27 FEBRUARY 2020</span><br>
                <a href="taalbum.html" class="btn btn-outline-secondary">See More</a>
                
            </div>
        </div>
    
        <div class="cards">
            <div class="image">
                <img src="g4.jpg">
    
            </div>  
            
            <div class="title">
                <h3>AMAAN AND MUNTAA'S WEDDING</h3>
    
    
            </div>
            <div class="des">
                <span class="text1">SHUBHO BIBAHO, </span>
                <span class="text2">12 MARCH 2020 </span><br>
                <a href="aaalbum.html" class="btn btn-outline-secondary">See More</a>
                
            </div>
        </div>
    </div>
    
    <div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h1>Connect With Us</h1>
			</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
  
      
</body>
</html>