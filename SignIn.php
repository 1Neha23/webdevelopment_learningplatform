<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">      
   <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 
    <link rel="stylesheet" href="css/error.css">
     <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">
    <style>
  	.error{
    	color: red;
        font-style: italic;
        font-size: 20px;
    }
  </style>    
  </head>
  
  <body style="background: url(img/intro-img.svg);">
  

  <form onsubmit="return PassClick();" action="SignIn.php" method="post" id="registration" >
        <?php include('errors.php'); ?>
        <div class="container">
          <div class="row">
            <div class="col l7 offset-l3">
              <div class="card" style="margin-top: 7%; border: tomato 1px solid;">
                <div class="card-action">
                  <h3 >SignIn  <i class=" medium material-icons left">person</i></h3>
                </div>
                <div class="card-content">
                  <div class="input-field" >
                    <input type="text"  id="user" name="username" autocomplete="off"  >
                    <label for=" username"  style="font-size: large;"><i class=" small material-icons">create</i> Enter Username</label>
                  </div>
                 <br>
                  <div class="input-field" >
                    <input type="password"  id="pass" name="password" >
                    <label for=" password"  style="font-size: large;" ><i class=" small material-icons">vpn_key</i> Enter Password</label>
                  </div> 
                  <div class="card-action center" >
                    <h5 style="text-decoration: underline black;">Signin with</h5>
                  

                    
 
                     <a class="login-btn" style="display: inline-block;
            background-color: #E53E3E;
            color: #fff;
            text-decoration: none;
            padding:5px 10px;
            border-radius: 2px;
            border: 1px solid rgba(0, 0, 0, 0.1);">Login with Google</a>
                    
            <br><br>
                    <button type="submit" name="login_user" style="border: 1px solid red ; background-color: transparent;"  
                     class="btn-large waves-effect waves-gray black-text z-depth-3 " id="b1" >
                    <h5>Submit<i class=" large material-icons">lock_open</i></h5></button>
                    <p style="position:absolute;left:30%;color:black;top:3px">Already a member? <a href="SignUp.php">Sign Up</a></p>
                 </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
  </form>

    
  
        
        
        
        
      
      

   
      
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script typ="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <div style="height:400px;"></div>
    
  </body>
</html>
