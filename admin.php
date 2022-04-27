<?php
    session_start();
?>

<!DOCTYPE html>

<head>
	
  <title>ATASIWMALANG</title>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
  <div class="navbar-fixed">
 
    <nav class="blue darken-2" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container"  class="brand-logo"><img width="120" src="logo.png"></a>
      <ul class="right hide-on-med-and-down">
        <?php
				if(isset($_SESSION['username']))
				{?>
                     <li><a href="index.php?p=home">BERANDA</a></li>
					<li><a href="index.php?p=pantai">WISATA PANTAI</a></li>
					<li><a href="index.php?p=gunung">WISATA GUNUNG</a></li>
					<li><a href="index.php?p=edukasi">WISATA EDUKASI</a></li>
					<li><a href="index.php?p=air">WISATA AIR</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
                <?php
				}
				else
				{?>
				    <li><a href="index.php?p=home">BERANDA</a></li>
					<li><a href="index.php?p=pantai">WISATA PANTAI</a></li>
					<li><a href="index.php?p=gunung">WISATA GUNUNG</a></li>
					<li><a href="index.php?p=edukasi">WISATA EDUKASI</a></li>
					<li><a href="index.php?p=air">WISATA AIR</a></li>
					<li><a href="login.php">LOGIN</a></li>
				<?php
				}
				?>

        
      </ul>
      <ul id="nav-mobile" class="side-nav">
         <?php
            if(isset($_SESSION['username']))
            {?>
                <li>
                    <div class="userView">
                        <img class="background" src="ngliyep.jpg">
                        <img class="circle" src="musiumangkt.jpg">
                        <span class="white-text name" style="font-weight : bold">Welcome <?php echo $_SESSION['username'];?> </span>
                        <span class="white-text email" style="font-weight : bold">UserEmail@gmail.com</span>
                    </div>
                </li>
                <li><a href="logout.php"><img src="img/ic_sentiment_very_satisfied_black_18dp.png"> Logout</a></li>
            <?php
            }
            else
            {?>
                <li>
                    <div class="userView">
                        <img class="background" src="img/background3.jpg">
                        <img class="circle" src="img/background2.jpg">
                        <br>
                        <br>
                    </div>
                </li>
                <li><a href="login.php"><img src="ic_sentiment_very_satisfied_black_18dp.png"> Login</a></li>
                <li><a href="signup.php"><img src="ic_sentiment_very_satisfied_black_18dp.png"> Signup</a></li>
            <?php
            }
            ?>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">
        <img src="img/ic_menu_black_36dp.png">
      </i></a>
    </div>
    </nav>
  </div>

  <!-- dashboard admin -->
  <div class="container col s12 m3"><br/><br/>
              <h3 class="center">Admin Dashboard</h3>
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <center><div class="collapsible-header">M E N U</div></center>
                    <br>
                    <br>
                    <center><div class="container col s10 waves-effect btn blue darken-1" href="#!">PENGATURAN DATA</div></center>
                    <br>
                    <br>
                    <center><div class="container col s10 waves-effect btn blue darken-1" href="#!">TEMPAT WISATA</div></center>
                    <br>
                    <br>
                    <center><div class="container col s10 waves-effect btn blue darken-1" href="#!">DATA DITERIMA</div></center>
                    <br>
                    <br>
                    <center><div class="container col s10 waves-effect btn blue darken-1" href="#!">DATA TERKIRIM</div></center>
                    <br>
                    <br>
                    
                  
                </li>
                
      </ul>
    </div>
    
    <!--Kotak-->
   
        <center>
    <div class="row">
    <div class="col l3 s6 m3">
          <div class="card sticky-action hoverable">
            <div class="card-image waves-effect waves-block waves-light">
             <a href="#diengtravel"> <img class="activator" src="dieng.jpg"></a>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Dieng Travel</span><br>
            </div>

          </div>
        </div>
        
        <div class="col l3 s6 m4">
          <div class="card sticky-action hoverable">
          
            <div class="card-image waves-effect waves-block waves-light">
                <a href="#bankbri"> <img class="activator" src="bri.jpg"></a>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"> Bank BRI </span><br>
            </div>  
          </div>
        </div>
                <div class="col l3 s6 m4">
          <div class="card sticky-action hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                <a href="#bankbni"> <img class="activator" src="bni.jpg"></a>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"> Bank BNI </span><br>
            </div>  
          </div>
        </div>
         
        <div class="col l3 s6 m4">
          <div class="card sticky-action hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                <a href="#bankbca"> <img class="activator" src="bca.jpg"></a>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"> Bank BCA </span><br>
            </div>  
          </div>
        </div>
        
        
        </div>
            </center>
    
  <!-- footer -->
    <footer class="page-footer blue darken-2">
          <div class="container">
            <div class="row">
              <div class="col l4 offset-6 s6">
                <ul>
				<li><a class="brand-logo"><img width="200" src="logo.png"></a></li>
                  
                  
                </ul>
              </div>
              <div class="col l4 offset-6 s6">
                <h5 class="white-text">Kontak Kami</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Malang - Universitas Negeri Malang</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">(+62)85-11269912</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">atasiwmalang@gmail.com</a></li>
                </ul>
              </div>
              <div class="col l4 offset-6 s6">
                <h5 class="white-text">Tentang Kami</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Berita</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Wisata Terbaru</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Wisata Terpopuler</a>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <center>Copyright © 2017 | Teknik Informatika UM. Panca - Poppy - Pundhi - Riswanda - Siti</center>
            </div>
          </div>
    </footer>

  <!--  Scripts-->
  <script src="js/jquery.js"></script>
  <script src="js/init.js"></script>
  <script src="js/materialize.js"></script>
         
</body>
</html>