<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Diagnosa Dini Penyakit Kulit Anjing</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">	
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/styling.css">

</head>

<style>

body {
        font-family: 'Poppins', sans-serif;
        display: flex;
    flex-direction: column;
    min-height: 100vh;
    }

  /* Menambahkan jarak antara tombol dan tabel */
  form {
    margin-top: 20px; /* Menambahkan jarak di atas form */
    margin-bottom: 20px;
  }

  

  table {
    margin-bottom: 40px; /* Menambahkan jarak di bawah tabel */
  }

/* 

Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard

    1. CSS Imports
    2. General Styles
    3. Sidebar
    4. Charts
    5. Preferences form
    6. Sign in form
    7. tables.html
    8. Bootstrap overrides
    9. Maps
    10. Media Queries
	
--------------------------------------- */

/* 1. CSS Imports
--------------------------------------- */
@import url('http://fonts.googleapis.com/css?family=Open Sans:300,400,700');
@import url(font-awesome.min.css);
@import url(bootstrap.min.css);

/* 2. General Styles
--------------------------------------- */
* { font-family: 'Poppins', sans-serif; }
body { background-color: #1D93B3; }
h1 { font-size: 30pt; }
.btn a {
    color: white;
    text-decoration: none;
}
.logo { display: inline-block; }
.logo h1 {
    font-size: 24px;
    margin: 10px 15px;
}
.templatemo-content-wrapper {
    float: left;
    width: 100%;
}
.templatemo-content {
    margin-left: 235px;
    margin-top: 0px;
    min-height: 600px;
    padding: 25px 20px 0 20px;
    background-color: white;
    overflow-x: hidden;
}
.templatemo-footer {
    clear: both;
    font-size: 13px;
    padding: 8px 0 5px 0;
    text-align: center;
    color: black;
    background-color: black;
}
.margin-bottom-15 { margin-bottom: 15px; }
.margin-bottom-30 { margin-bottom: 30px; }

/* 3. Sidebar
------------------------------------------------------*/
#templatemo_search_box {
    width: 150px;
    display: inline-block;
}
.navbar {
    margin-bottom: 0;
    border-radius: 0;
}
.navbar-header { color: #1D93B3; }
.templatemo-sidebar {
    padding: 0;
    margin-top: 20px;
}
.templatemo-sidebar .templatemo-sidebar-menu {
    list-style: none;
    margin: 0;
    padding: 0;
}
.templatemo-sidebar .templatemo-sidebar-menu > li {
    display: block;
    margin: 0;
    padding: 0;
    border: 0px;
}
.templatemo-sidebar .templatemo-sidebar-menu > li > a {
    display: block;
    position: relative;
    margin: 0;
    border: 0px;
    padding: 20px 15px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 300;    
}
.templatemo-sidebar-menu a { color: black; }
.templatemo-sidebar-menu a:hover { text-decoration: none; }
.templatemo-sidebar-menu li.sub .templatemo-submenu { display: none; }
.templatemo-sidebar-menu li.sub.open .templatemo-submenu { display: block; }
.templatemo-submenu { padding-left: 0; }
.templatemo-submenu li {
    list-style: none;
    background-color: #A6D0DD;
}
.templatemo-submenu li a {
    display: block;
    padding: 20px 15px;
    margin: 0;
}
.templatemo-sidebar-menu > li.sub.open > a {
    background-color: #1D93B3;
}
.templatemo-sidebar .templatemo-sidebar-menu >li.active, .templatemo-sidebar .templatemo-sidebar-menu>li>a:hover {
    background-color:  #1CC5DC;
}
.templatemo-submenu li > a:hover {
    background-color:  #1CC5DC;
}
.templatemo-sidebar .templatemo-sidebar-menu > li > a > i {
    font-size: 16px;
    top: 2px;
    margin-top: 1px;
    margin-left: 1px;
    margin-right: 4px;
    display: inline-block;
    width: 1.25em;
    text-align: center;
}

/* 4. Charts 
--------------------------------------------*/
.templatemo-chart-box {
    display: inline-block;
    text-align: center;
    padding: 20px 30px 30px 0;
}

/* 5. Preferences Form
------------------------------------------*/
#templatemo-preferences-form {
    max-width: 960px;
    margin-bottom: 30px;
}

/* 6. Sign in Form 
--------------------------------------------*/
.templatemo-signin-form {
    padding-top: 50px;
    max-width: 600px;
    margin: 0 auto;
}
.form-horizontal .form-group {
    margin-right: 0;
    margin-left: 0;
}

/* 7. tables.html
------------------------------------------*/
#templatemo_sort_btn { margin-bottom: 20px; }

