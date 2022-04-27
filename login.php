<?php
    include "connect.php";
    $x = new func_sql;

    session_start();
	if(isset($_SESSION['username'])!="")
	{
		header("Location:index.php");
	}

    if(isset($_POST['username']) and isset($_POST['password']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        //$pass= md5($password);
        
        $res=$x-> con()-> query("SELECT * FROM `login` WHERE username='$username' and password='$password'");

        if($res->fetch(PDO::FETCH_ASSOC) !=0)
        {
           $_SESSION['username']=$username;
            if ($_SESSION['username']=='admin')
            {
                echo "<script type='text/javascript'> document.location ='admin.php';</script>";
            }
            else
            {
                echo "<script type='text/javascript'> document.location ='index.php';</script>";
                
            }
		}
		else
		{
			echo "Incorect Email or Password";
		}
        
        }
    ?>


<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <nav class="blue darken-2" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><img width="120" src="logo.png"></a>
      <ul class="right hide-on-med-and-down">
        <li></li>
      </ul>
    </div>
  </nav>
  <br>
  <br>
  <br>
      <div class="container">
    	<div class="row">
    		<form action="" method="POST" class="col s6 push-s3">
      			<div class="row">
      				<div class="center blue darken-1"><h2 class="center white-text"><strong>LOGIN</strong></h2></div>
       	 			<div class="input-field col s12">
          				<input id="username" type="text" name="username" class="validate" required>
          				<label for="username" data-error="wrong" data-success="right">Username</label>
        			</div>
        			<div class="input-field col s12">
          				<input id="password" type="password" name="password" class="validate" required>
          				<label for="password" data-error="wrong" data-success="right">Password</label>
        			</div>
              <center>
                <a class="waves-effect waves-light btn blue darken-1"><input type="submit" name="submit" value="Login" /></a>
                <center><p class="center black-text"> Not Registered ? <a href="signup.php">Sign Up Now</a></p></center>
              
              </center>
        			
      			</div>
    		</form>
  		</div>
  	</div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    </body></html>