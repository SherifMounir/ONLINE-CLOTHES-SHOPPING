<?php 
  
  include('db_connect.php');
   session_start();
   if($_SERVER['QUERY_STRING'] == 'noname')
   {
        unset($_SESSION['username']);

   }
   else
   {
        $user = $_SESSION['username'][0] ?? 'Guest';

   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/css/pokemonstyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/pokemonicon.png">
    <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Fjalla+One" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-animation.min.css">
    <link rel="stylesheet" href="includes/css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/includes/js/parallax.js-1.5.0/parallax.min.js"></script>
    <script src="/includes/js/parallax.js-1.5.0/parallax.js"></script>

	<title>ONLINE CLOTHES SHOPPING</title>

	

</head>

<body>
 <nav class="navbar navbar-inverse">
	<div class="container edit">
 
     <div class="container-fluid">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="row pokebkground">
         <!--<div class="col-sm-4 imgpokeheader"><img src="images/pokeball.png" alt=""></div>-->
          <div class="col-sm-8"> <a class="navbar-brand orangelogo" href="#"> ONLINE CLOTHES SHOPPING</a></div>
          
          
      </div>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Products</a></li>         

        <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" >COLLECTION <span class="caret"></span></a>
          <ul id ="login" class="dropdown-menu">
            <div class="row mega-menu modifymenu">
              <div class ="col-md-12 bloginvia"> PANTS </div>
                   <div class="soical-button ">
                          <a href="#" class="btn"><i class="fab"></i> Jeans</a>
                          <a href="#" class="btn"><i class="fab"></i> Shorts</a>
                          <a href="#" class="btn"><i class="fab"></i> Jackets</a>
                          <a href="#" class="btn"><i class="fab"></i> Swimwear</a>
                        
                       <!--<li><a href="#">Action</a></li>
                         <li><a href="#">Another action</a></li>
                         <li><a href="#">Something else here</a></li>
-->
                         <li role="separator" class="divider"></li>
                         <div class ="col-md-12 bloginvia"> SHIRTS </div>
                          
                        <a href="#" class="btn"><i class="fab"></i> Blazers</a>
                          <a href="#" class="btn"><i class="fab"></i> Suits</a>
                          <a href="#" class="btn"><i class="fab"></i> Shirts</a>
                          <a href="#" class="btn"><i class="fab"></i> Jumpers</a>
                       
                         <li role="separator" class="divider"></li>
                         <div class ="col-md-12 bloginvia"> Accessories </div>
                          
                        <a href="#" class="btn"><i class="fab"></i> T-Shirts</a>
                          <a href="#" class="btn"><i class="fab"></i> Cardigans</a>
                          <a href="#" class="btn"><i class="fab"></i> Shoes</a>
                          <a href="#" class="btn"><i class="fab"></i> Sports</a>
                        
                         <li role="separator" class="divider"></li>
                         <div class ="col-md-12 bloginvia"> BAGS </div>
                          
                        <a href="#" class="btn"><i class="fab"></i> Underwear</a>
                          <a href="#" class="btn"><i class="fab"></i> Tops</a>
                          <a href="#" class="btn"><i class="fab"></i> Grooming</a>
                          <a href="#" class="btn"><i class="fab"></i> Polo</a>
                       
                         <li role="separator" class="divider"></li>

                   </div>
               </div>
          </ul>
        </li>
                  <li><a href="#"> <i class="fas fa-shopping-cart"></i> Cart</a></li>

      </ul>
<!--
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
-->
      <ul class="nav navbar-nav navbar-right">
         <li class="usernamemodify">Hello, <?php echo $user; ?></li>
        <li><a href="addmember.php"><i class="fas fa-user"></i> Sign Up</a></li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login
        <span class="caret">
            
        </span></a>
        <ul id ="login" class="dropdown-menu">
           <li>
               <div class="row">
                   <div class ="col-md-12 bloginvia"> LOGIN IN VIA :</div>
                   <div class="soical-button">
                       <a href="#" class="btn btn-fa"><i class="fab fa-facebook-f"></i> Facebook</a>
                       <a href="#" class="btn btn-tw"><i class="fab fa-twitter"></i> Twitter</a>
                   </div>
               </div>
           </li>
            
        </ul>
        </li>
<!--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  	</div>
</nav>
<!--
<div class="modify">
    <h1 >Wait For New Updates</h1>
    <p>New Fectures are Coming</p>
 <button type="button" class="btn btn-danger btn-lg "><i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
 </button>
</div>
-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item">
      <img src="images/force.jpg" alt="First slide">
      <div id="mycontainer" class="container">
          <div class="carousel-caption">
          <h1 class="h2edit">Available In All Stores</h1>
          <p class="pedit">GET EGP 250 FREE ON YOUR ORDER WHEN YOU SPEND EGP 1000 OR MORE</p>
          <p><a class="btn btn-warning btn-lg" href="#">Shop Now</a></p>
      </div>
      </div>
      
    </div>
    <div class="item active">
      <img src="images/group.jpg" alt="Second slide">
     <div id="mycontainer" class="container">
          <div class="carousel-caption">
          <h1 class="h2edit">Available In All Stores</h1>
          <p class="pedit">GET EGP 250 FREE ON YOUR ORDER WHEN YOU SPEND EGP 1000 OR MORE</p>
          <p><a class="btn btn-primary btn-lg" href="#">Shop Now</a></p>
      </div>
      </div>
    </div>
      <div class="item">
      <img src="images/Pablo.jpg" alt="Third slide">
      <div id="mycontainer" class="container">
          <div class="carousel-caption">
          <h1 class="h2edit">Available In All Stores</h1>
          <p class="pedit">GET EGP 250 FREE ON YOUR ORDER WHEN YOU SPEND EGP 1000 OR MORE</p>
          <p><a class="btn btn-danger btn-lg" href="#">Shop Now</a></p>
      </div>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
<div class="container character">
    
    <div class="row">
        <div class="col-lg-4">
            <img src="images/shoz.jpg" alt="NIKE" class="img-circle animated wobble" width="160px" height="140px;">
            <h2>NIKE</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum consequatur minima ab, placeat aspernatur perspiciatis nemo voluptate ducimus, libero dolorem.</p>
             </div>

        <div class="col-lg-4">
            <img src="images/casual.jpg" alt="casual" class="img-circle animated wobble" width="160px" height="140px;">
            <h2>CASUAL</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum consequatur minima ab, placeat aspernatur perspiciatis nemo voluptate ducimus, libero dolorem.</p>
        </div> 

        <div class="col-lg-4">
            <img src="images/addidas.jpg" alt="Oddish" class="img-circle animated wobble" width="160px" height="140px;">
            <h2>ADIDAS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum consequatur minima ab, placeat aspernatur perspiciatis nemo voluptate ducimus, libero dolorem.</p>
        </div>
       

    
</div>
</div>
<hr class="seperate">
     <div class="footer parallax" data-parallax="scroll" data-image-src="images/f1.jpg" data-z-index="1"></div>
 <div class="row content">
     <div class="col-md-7">
          <h2 class="content-heading"> GIANT SALE NOW , GET UP TO <span class="text-muted colorange animated"> 70% OFF !</span></h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, minus quia dolorem quidem veritatis est atque cum ducimus id officiis consequuntur dolore doloremque labore repellat nesciunt fugit! Aperiam molestiae quasi optio, ducimus molestias fuga nobis!</p>
        <p class="btn btn-lg btn-primary "><a class="adjustbtn" href="#">Check This For More Info</a></p>
     </div>
     
     <div class="col-md-5">
         <img src="images/fashion.jpg" alt="fashion" class="img-responsive center-block  infinite pulse"> <!-- animated-->
     </div>
     
     
 </div>
    <div class="footer parallax2" data-parallax="scroll" data-image-src="images/force.jpg" data-z-index="1"></div>
 <hr class="seperate">
 <!--<footer>-->
     <div class="footer">
         <div  id ="login" class="footer-content">
             
         <div class="footer-section about">
             <h1 class="logo-text"><span>ONLINE</span> CLOTHES SHOPPING</h1>
             <p>
               We try to provide you all the Items you need for shopphing. Payment methods are very safe and Secure . Your Feedback help our Busniss to grow so contact us.
            
             </p>
             <div class="contact">
                 <span><i class="fas fa-phone"></i>&nbsp; 123-456-789</span>
                 <span><i class="fas fa-envelope"></i>&nbsp; info@onlineclothesshopping.com</span>
             </div>
             <div class="socials">
                 <a><i class="fab fa-facebook"></i></a>                 
                 <a><i class="fab fa-instagram modifycolorinsta"></i></a>                 
                 <a><i class="fab fa-twitter modifycolortweet"></i></a>                 
                 <a><i class="fab fa-youtube modifycoloryou"></i></a>                 
             </div>
         
         
         </div>
        <div class="footer-section links">
             <h2>Quick Links</h2>
            <br>
            <ul>
            
            <a href="#"><li>New</li></a>
            <a href="#"><li>Team</li></a>
            <a href="#"><li>Events</li></a>
            <a href="#"><li>Galery</li></a>
            
            
            </ul>
         
         
         </div>
             
         <div class="footer-section contact-form">
             
         <h2>Contact us</h2>
             <br>
             <form action="Home.html" method="post">
                 <input type="email" name="email" class="text-input contact-input" placeholder="Your email address....">
                 <textarea class="text-input contact-input modifyinputmsg" name="message" placeholder="Your message...."></textarea>
                  <button type="submit" class="btn btn-big"><i class="fas fa-envelope"></i>Send</button>
             
             </form>
         
         </div>
     
         
         </div>
     
     
     
     </div>
 <p class="pull-right"><i class="far fa-arrow-alt-circle-up"></i> Move Up</p>
 <p>&copy; 2020 FASHION STORE , Inc.<a href="">Terms</a>.<a href="">Conditions</a></p>
 <!--</footer>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
