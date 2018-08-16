<?php
session_start();
if (!isset($_SESSION['name'])){
    header('Location:../../index.php');
  }else if($_SESSION['name']!="admin"){
        header('Location:../user/dashboardPage.php');
  }
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
        <li class="active"><i class="fa fa-search"></i> Daftar Alumni</a></li>
      </ol>
      </section>
      <section class="content">
  		<div class="box box-success">
  		  <div class="box-header with-border">
			<h3 class="box-title">Daftar Alumni</h3>
			<div class="box-tools pull-right">
			  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove" >
			  <i class="fa fa-times"></i></button>
			</div>
		  </div>
  		  <div class="box-body">
			<div class="box-tools pull-right">
			  <button type="button" class="btn btn-box-tool" title="Tambah Alumni" data-toggle="modal" data-target="#modal-default">
			  <i class="fa fa-plus"></i></button>
			  <button type="button" class="btn btn-box-tool" title="Print" data-toggle="tooltip" id="myBtn">
			  <i class="fa fa-print"></i></button>
			  <script>
				var btn = document.getElementById('myBtn');
				btn.addEventListener('click', function() {
				  document.location.href = '../../controller/admin/export2excel.php';
				});
			  </script>
			</div>

			<form class="form-horizontal" method="post" action="../../controller/admin/tambahAlumni.php">
			<div class="modal fade" id="modal-default">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Tambah Alumni</h4>
				  </div>
				  <div class="modal-body">
					 <div class="form-group">
						<label for="inputEmail" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="inputEmail" >
						</div>
					  </div>
					 <div class="form-group">
					   <label for="inputPassword" class="col-sm-3 control-label">Password</label>
					   <div class="col-sm-9">
						 <input type="password" class="form-control" name="inputPassword" >
					   </div>
					 </div>
					 <div class="form-group">
					   <label for="inputRePassword" class="col-sm-3 control-label">ReType Password</label>
					   <div class="col-sm-9">
						 <input type="password" class="form-control" name="inputReTypePassword" >
					   </div>
					 </div>
					 <div class="form-group">
					   <label for="inputNama" class="col-sm-3 control-label">Nama Lengkap</label>
					   <div class="col-sm-9">
						 <input type="text" class="form-control" name="inputNama" >
					   </div>
					 </div>
				  </div>
				  <div class="modal-footer">
					  <button type="submit" class="btn btn-success" name="tambah" id="tambah">Tambah</button>
				  </div>
				</div>
			  </div>
			</div>
			</form>

		  </div>
            <div class="table-responsive">
          	<table id="example1" class="table table-bordered table-striped">
              	<thead>
                  <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Angkatan</th>
                    <th>Lulusan</th>
                    <th></th>
                  </tr>
                  </thead>
                  <?php
                      include '../../controller/admin/display.php';
                  ?>
              </table>
          </div>
            <div class="box-footer">
            <!--Footer-->
          </div>
  		</div>
      </section>
    </div>
  </div>
  <footer class="main-footer">
    <strong>Copyright © KANS NFBS 2018 </strong>
  </footer>
  <?php
  	include "../../dist/admin/js.php"
  ?>
</body>
</html>
