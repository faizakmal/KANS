<?php
session_start();
if (!isset($_SESSION['name'])){
    header('Location:../../index.html');
  }
include '../../controller/user/profile.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KANS NFBS | Profile</title>
  <link href='../../dist/img/icon.png' rel='shortcut icon'>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php 
    include "../../dist/user/style.php"
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!--navbar header-->
  <header class="main-header">
    <a href="dashboardPage.php" class="logo">
      <span class="logo-mini"><b>NF</b></span>
      <span class="logo-lg"><img src="../../dist/img/btnhome.png" class="img-circle" alt="Home" style="margin-right: 10px;"><b>KANS NFBS</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="profilePage.php">
              <span class="hidden-xs">Welcome, <?php echo $name; ?></span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Tutup navbar header-->
  </header>
  <!-- Sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/userpicture/<?php echo $image?>" style="width: 38px; height: 38px;" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="dashboardPage.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="cariAlumniPage.php"><i class="fa fa-search"></i> <span>Cari Alumni</span></a></li>
        <li class="active"><a href="profilePage.php"><i class="fa fa-book"></i> <span>Profile</span></a></li>
        <li class="header">SETTINGS</li>
        <li><a href="../../controller/logout.php" onclick='return checkLogout()'><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Profil</h1>
      <ol class="breadcrumb">
        <li><a href="dashboardPage.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-book"></i> Profile</a></li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/userpicture/<?php echo $image?>" alt="User profile picture" style = "width: 100px; height: 100px;" >
              <h3 class="profile-username text-center"><?php echo $name; ?></h3>
              <p class="text-muted text-center"><?php echo $email; ?></p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Nama</b> <a class="pull-right"><?php echo $name; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php echo $email; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Angkatan</b> <a class="pull-right"><?php echo $angkatan; ?> <?php echo $lulusan; ?></a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-map-marker margin-r-5"></i>Alamat</strong>
              <p class="text-muted"><?php echo $alamat; ?></p>

              <hr>

              <strong><i class="fa fa-phone margin-r-5"></i>No HP</strong>
              <p class="text-muted"><?php echo $noHP; ?></p>
               
              <hr>
              
              <strong><i class="fa fa-book margin-r-5"></i>Pendidikan</strong>
              <p class="text-muted"><?php echo $jurusan; ?>, <?php echo $universitas; ?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-8">
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Data Diri</a></li>
              <li><a href="#tab_2" data-toggle="tab">Pendidikan</a></li>
              <li><a href="#tab_3" data-toggle="tab">Pekerjaan</a></li>
              <li><a href="#tab_4" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="../../controller/user/editDatadiri.php">
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" name="inputEmail" value= "<?php echo $email; ?>" >
                    </div>
                  </div>
                
                  <div class="form-group">
                    <label for="inputNama" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputNama" placeholder="Nama Lengkap"  value= "<?php echo $name; ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAlamat" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputAlamat" id="autocomplete" placeholder="Alamat Lengkap"  onfocus="OnFocusInput(this)" onblur="OnBlurInput(this)" value= "<?php echo $alamat; ?>" >
                      <p id="demo" style="color:red";></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputNoHP" class="col-sm-2 control-label">Nomor HP</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputNoHP" placeholder="NoHP"  value= "<?php echo $noHP; ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAngkatan" class="col-sm-2 control-label">Angkatan</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" name="inputAngkatan" placeholder="Angkatan (Angka)"  value="<?php echo $angkatan; ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputLulusan" class="col-sm-2 control-label">Lulusan</label>

                    <div class="col-sm-10">
                        <select class="form-control select2" name="inputLulusan" style="width: 100%;">
                            <option selected="selected"><?php echo $lulusan; ?></option>
                            <option>SMP</option>
                            <option>SMA</option>
                            <option>SMP-SMA</option>
                      </select>    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPekerjaan" class="col-sm-2 control-label">Pekerjaan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputPekerjaan" placeholder="Pekerjaan" value= "<?php echo $pekerjaan; ?>" >
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="photo" class="col-sm-2 control-label">Upload Foto Profil</label>
                    <br>
                    <div class="col-sm-10">
                       <input type="file" name="imageupload">
                       <a>*max file size 1Mb</a>
                      </div>                
                    </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" onclick='return checkInput()'>Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                 <form class="form-horizontal" method="POST" action="../../controller/user/editPendidikan.php">
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" name="inputEmail" value=<?php echo $email; ?> >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputUniversitas" class="col-sm-2 control-label">Universitas</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputUniversitas" placeholder="Universitas" value= "<?php echo $universitas; ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputFakultas" class="col-sm-2 control-label">Fakultas</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputFakultas" placeholder="Fakultas" value= "<?php echo $fakultas; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputJurusan" class="col-sm-2 control-label">Jurusan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputJurusan" placeholder="Jurusan" value= "<?php echo $jurusan; ?>" >
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputTahunMasuk" class="col-sm-2 control-label">Tahun Masuk</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputTahunMasuk" placeholder="Tahun Masuk" value= "<?php echo $tahunMasuk; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" onclick='return checkInput()'>Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <form class="form-horizontal" method="POST" action="../../controller/user/editPekerjaan.php">
                  <div class="form-group">
                    <div class="col-sm-10">
                     <input type="hidden" class="form-control" name="inputEmail" value=<?php echo $email; ?> >
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputJenisPerusahaan" class="col-sm-2 control-label">Jenis Perusahaan</label>

                    <div class="col-sm-10">
                      <select class="form-control select2" name="inputJenisPerusahaan" style="width: 100%;">
                            <option selected="selected"><?php echo $jenisPerusahaan; ?></option>
                            <option>Swasta</option>
                            <option>Pemerintahan</option>
                            <option>Bisnis</option>
                            <option>NGO/LSM</option>
                      </select>                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputNamaPerusahaan" class="col-sm-2 control-label">Nama Perusahaan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputNamaPerusahaan" placeholder="Nama Perusahaan" value="<?php echo $namaPerusahaan; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" onclick='return checkInput()'>Submit</button>
                    </div>
                  </div>
                </form>
              </div>
             <div class="tab-pane" id="tab_4">
                <form class="form-horizontal" method="POST" action="../../controller/user/editSettings.php">
                  <div class="form-group">
                    <div class="col-sm-10">
                     <input type="hidden" class="form-control" name="inputEmail" value=<?php echo $email; ?> >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputReTypePassword" class="col-sm-2 control-label">ReType Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="inputReTypePassword" placeholder="ReType Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger" onclick='return checkInput()'>Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <strong>Copyright © KANS NFBS 2018 </strong>
  </footer>
    <?php 
    include "../../dist/user/js.php"
     ?>
</body>
</html>
