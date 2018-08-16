<?php
session_start();
if (!isset($_SESSION['name'])){
    header('Location:../../index.php');
  }else if($_SESSION['name']!="admin"){
        header('Location:../user/dashboardPage.php');
  }
include '../../controller/admin/detail.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KANS NFBS | Admin</title>
  <link href='../../dist/img/icon.png' rel='shortcut icon'>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php
  	include "../../dist/admin/style.php"
  ?>
</head>
<body class="hold-transition skin-green sidebar-mini">
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Welcome, <?php echo $_SESSION['name']; ?></span>
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
          <img src="../../dist/img/ketua.png" style="width: 36px; height: 36px; border-radius: 50%;" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['name']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="dashboardPage.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="active"><a href="dataPage.php"><i class="fa fa-search"></i> <span>Data Alumni</span></a></li>
        <li class="header">SETTINGS</li>
        <li><a href="../../controller/logout.php" onclick='return checkLogout()'><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Daftar<small>Alumni</small></h1>
      <ol class="breadcrumb">
        <li><a href="dashboardPage.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="dataPage.php"><i class="fa fa-search"></i> Daftar Alumni</a></li>
        <li class="active"><i class="fa fa-book"></i> <?php echo $name; ?></a></li>
      </ol>
    </section>
    <section class="content">
    <div class="box box-success">
           <div class="box-header with-border">
          <h3 class="box-title">Daftar Alumni</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Data Diri</a></li>
              <li><a href="#tab_2" data-toggle="tab">Pendidikan</a></li>
              <li><a href="#tab_3" data-toggle="tab">Pekerjaan</a></li>
              <li><a href="#tab_4" data-toggle="tab">Media Sosial</a></li>
              <li><a href="#tab_5" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <form class="form-horizontal" method="POST" action="../../controller/admin/editDatadiri.php">
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
                    <label for="inputTempatLahir" class="col-sm-2 control-label">Tempat Lahir</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputTempatLahir" placeholder="Tempat Lahir"  value= "<?php echo $tempatlahir; ?>" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputTempatLahir" class="col-sm-2 control-label">Tanggal Lahir</label>

                    <div class="col-sm-10">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control pull-right" name="datepicker" value="<?php echo $tanggallahir; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputAlamat" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" name="inputAlamat" id="autocomplete" placeholder="Alamat Lengkap"  value= "<?php echo $alamat; ?>" >
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
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" onclick='return checkInput()'>Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                 <form class="form-horizontal" method="POST" action="../../controller/admin/editPendidikan.php">
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" name="inputEmail" value=<?php echo $email; ?> >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputStrata" class="col-sm-2 control-label">Strata</label>

                    <div class="col-sm-10">
                      <select class="form-control select2" name="inputStrata">
                            <option selected="selected"><?php echo $strata; ?></option>
                            <option>D1/D2</option>
                            <option>D3</option>
                            <option>S1</option>
                            <option>S2</option>
                            <option>S3</option>
                      </select>
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
                <form class="form-horizontal" method="POST" action="../../controller/admin/editPekerjaan.php">
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
                    <label for="inputDivisiPerusahaan" class="col-sm-2 control-label">Divisi Perusahaan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputDivisiPerusahaan" placeholder="Divisi Perusahaan" value="<?php echo $divisiPerusahaan; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputTahunPekerjaan" class="col-sm-2 control-label">Tahun Bekerja</label>

                    <div class="col-sm-7">
                      <input type="year" class="form-control" name="inputTahunPekerjaan" placeholder="Tahun Bekerja" value="<?php echo $tahunPerusahaan; ?>">
                    </div>
                    <div class="col-sm-3">
                     <label for="inputTahunPekerjaan" class="col-sm-3 control-label">Tahun </label>
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
                <form class="form-horizontal" method="POST" action="../../controller/admin/editMediaSosial.php">
                  <div class="form-group">
                    <div class="col-sm-10">
                     <input type="hidden" class="form-control" name="inputEmail" value=<?php echo $email; ?> >
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputFacebook" class="col-sm-2 control-label">Facebook</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputFacebook" placeholder="facebook.com/..." value=<?php echo $facebook; ?>>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputTwitter" class="col-sm-2 control-label">Twitter</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputTwitter" placeholder="@..." value=<?php echo $twitter; ?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputLine" class="col-sm-2 control-label">Line ID</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputLine" placeholder="ID Line" value=<?php echo $line; ?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputInstagram" class="col-sm-2 control-label">Instagram</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputInstagram" placeholder="@..." value=<?php echo $instagram; ?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputWhatsapp" class="col-sm-2 control-label">WhatsApp</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputWhatsapp" placeholder="Nomor WhatsApp" value=<?php echo $noHP; ?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputLinkedIn" class="col-sm-2 control-label">LinkedIn</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputLinkedIn" placeholder="linkedin.com/in/..."  value= "<?php echo $linkedin; ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" onclick='return checkInput()'>Submit</button>
                    </div>
                  </div>
                </form>
              </div>
             <div class="tab-pane" id="tab_5">
                <form class="form-horizontal" method="POST" action="../../controller/admin/editSettings.php">
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
        <div class="box-footer">
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <strong>Copyright © KANS NFBS 2018 </strong>
  </footer>
    <?php
  	include "../../dist/admin/js.php"
  ?>
</body>
</html>
