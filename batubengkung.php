<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	
  <title>Batu Bengkung</title>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link rel="stylesheet" type="text/css" href="css/slideshow.css">
</head>
<body>
 <div class="navbar-fixed">
		<div class="header">
			
		</div>
		<nav  role="navigation" class="blue darken-2">
			<div class="nav-wrapper container">
				<a id="logo-container"  class="brand-logo"><img width="120" src="logo.png"></a>
			<ul class="right hide-on-med-and-down">
				    <li><a href="index.php?p=home">BERANDA</a></li>
					<li><a href="index.php?p=pantai">WISATA PANTAI</a></li>
					<li><a href="index.php?p=gunung">WISATA GUNUNG</a></li>
					<li><a href="index.php?p=edukasi">WISATA EDUKASI</a></li>
					<li><a href="index.php?p=air">WISATA AIR</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
           
			</ul>
            <ul id="nav-mobile" class="side-nav">
                  
					<li><a href="index.php?p=home">BERANDA</a></li>
					<li><a href="index.php?p=pantai">WISATA PANTAI</a></li>
					<li><a href="index.php?p=gunung">WISATA GUNUNG</a></li>
					<li><a href="index.php?p=edukasi">WISATA EDUKASI</a></li>
					<li><a href="index.php?p=air">WISATA AIR</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
                
            </ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>	
		</nav>
	</div>
  <!-- qwertyuio -->
  <!-- banner -->
  <div id="index-banner">
    <div class="section no-pad-bot" >
      <div class="container">
        <h2 class="center blue-text"><strong> PANTAI BATU BENGKUNG </strong></h2>
        <!-- gambar pantai -->
		<center><img src="gambar/new/Pantai/batubengkung.jpg"></center>
        <!-- end gambar -->
      </div>
    </div>
  </div>
  <!-- end banner -->
  <br><br>
  <!-- tabs -->
  <div class="row" id="tab1" class="scrollspy">
    <div class="container">
      
      <div id="hal1" class="col s12">
        <div class="container">
          <h3 class="blue-text center">INFO WISATA</h3>
            <p align="center">
		  <br>- J A T I M  P A R K  2 -</p>
		  <p align="justify">
			Pantai Batu Bengkung terletak di desa Gajah Rejo Kabupaten Malang. Pantai Batu Bengkung memiliki keunikan tersendiri dibanding Pandai lainnya di Malang, yaitu terdapat sebuah cekungan karang alami karena tergerus oleh ombak. Sehingga, pada cekungan tersebut terisi air laut yang bisa digunakan untuk berenang dan aman dari ombak karena tertutup oleh karang.
		  </p>
           <p align="center">Info Harga Tiket dan Fasisilitas
		  <br>Harga Weekend   : Rp.5.000
		  <br>Harga Weekday   : Rp.5.000
		  <br>Persewaan Tenda : Rp. 50.000/tenda
		  <br>Persewaan Travel: Rp. 500.000/10 orang
		  <br>
            </p>
        </div>
      </div>
	</div>
	</div>
	 
      <div id="hal2" class="col s12">
        <div class="row">
          <div class="container">
            <h3 class="blue-text center">BUY FORM</h3>
            <h5 fclass="center light flow-text"><center>Isilah form di bawah ini untuk melakukan pemesanan</center> </h5>
            <div class="container">
              <div class="row">
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="col s6 push-s3">
                  <div class="row">
                    <div><center><h3></h3></center></div>
                      <div class="input-field col s12">
                        <input id="Name" type="text" name="Name" class="validate" required>
                        <label for="Name" data-error="wrong" data-success="right">N a m a</label>
                      </div>
                       <div class="input-field col s12">
                         <input id="Address" type="text" name="Address" class="validate" required>
                        <label for="Address">A l a m a t</label>
                      </div>
                      <div class="input-field col s12">
                        <input name="Telp" id="icon_telephone" type="tel" class="validate" required>
                        <label for="icon_telephone">N o m o r T e l e p o n</label>
                      </div>
                       <div class="input-field col s12">
                        <input name="Tiket" id="Tiket" type="tel" class="validate" required>
                        <label for="Tiket">J u m l a h  T i k e t</label>
                      </div>
                        <div class="input-field col s12">
                        <input name="rekening" id="icon_telepon" type="tel" class="validate" required>
                        <label for="rekening">N o m o r  R e k e n i n g</label>
                      </div>
                       <div class="input-field col s12">
                        <label>F a s i l i t a s  T a m b a h a n</label>
                        <br>
                        <br>

                        <div class="input-field col s12">
                        <label>T r a v e l</label>
                        <br>
                        <br>
                        <select name="Travel" class="browser-default" required>
                          <option value="" disabled selected>Choose your option </option>
                          <option value="Tanpa Travel" >Tanpa Travel</option>
                          <option value="Sewa Travel" >Sewa Travel</option>
                          
                        </select>
                      </div>
                           
                        <div class="input-field col s12">
                        <label>T e n d a</label>
                        <br>
                        <br>
                        <select name="Tenda" class="browser-default" required>
                          <option value="" disabled selected>Choose your option </option>
                          <option value="Tanpa Tenda" >Tanpa Tenda</option>
                          <option value="Pesan Tenda" >Sewa Tenda</option>
                          
                        </select>
                      </div>

                      <div class="input-field col s12">
                        <label>B a n k</label>
                        <br>
                        <br>
                        <select name="Bank" class="browser-default" required>
                          <option value="" disabled selected>Choose your option</option>
                          <option value="BRI" >BRI</option>
                          <option value="BCA" >BCA</option>
                          <option value="BNI" >BNI</option>
                          <option value="BTN" >BTN</option>
                        </select>
                      </div>

					  <div>
                      <button class="btn waves-effect waves-light blue" type="submit" name="submit">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div id="hal3" class="col s12">
        <div class="container">
          <h3 class="blue-text center">Validation</h3>
                <div class="col s4 push-s5">
                <h6>
                  <ul style="list-style : none;">
          <?php 
              if (isset($_POST['submit'])) 
              {
          ?>
              
                    <center><li class="black-text">Name : <?php echo $_POST['Name'] ;?></li><br/>
                    <li class="black-text">Address : <?php echo $_POST['Address'] ;?></li><br/>
                    <li class="black-text">Telp : <?php echo $_POST['Telp'] ;?></li><br/>
                    <li class="black-text">Jumlah Tiket : <?php echo $_POST['Tiket'] ;?></li><br/>
                    <li class="black-text">Fasilitas : </li><br/>
                    <li class="black-text"><?php echo $_POST['Travel'] ;?></li><br/>
                    <li class="black-text"><?php echo $_POST['Tenda'] ;?></li><br/>
                    <li class="black-text">Nomor Rekening : <?php echo $_POST['rekening'] ;?></li><br/>
                    <li class="black-text">Bank : <?php echo $_POST['Bank'] ;?></li><br/></center>
          <?php
              }
              else
              {
          ?>
                    <h4><li class="pink-text center">You Haven't Complete the Buy Form </li></h4>
                    <h4><li class="pink-text center">Please Insert Data Before </li></h4>
          <?php
              }
          ?>
                </ul>
              
              </div>
        </div>
      </div>
    
 
  <!-- end tabs -->
  <br><br>
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