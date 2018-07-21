<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KANS NFBS</title>
  <link href='../../dist/img/icon.png' rel='shortcut icon'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 	<?php 
  include '../../dist/index/css/style.php'; 
  ?>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">  
 <a class="navbar-brand" href="homePage.php">KANS NFBS</a>
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
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome, <?php echo $_SESSION['name']; ?></a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="dashboardPage.php">Profile</a>
        <a class="dropdown-item" href="../../controller/logout.php" onclick='return checkLogout()'>Logout</a>
      </div>
    </li>
  </ul>
</nav>



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
      <img src="../../dist/img/carousel1.jpeg" alt="masjid" width="700" height="500">
    </div>
    <div class="carousel-item">
      <img src="../../dist/img/carousel2.png" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="../../dist/img/carousel3.png" alt="New York" width="1100" height="500">
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
    <img src="../../dist/img/indonesia.png" alt="masjid" width="1100" height="500">
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
          <img class="rounded-circle d-block mx-auto" src="../../dist/img/ketua.png" alt="ketua" width="200" height="200">
          <h3>Rachman Firdaus</h3>
          <p>Ketua Kans NFBS</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="../../dist/img/wakil.png" alt="Wakil" width="200" height="200">
          <h3>Dani Akhmad</h3>
          <p>Wakil Ketua Kans NFBS</p>
        </div>
         <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="../../dist/img/ketua.png" alt="sekretaris" width="200" height="200">
          <h3>Rara Nabila</h3>
          <p>Sekretaris</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="../../dist/img/wakil.png" alt="bendahara" width="200" height="200">
          <h3>Aini Nur Fajrina</h3>
          <p>Bendahara</p>
        </div>
         <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="../../dist/img/ketua.png" alt="ketua" width="200" height="200">
          <h3>Rachman Firdaus</h3>
          <p>Ketua Kans NFBS</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="../../dist/img/wakil.png" alt="Wakil" width="200" height="200">
          <h3>Dani Akhmad</h3>
          <p>Wakil Ketua Kans NFBS</p>
        </div>
         <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="../../dist/img/ketua.png" alt="ketua" width="200" height="200">
          <h3>Rachman Firdaus</h3>
          <p>Ketua Kans NFBS</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle d-block mx-auto" src="../../dist/img/wakil.png" alt="Wakil" width="200" height="200">
          <h3>Dani Akhmad</h3>
          <p>Wakil Ketua Kans NFBS</p>
        </div>
      </div>

    </div>     
</div>
<div id="section4" style="padding-top:70px;">
  <div class="container">
  <div style="text-align:center">
    <h2>Kontak Alumni</h2><br>
  </div>
  <div class="row">
      <div id="map" style="width:100%;height:400px"></div>
  </div>
</div>
</div>


</body>
<?php include '../../dist/index/css/script.php' ?>

<center><a href="#myPage" title="To Top">
    <i class="fa fa-angle-double-up" style="font-size:48px;color:#fdcb4e"></i>
</a></center>
<?php include '../../dist/index/css/footer.php' ?>
 
</html>
