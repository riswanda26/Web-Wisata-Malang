<?php
        session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>ATASIW MALANG</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div>
		<div class="header">
			
		</div>
		<nav  role="navigation" class="blue darken-2">
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
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>	
		</nav>
	</div>
    <!--panggil konten lain-->  
	<div>
  <!--home page-->
    <?php 
      $pages_dir = 'pages';
      if(!empty($_GET['p'])) {
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);

        $p = $_GET['p'];
        if(in_array($p.'.php', $pages)){
          include($pages_dir.'/'.$p.'.php');
        } else {
          echo 'Halaman tidak ditemukan! T_T';
        }
      } else {
        include($pages_dir.'/home.php');
      }
    ?>
  </div>
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
  	<script type="text/javascript" src="js/jquery.js"></script>
	  <script src="js/materialize.js"></script>
	  <script src="js/init.js"></script>
	  <script src="js/slider1.js"></script>
      <script src="js/sliderplugin.js"></script>
        
        </body>
</html>