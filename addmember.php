<?PHP
      
        include('db_connect.php');
        $email = '';
        $password = '';
        $errors = array('email'=>'','password'=>'');
        if(isset($_GET['submit']))
        {
           /* echo htmlspecialchars($_GET['username']);
            echo htmlspecialchars($_GET['password']);*/
            if(empty($_GET['email']))
            {
                 $errors['email'] = '*email is required <br />';
                
            }
            else
            {
                $email = $_GET['email'];
                if(!filter_var($email , FILTER_VALIDATE_EMAIL))
                {
                    
                    $errors['email'] = '*email must be a valid email address';
                }
               /* echo htmlspecialchars($_GET['email']);*/
            }
            
            if(empty($_GET['password']))
            {
                 $errors['password'] = '*password is required <br />';
                
            }
            else
            {
                $password = $_GET['password'];
                /*echo htmlspecialchars($_GET['password']);*/
            }
        }
        if(array_filter($errors))
        {
                       
             echo 'form have error';
          
            
        }
       else
        {
           if(isset($_GET['submit']))
           {
               
               $email = mysqli_real_escape_string($conn , $_GET['email']);
               $password = mysqli_real_escape_string($conn , $_GET['password']);
               $sql = "INSERT INTO users(email,password) VALUES('$email' , '$password')";
               
               if(mysqli_query($conn , $sql))
               {
                   setcookie('Email' , $_GET['email'] , time()+86400);
                   setcookie('Password' , $_GET['password'] , time()+86400);
                   session_start();
                   $array = array(explode('@', $_GET['email']));
                   $_SESSION['username'] = $array[0];
                   echo 'new member saved in Database';
                   header('Location: Home.php');

               }
               else
               {
                 echo 'Query error' . mysqli_error($conn);

               }
            /* header('Location: Home.php');*/
               
           }
             
    
        }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="includes/css/addmemberstyle.css">
  <link href="https://fonts.googleapis.com/css?family=Chela+One|Roboto+Slab" rel="stylesheet">
  <title>ONLINE CLOTHES SHOPPING</title>
    <style>
    
    .container 
{
   margin-top: 70px;
}
/*
body
{
    padding-top: 15px;
}
*/

.container ul li a
{
    font-size: 17px;
    padding: 14px 0;
    text-align: center;
}
.nav-justified
{
    background-color: #eee;
}
.container ul li a:hover
{
  background-color: cornflowerblue;
}
.container .jambotron ul li 
{
    list-style: none;
    position: relative;
   
    
}
.container .jambotron ul li a
{
   
    display: block;
    color: black;
    opacity: 0.3;
    font-size: 100;
    font-family: 'Roboto Slab', serif;
    
}
.container .jambotron ul li a:hover
{
   
   background-color: transparent;
    
}
.jambotron
{
    text-align: center;
    padding-top: 14px;
    background-color: darkgray;
    padding-bottom: 20px;
    margin-bottom: 15px;
}
.jambotron a
{
    color: white;
    text-decoration: none;
    
}
.btn
{
    padding: 15px 22px;
}
.pbtom
{
    padding-bottom: 30px;
}
.led
{
    width: 90%;
    height: 40px;
    border-radius: 7px;
    margin-left: 20px;
    margin-right: 20px;
    outline: none;
}
.lad
{
    width: 90%;
    height: 40px;
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 7px;
    margin-left: 20px;
    margin-right: 20px;
}
 .lad:hover
{
            
 background-color: cornflowerblue;
      
            
 }
input:focus
{
    
    border-color: dodgerblue;
    box-shadow: 0 0 8px 0 dodgerblue;
}
.imagefile
{
    margin-top: 20px;
    margin-left: 470px;
    
}
#canvas
{
    height: 400px;
    width: 400px;
    background: #ececec;
    margin:auto;
    
}
 .modifyform
        {
           padding: 90px; 
        }
    
    
    
    
    </style>

</head>

<body>

  
    <div class="container">
    <div>
    
     <nav>
         <ul class="nav nav-justified">
             <li class="active"><a href="Home.php">Home</a></li>
             <li><a href="services.html">Login</a></li>
         </ul>
     </nav>
    </div>
    
    <div class="jambotron">
        <ul>
    <!--    <li><a href="#" >Register</a> 
        </li>-->
        </ul>
        <div class="modifyform">
        <form method="GET" action="addmember.php">
         <input type="text" placeholder="email" class="led"  name="email" value="<?php echo $email ?>">
            <div class="red-text"><?php echo $errors['email'];?></div>
        <br>
        <input type="password" placeholder="password" class="lad"  name="password" value="<?php echo $password ?>">
            <div class="red-text"><?php echo $errors['password'];?></div>

        <br>
        <!--<p class="btn btn-lg btn-success"  name="submit"  type="submit"><a href="#" >Save</a></p>-->
        <input type="submit" value="submit" class="lad"  name="submit" class="btn brand z-depth-0">
        <p class="btn btn-lg btn-danger"  onclick=""><a href="#">Cancel</a></p>
        
        
        </form>
        </div>

        <br>
        <!--<input type="text" placeholder="Result" class="lad" id="test" name="resultText">-->

    </div>
    
    <div class="row">     
       
    </div>
    <hr class="pbtom">
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

    

</body>