/* 8. Bootstrap overrides
----------------------------------------------*/
.nav-pills>li>a, .nav-tabs>li>a, .alert, .progress, .panel, .btn, .panel-group .panel, .form-control, .modal-content, .breadcrumb {
    border-radius: 0;
}
.list-group-item:first-child, .panel-heading {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.form-control-feedback { right: 15px; }

/* 9. Maps
------------------------------------------------------*/
.jqvmap-zoomin, .jqvmap-zoomout {
    width: 15px;
    height: 15px;
}
.vmap { height: 400px; }

/* 10. Media Queries
------------------------------------------------------*/
@media screen and (min-width: 992px) {
    .templatemo-sidebar {
        width: 235px;
        float: left;
        position: relative;
        margin-right: -100%;
    }
}
@media screen and (max-width: 991px) {
    .navbar-form {
        padding: 0;
        margin-left: 0;
    }
    .navbar-header { float: none; }
    .navbar-toggle { display: block; }
    .templatemo-sidebar {
        border-top: 0 !important;
        margin: 20px;
    }
    .templatemo-sidebar.navbar-collapse.collapse {
        display: none !important;
    }
    .templatemo-sidebar.navbar-collapse.in {
        border-top: 0 !important;
        margin: 20px;
        position: relative;
        overflow: hidden !important;
        overflow-y: auto !important;
        display: block !important;
    }
    .templatemo-content-wrapper { float: none; }
    .templatemo-content { margin: 0; }
}
@media screen and (max-width: 767px) {
    .templatemo-chart-box {
        padding-right: 0;
    }
}

.badge {
  background-color: #DD0A35; /* Mengatur warna latar belakang menjadi merah */
  color: white; /* Mengatur warna teks menjadi putih */
  font-weight: bold; /* Membuat teks tebal */
}


    </style>  
</head>
<body>
<div class="navbar navbar-inverse" role="navigation" style="background-color: #1D93B3; border: none;">
      <div class="navbar-header">
        <div class="logo"><h1  style="color: black; ">Dashboard - Admin Pakar Diagnosa Dini Penyakit Kulit Anjing | Metode Dempster Shafer</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>

    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li>
            <form class="navbar-form">
              <input type="text" class="form-control" id="templatemo_search_box" placeholder="Search...">
              <span class="btn btn-default">Go</span>
            </form>
          </li>
          <li class="active"><a href="index.php"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Master Data <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="penyakit.php"><span class="badge pull-right"><?php include "koneksi.php"; $queryNP=mysqli_query($koneksi,"SELECT * FROM tb_penyakit"); $numNP=mysqli_num_rows($queryNP); echo $numNP;?></span>Data Penyakit & Solusi</a></li>
              <li><a href="gejala.php"><span class="badge pull-right"><?php $queryNP=mysqli_query($koneksi,"SELECT * FROM tb_gejala ORDER BY id ASC"); $numNP=mysqli_num_rows($queryNP); echo $numNP;?></span>Data Gejala</a></li>             
            </ul>
          </li>
          <li><a href="basis_pengetahuan.php"><i class="fa fa-cubes"></i><span class="badge pull-right"><?php $queryNR=mysqli_query($koneksi,"SELECT * FROM tb_rules"); $numNR=mysqli_num_rows($queryNR); echo $numNR;?></span>Rule Dempster Shafer</a></li>
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Laporan<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="lapgejala.php">Laporan Gejala</a></li>
              <li><a href="lapuser.php"><span class="badge pull-right"><?php $queryNP3=mysqli_query($koneksi,"SELECT * FROM tbpasien"); $numNP3=mysqli_num_rows($queryNP3); echo $numNP3;?></span>Laporan User</a></li>            
            </ul>
          </li>
      
        
         <!-- halaman logout  -->
         <a href="#" onclick="return confirmLogout();">
        <i class="fa fa-sign-out" style="margin-left: 20px; margin-top: 20px; font-size: 12pt;"></i> Logout
    </a>
      </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="index.php" style="color: black; font-size: 12pt;">Admin Panel</a></li>
            <li><a href="#"style="color: black; font-size: 12pt;">Dashboard</a></li>
            <li><a href="#" style="color: black; font-size: 12pt;">Laporan</a></li>
            <li class="active" style="color: black; font-size: 12pt; font-weight: bold;">Laporan Gejala</li>
          </ol>
          <h1>Laporan Data Gejala</h1>
          <!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Penyakit & Solusi</h4>
      </div>
      <div class="modal-body">
         <form method="post" action="simpanpenyakit.php">
<div class="form-group">
  <label for="kdpenyakit">KD Penyakit :</label>
  <input type="text" class="form-control" id="kdpenyakit" name="kdpenyakit">
</div>
  <div class="form-group">
    <label for="nama_penyakit">Nama Penyakit :</label>
    <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit">
  </div>
  <div class="form-group">
  <label for="definisi">Definisi Penyakit :</label>
  <textarea class="form-control" rows="3" id="definisi" name="definisi"></textarea>
  </div>
   <div class="form-group">
  <label for="solusi">Solusi Penyakit :</label>
  <textarea class="form-control" rows="3" id="solusi" name="solusi"></textarea>
  </div> 
  <button type="submit" class="btn btn-default">Simpan</button>
</form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                   <div class="row">
            <div class="col-md-12">
              <div class="btn-group pull-right" id="templatemo_sort_btn">
                <button type="button" class="btn btn-default">Pilih Penyakit</button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                <?php 	$sqlp = "SELECT * FROM tb_penyakit ORDER BY kdpenyakit";
	$qryp = mysqli_query($koneksi,$sqlp) or die ("SQL Error: ".mysqli_error());
	while ($datap=mysqli_fetch_array($qryp)) {
		?>
                  <li><a href="../admin/lapgejala.php?data=<?php echo $datap['id_penyakit'];?>"><?php echo $datap['kdpenyakit']."|".$datap['nama_penyakit'];?></a></li><?php } ?>
                </ul>
              </div>
              <div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>KD Gejala</th>
                <th>Gejala</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_GET['data'])){
                $kdsakit = $_GET['data'];
                $sql = "SELECT * FROM tb_rules, tb_gejala 
                        WHERE tb_rules.id_penyakitKulit = '$kdsakit' 
                        AND tb_gejala.id = tb_rules.id_gejalaKulit 
                        ORDER BY tb_gejala.kdgejala ASC"; // Urutkan di sini
            } else {
                $sql = "SELECT * FROM tb_rules, tb_gejala 
                        WHERE tb_gejala.id = tb_rules.id_gejalaKulit 
                        ORDER BY tb_gejala.kdgejala ASC"; // Urutkan di sini
            }
            $qry = mysqli_query($koneksi, $sql) or die("SQL Error: " . mysqli_error($koneksi));
            $no = 0;
            while ($data = mysqli_fetch_array($qry)) {
                $no++;
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['kdgejala']; ?></td>
                <td><?php echo $data['gejala']; ?></td>                    
                <td>
                    <a href="javascript:;" data-toggle="modal" data-target="#confirmModal2" class="btn btn-danger" style="border-radius: 5px;">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

                
            </div>
          </div>

          <div class="row"></div>
          <div class="templatemo-panels">
            <div class="row"></div>
            <div class="row"></div> 
          </div>    
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="sign-in.php" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Hapus Data-->
      <div class="modal fade" id="confirmModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Apakah Anda Ingin Hapus Data?</h4>
            </div>
            <div class="modal-footer">
              <a href="hpspenyakit.php" class="btn btn-primary">Ya</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
          </div>
        </div>
      </div>
     
         <!-- footer  -->
         <footer class="bg-primary text-white text-center py-4" style="background-color: #1D93B3; height: 100px;">
        <div class="container">
            <p>&copy; 2024 Sistem Pakar Diagnosis Dini Penyakit Kulit Anjing Dengan Metode Dempster Shafer</p>
            <p>Developed by Putri Prema Paramitha | putriprema14@gmail.com</p>
        </div>
    </footer>
    </div>

    <script>
    function confirmLogout() {
        // Menampilkan popup konfirmasi
        var confirmAction = confirm("Apakah Anda yakin ingin keluar dari halaman admin?");
        
        // Jika pengguna mengklik "Ya", arahkan ke halaman loginadmin.php
        if (confirmAction) {
            window.location.href = "http://localhost/sistempakarDS/halaman_loginadmin.php";
        }
        // Jika pengguna mengklik "Tidak", popup akan hilang dan tidak terjadi apa-apa
        return false;
    }
    function confirmLogout() {
        // Menampilkan popup konfirmasi
        var confirmAction = confirm("Apakah Anda yakin ingin keluar dari halaman admin?");
        
        // Jika pengguna mengklik "Ya", arahkan ke halaman loginadmin.php
        if (confirmAction) {
            window.location.href = "http://localhost/sistempakarDS/halaman_loginadmin.php";
        }
        // Jika pengguna mengklik "Tidak", popup akan hilang dan tidak terjadi apa-apa
        return false;
    }

</script>
</body>
</html>