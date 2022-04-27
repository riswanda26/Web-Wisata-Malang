<?php 
	include "connect.php";
	$x = new func_sql;

	session_start();
	
	if (isset($_POST['register']) )
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		//$pass = md5($password);

		if ($sql = $x -> count_data("login", "username = '$username'") ==0) {
			if ($sql = $x -> con()->query("INSERT INTO login values ('$username', '$email', '$password')")) {
				echo "<script type='text/javascript'>alert('register $username sukses'); document.location ='login.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('register $username gagal'); document.location ='signup.php';</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('gunakan username yang lain'); document.location ='signup.php';</script>";
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
      <a id="logo-container"  href="index.php" class="brand-logo"><img width="120" src="logo.png"></a>
      <ul class="right hide-on-med-and-down">
        <li></li>
      </ul>
    </div>
  </nav>
  <br><br><br>
      <div class="container">
    	<div class="row">
    		<form action="" method="POST" class="col s6 push-s3">
      			<div class="row">
      				<div class="center blue darken-1"><div class="white-text"><div><center><h3>SIGNUP</h3></center></div></div></div>
       	 			<div class="input-field col s12">
          				<input id="username" type="text" name="username" class="validate" required>
          				<label for="username" data-error="wrong" data-success="right">Username</label>
        			</div>
        			<div class="input-field col s12">
          				<input id="email" type="email" name="email" class="validate" required>
          				<label for="email" data-error="wrong" data-success="right">email</label>
        			</div>
        			<div class="input-field col s12">
          				<input id="password" type="password" name="password" class="validate" required>
          				<label for="password" data-error="wrong" data-success="right">Password</label>
        			</div>
        			<center><a class="waves-effect waves-light btn blue darken"><input type="submit" name="register" value="signup" /></a></center>
              
        			
      			</div>
    		</form>
  		</div>
  	</div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    </body></html>