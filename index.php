<!DOCTYPE html>
<html lang="en">
<head>
  <title>KANS NFBS</title>
  <link href='dist/img/icon.png' rel='shortcut icon'>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale="1.0" maximum-scale="1.0">
  <?php 
	include 'dist/index/css/style.php';
  ?>	
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">  
 <a class="navbar-brand" href="index.php">KANS NFBS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#section1">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section2">Persebaran Alumni</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section3">TIM</a>
    </li>
	 <li class="nav-item">
      <a class="nav-link" href="#section4">Kontak</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" target="_blank" href="https://goo.gl/forms/cN3jxFmcNogJWf233">Database Alumni</a>
    </li>
  </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item-login">
      <a class="nav-link" data-toggle="modal" href="#login" data-target="#login">Login</a>
    </li>
  </ul>
</nav>

  <!-- Modal -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login Alumni</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <?php if(isset($error_msg)){ echo $error_msg; } ?>
          <form role="form" action="controller/signin.php" method="post" class="login-form">
			  <div class="form-group">
				  <label class="sr-only" for="form-email">Email</label>
				  <input type="text" name="form-email" placeholder="Email" class="form-control" id="form-email">
			  </div>
			  <div class="form-group">
				  <label class="sr-only" for="form-password">Password</label>
				  <input type="password" name="form-password" placeholder="Password" class="form-control" id="form-password">
			  </div>
			  <div class="modal-footer">
				  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#register">Register</button>
				  <button type="submit" class="btn btn-primary" name="login" id="login">Login</button>
			  </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Register Alumni</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form role="form" action="controller/signup.php" method="post" class="login-form">
			  <div class="form-group">
				  <label class="sr-only" for="form-email">Email</label>
				  <input type="text" name="form-email" placeholder="Email..." class="form-control" id="form-email">
			  </div>
			  <div class="form-group">
				  <label class="sr-only" for="form-password">Password</label>
				  <input type="password" name="form-password" placeholder="Password..." class="form-control" id="form-password">
			  </div>
			  <div class="form-group">
				  <label class="sr-only" for="form-repassword">Retype Password</label>
				  <input type="password" name="form-repassword" placeholder="Retype Password" class="form-control" id="form-repassword">
			  </div>
			  <div class="form-group">
				  <label class="sr-only" for="form-nama">Nama Lengkap</label>
				  <input type="text" name="form-nama" placeholder="Nama lengkap" class="form-control" id="form-nama">
			  </div>
			  <div class="form-group">
				  <label class="sr-only" for="form-angkatan">Angkatan</label>
				  <input type="text" name="form-angkatan" placeholder="Angkatan (1,2,3)" class="form-control" id="form-angkatan">
			  </div>
			  <div class="modal-footer">
				  <button type="submit" class="btn btn-success" name="register" id="register">Register</button>
			  </div>
          </form>
        </div>
      </div>      
    </div>
  </div>

<div id="section1" style="padding-top:70px;padding-bottom:20px">
 <div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="dist/img/carousel1.jpeg" alt="masjid" width="700" height="500">
    </div>
    <div class="carousel-item">
      <img src="dist/img/carousel2.png" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="dist/img/carousel3.png" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<div id="section2" style="padding-top:70px;">
  <div class="container">
 <div style="text-align:center">
    <h2>Data Persebaran Alumni</h2><br>
    <img src="dist/img/indonesia.png" alt="masjid" width="1100" height="500">
</div>
  
</div>
</div>
<div id="section3" style="padding-top:70px;">
   <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <center><h2>Pengurus KANS NFBS</h2></center><br><br>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="dist/img/ketua.png" alt="ketua" width="200" height="200">
          <h3>Rachman Firdaus</h3>
          <p>Ketua Kans NFBS</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="dist/img/wakil.png" alt="Wakil" width="200" height="200">
          <h3>Dani Akhmad</h3>
          <p>Wakil Ketua Kans NFBS</p>
        </div>
         <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="dist/img/ketua.png" alt="sekretaris" width="200" height="200">
          <h3>Rara Nabila</h3>
          <p>Sekretaris</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="dist/img/wakil.png" alt="bendahara" width="200" height="200">
          <h3>Aini Nur Fajrina</h3>
          <p>Bendahara</p>
        </div>
         <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="dist/img/ketua.png" alt="ketua" width="200" height="200">
          <h3>Rachman Firdaus</h3>
          <p>Ketua Kans NFBS</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="dist/img/wakil.png" alt="Wakil" width="200" height="200">
          <h3>Dani Akhmad</h3>
          <p>Wakil Ketua Kans NFBS</p>
        </div>
         <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="dist/img/ketua.png" alt="ketua" width="200" height="200">
          <h3>Rachman Firdaus</h3>
          <p>Ketua Kans NFBS</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="dist/img/wakil.png" alt="Wakil" width="200" height="200">
          <h3>Dani Akhmad</h3>
          <p>Wakil Ketua Kans NFBS</p>
        </div>
      </div>

    </div>     
</div>
<div id="section4" style="padding-top:70px;">
   <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <center><h2>Kontak Alumni</h2></center><br><br>
        </div>
        <div class="col-lg-12">
              <div id="map" style="width:100%;height:400px"></div>
      </div>
    </div>     
</div>

</body>
<?php include 'dist/index/css/script.php' ?>
<center><a href="#myPage" title="To Top">
    <i class="fa fa-angle-double-up" style="font-size:48px;color:#fdcb4e"></i>
</a></center>
<?php include 'dist/index/css/footer.php' ?>
 
</html>
