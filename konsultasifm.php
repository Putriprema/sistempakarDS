<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Diagnosa Dini Penyakit Kulit Anjing</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>

body {
        font-family: 'Poppins', sans-serif;
    }

    .navbar {
        background-color: #1D93B3; /* Warna latar belakang navbar */
        margin-bottom: 0; /* Menghilangkan margin bawah */
        border: none; /* Menghilangkan border */
        box-shadow: none; /* Menghilangkan shadow */
		margin-bottom: 50px;
    }

    .navbar .navbar-brand, 
    .navbar .nav > li > a, 
    .navbar .btn {
        color: #000; /* Warna teks di navbar */
        font-size: 12pt; /* Ukuran font di navbar */
        line-height: 20px; /* Menjaga agar teks berada di tengah navbar */
        font-weight: 600; /* Menjadikan teks bold */
    }

    .navbar .btn {
        border-radius: 12px; /* Corner radius button */
        border: none; /* Menghilangkan border pada tombol */
        box-shadow: none; /* Menghilangkan shadow pada tombol */
        background-color: #90B5BE; /* Latar belakang button */
    }

    .navbar .navbar-nav > li > a:hover {
        background-color: #6CBED2; /* Warna hover baru */
        color: #fff; /* Warna teks saat hover */
    }

    .form { 
        width: 99%; 
        background: linear-gradient(to left, #FFF, #EEE); 
        border: 1px solid #CCC; 
        border-radius: 5px 5px; 
        padding: 3px 3px 3px 5px;
    }
    .form p { 
        font-weight: bold; 
        font-size: 18pt; /* Ukuran font untuk gejala */
    }
    p { border: 0px solid #03F; }

	/* editing table aturan kombinasi */
    .Y1, .Y2, .X1, .X2, .teta1, .teta2 { 
        text-align: center; 
        float: left; 
        width: 330px; 
    }
	/* editing table aturan kombinasi */
    .Y1 { border: 1px solid #C30; background: #F66; }
    .Y2 { border: 1px solid #C30; background: #FF9; }
    .X1 { border: 1px solid #0F0; background: #0C9; }
    .X2 { border: 1px solid #33C; background: #06F; }
    .teta1 { border: 1px dashed #C30; background: linear-gradient(to right, #0CF, #39F); }
    .teta2 { border: 1px dashed #9C0; background: linear-gradient(to right, #0CF, #39F); }

	/* editing table aturan kombinasi yang warna kuning */
    .densitas { 
        border: 2px solid #CC0; 
        padding: 3px; 
        text-align: center; 
        display: block; 
        float: left; 
        width: 330px; 
    }

    .kolom2X { 
        border: 1px solid #06C; 
        margin-top: -100px; 
    }

	.btn-cetak {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-cetak:hover {
            background-color: #218838;
        }
		 /* Media Queries for Responsive Design */
		 @media screen and (max-width: 768px) {
       
            table, th, td {
                font-size: 12px;
            }
        }

        @media screen and (max-width: 576px) {
            .form p {
                font-size: 14pt;
            }

         
        }

        footer {
            background-color: #1D93B3;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
   

</style>

<script>
function resetForm() {
    // Mengatur ulang semua checkbox
    $('input[type="checkbox"]').prop('checked', false);
    
    // Menghapus pilihan dari form
    $('form').trigger('reset');

    // Jika ada elemen lain yang ingin direset, tambahkan di sini
    // Contoh: $('#elementId').val('');
}


</script>


</head>
<body>	
	 <!-- membuat menu navigasi -->
	 <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?php include("header.php"); ?></a>
            </div>
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pasien_add_fm.php">Proses Diagnosa<span class="sr-only">(current)</span></a></li>
                    <li><a href="daftar_penyakit.php">Daftar Penyakit dan Solusi</a></li>
                </ul>
				
				<ul class="nav navbar-nav navbar-right">					 
    <li><a href="halaman_loginadmin.php" class="btn btn-primary navbar-btn" style="border-radius: 12px; font-size: 11pt; width: 200px; height: 35px; display: inline-flex; justify-content: center; align-items: center;">Login Sebagai Admin</a></li>
</ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>	

	

	<div class="modal fade" id="modal-daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal Daftar</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control">
						</div>						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-right: 20px;">Batal</button>
					<button type="button" class="btn btn-primary" style="margin-right: 20px;">Daftar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- akhir modal -->

	<!-- akhir menu navigasi -->

	<div class="container">			
		<!-- membuat jumbotron -->
		<div class="jumbotron">
			<center>			
				<h2>Proses Diagnosa Penyakit Kulit Pada Anjing</h2>
                <?php include "admin/koneksi.php"; ?>
<?php include "admin/koneksi2.php"; ?>

<!-- styling tabel gejala -->
<table width="750" border="4" align="center" class="table table-striped table-hover table-bordered">
    <td width="786" style="font-size: 13pt"><center><strong>Silakan pilih gejala sesuai dengan kondisi yang dialami oleh anjing Anda!</strong></center></td>
  </tr>
  <tr>
    <td style="padding:3px 3px 7px 3px;">
<form method="post" >

<?php
//-- menampilkan daftar gejala
//$arrKDGejala=array();
//$arrKDGejalaSelect=array();
$sqli="SELECT * FROM tb_gejala ORDER BY id ASC ";
$result=$db->query($sqli);
while($row=$result->fetch_object()){
    echo "<input type='checkbox' name='evidence[]' value='{$row->id}'"
         .(isset($_POST['evidence'])?(in_array($row->id,$_POST['evidence'])?" checked":""):"")
        ."> {$row->kdgejala} {$row->gejala}<br>";
}
?><br>
 <center>
 <div class="d-flex justify-content-between">
    <input type="submit" value="Proses Diagnosa Penyakit" class="btn btn-success" style="margin-bottom: 15px;">
    <button type="button" class="btn btn-warning" style="margin-bottom: 15px;" onclick="resetForm()">Ulangi</button>
</div>
</center>

</form>


<!-- /*metode perhitungan DS mulai dari sini*/ -->
<?php
//mengambil nilai gejala yang dipilih

if(isset($_POST['evidence'])){
	if(count($_POST['evidence'])<2){
		echo "<span style='color:red; font-size:14pt; font-weight:bold; display:block;'>Pilih minimal 2 gejala!</span>";
	}else{
		echo "<div class='form'><p>Gejala Yang dipilih :</p>"; 
		$arrKDGejalaSelect=$_POST['evidence'];
		foreach($arrKDGejalaSelect as $kdGSelect){ 
			echo $kdGSelect." | ";
			$queryG=mysqli_query($koneksi,"SELECT * FROM tb_gejala WHERE id='$kdGSelect' "); 
			while($dataG=mysqli_fetch_array($queryG)){ echo $dataG['gejala']."<br>";}
			}

		echo "</div>";

		echo "<p style='font-weight:bold; text-align:center; background:#1D93B3; margin-top: 30px;'><strong>Menentukan Nilai Densitas (m) Awal</strong></p>";


		$sql = "SELECT GROUP_CONCAT(b.kdpenyakit), a.belief , a.id_gejalaKulit
			FROM tb_rules a
			JOIN tb_penyakit b ON a.id_penyakitKulit=b.id_penyakit
			WHERE a.id_gejalaKulit IN(".implode(',',$_POST['evidence']).") 
			GROUP BY a.id_gejalaKulit ORDER BY a.id_gejalaKulit ASC ";
		$result=$db->query($sql);
		$evidence=array();
		//$gejalaSelect=array();
		while($row=$result->fetch_row()){
			//print_r($row[2]);
			$evidence[]=$row;
			//$gejalaSelect[]=$row[0];
			//masukkan kode perhitungannya dibawah ini
		
		} $no=0;
		echo "<br>";
		echo "<div class='form'><p>Densitas (m) Awal<p>";
		//editing table container bagian pemilihan gejala
		echo "<table border='1' width='100%' class='table table-striped table-hover table-bordered'> ";
		echo "<tr><td colspan='5'><center>Tabel 1 Densitas (m) Awal</center</td></tr>";
		echo "<tr>";
		echo "<td><strong>No</strong></td>";
		echo "<td><strong>Gejala</strong></td>";
		echo "<td><strong>Penyakit</strong></td>";
		echo "<td><strong>Densitas</strong></td>";
		echo "<td><strong>Plausability</strong></td>";
		echo "</tr>";
		$no = 0;
		foreach($evidence as $kdgejala){
			echo "<tr>"; $no=$no+1;
			echo "<td>$no</td>";
			echo "<td>"; 
			$queryG=mysqli_query($koneksi,"SELECT * FROM tb_gejala WHERE id='$kdgejala[2]' "); 
			$dataG=mysqli_fetch_array($queryG); 
			echo $dataG['id']." | ".$dataG['gejala']."<br>";
            echo"</td>";
			echo "<td>"; print_r($kdgejala[0]); echo "</td>";
			echo "<td>"; print_r($kdgejala[1]); echo"</td>";
			echo "<td>"; print_r(1-$kdgejala[1]); echo"</td>"; echo "</tr>";
			}unset($kdgejala);
		echo "</table>";
		echo "</div>";
?>
<!-- <p style="font-weight:bold; text-align:center; background:#1D93B3; margin-top: 30px; "><strong>Menentukan Nilai Densitas (m) Baru</strong></p>
<?php
		//--- menentukan environement -->
		$sql="SELECT GROUP_CONCAT(kdpenyakit) FROM tb_penyakit ";
		$result=$db->query($sql);
		$row=$result->fetch_row();
		$fod=$row[0];
		//$densitas_baru=array(); echo "<br>";

		//styling keseluruhan tabel
echo "<table border='' width='1000'>";
//menghitung nilai densitas (m) baru
while(!empty($evidence)){ 
echo "<tr><td colspan='3'><center>Tabel 2 :Aturan kombinasi untuk m<sub>3</sub></center</td></tr>";
echo "<tr>";
		//nilai pada Y1 baris atas
		echo "<td width='500'>&nbsp;</td>";
		echo "<td width='550'>";
			$densitas1[0]=array_shift($evidence); 
			echo "<span class='Y1'>M<sub>2</sub>"; echo "{"; print_r($densitas1[0][0]); echo "}<br>";
			print_r($densitas1[0][1]); 
			echo "</span>";
		echo "</td>";
		echo "<td width='250'>";
		//nilai pada Y2 baris atas
			$densitas1[1]=array($fod,1-$densitas1[0][1]); 
			echo "<span class='Y2'>M<sub>2</sub>{&theta;}<br>"; $Y2=1-$densitas1[0][1]; echo " $Y2</span>";
			$densitas2=array();
		echo "</td></tr>";
		echo "<tr>";
		echo "<td>";
			if(empty($densitas_baru)){
				//nilai pada X1 baris 1
				//echo "tidak ada densitas baru<br>";
				$densitas2[0]=array_shift($evidence);
				echo "<span class='X1'>M<sub>1</sub>";
				echo "{"; print_r($densitas2[0][0]); echo "}<br>";
				echo ""; print_r($densitas2[0][1]); echo "<br>";
				 echo "</span><br>"; 
			}else{
				foreach($densitas_baru as $k=>$r){
					//nilai pada X1 baris 2; jika ad densitas baru
					if($k!="&theta;"){
						//print_r($densitas2);echo "<br>";
						$densitas2[]=array($k,$r); 
						//echo "<span class='X1'>[nilai X1 baris 2 ";
						echo "<span class='X1'>m<sub>$m</sub>{";
						//print_r($densitas2[0][0]); echo "<br>";
						//print_r($densitas2[0][1]);
						print_r($k); echo"}<br>"; print_r($r);
						echo "</span>";
					}
				}
			}
		echo "</td>"; //bagian y1
		echo "<td valign='top' colspan='2' rowspan='2'>&nbsp;</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td valign='top'>";
			$theta=1;
			//nilai X1 baris 2 teta
			foreach($densitas2 as $d) $theta-=$d[1]; echo "<span class='X2'>M<sub>1</sub>{&theta;}<br>".$theta."</span>";
			$densitas2[]=array($fod,$theta); 
			//print_r($theta);
			//echo"<p>densitas2[0] = ".print_r($densitas2[0][0])." | densitas2[1] = ".print_r($densitas2[0][1])."</p>";
			$m=count($densitas2); echo "count data M = $m";
		echo "</td>";
		echo "<td colspan='2'>y2&nbsp;</td>"; 
		echo "</tr>";
		echo "<tr>"; 
		echo "<td>x2&nbsp;</td>"; 
		echo "<td colspan='2' valign='top'><div class='kolom2X'>";
			$densitas_baru=array();
			for($y=0;$y<$m;$y++){
				for($x=0;$x<2;$x++){
					if(!($y==$m-1 && $x==1)){
						$v=explode(',',$densitas1[$x][0]);
						$w=explode(',',$densitas2[$y][0]);
						sort($v); 
						sort($w); 
						$vw=array_intersect($v,$w); 
						//mencari nilai irisan	
						if(empty($vw)){
							echo "<span class='densitas'>kosong";
							$k="&theta;"; echo " $k<br>";
							echo $nilaiX1Y1=0;
							echo "</span>"; 
						}else{
							//echo "<td rowspan='2'>";
							//echo "<br><span class='teta2'>jika data vw ADA maka tampilkan ";
							$k=implode(',',$vw); //echo "{".print_r($k)."}= $nilaiX1Y1"; 
							echo "<span class='densitas'>";
										$nilaiX1Y1=$densitas1[$x][1]*$densitas2[$y][1]; 
										foreach($vw as $vwHasil){ print_r($vwHasil);} echo "<br>"; print_r($nilaiX1Y1);
										echo "</span>";
						}
						if(!isset($densitas_baru[$k])){
							//echo "data Y1r2";
							//echo "<td> y1 r3 ";
							$densitas_baru[$k]=$densitas1[$x][1]*$densitas2[$y][1];
							//echo "<span class='Y1r2'>Y1r2 = "; 
							$k=implode(',',$vw); //echo $k. "<br>"; 
						}else{
							$densitas_baru[$k]+=$densitas1[$x][1]*$densitas2[$y][1];
							//echo "<p>M <sub>3b</sub> : "; print_r($densitas_baru[$k]);echo"|"; print_r($densitas1[$x][1]);
						}
					}
				} 
			}	echo "<span class='densitas'>&theta;<br>"; $dataX2=$theta; $dataY2=$Y2; $Y3=$dataX2*$dataY2; echo $Y3."</span>";
echo "</div></td></tr>";
echo "<tr>";
echo "<td colspan='3'>";
			echo "<p style=' border:none;'>Merujuk pada rumus [DST-07] evidential conflict-nya belum ada, maka nilainya adalah k=0, sehingga dapat dihitung berdasarkan persamaan [DST-06]:</p>";
			echo "<div style='border:1px solid #ccffcc; padding:3px 3px 3px 5px;' >";
			//print_r($densitas_baru);echo"<br>";
			print_r($k); echo "<br>";
			print_r($nilaiX1Y1); echo "<br>";
			print_r($k); echo "<br>"; //print_r($k);echo"<br>";
			foreach($densitas_baru as $k=>$d){
				echo $d."[".$k."]";
				if($k!="&theta;"){
					$densitas_baru[$k]=$d/(1-(isset($densitas_baru["&theta;"])?$densitas_baru["&theta;"]:0));
					//echo "<p>Densitas baru "; print_r($densitas_baru[$k]); echo"=$d /(1-";  echo "</p>";
					//print_r((1-(isset($densitas_baru["&theta;"])?$densitas_baru["&theta;"]:0))); echo "<br>";
					//print_r($densitas_baru["&theta;"]); echo "<br>";
					echo "m<sub>$m</sub>{"; print_r($k); echo "} =$d /(1-(";print_r($d);echo "<br>";
					echo "m<sub>$m</sub>{"; print_r($k); echo "} = ";print_r($densitas_baru[$k]); echo "<br>";
				}
			}
			echo "</div>";
			
			//hasil perhitungan densitas awal m ke n
			echo "<p style='font-weight:bold; border:none;'>Sehingga dari perhitungan #2 didapatkan :</p>";
			
			foreach($densitas_baru as $kdPdensitas=>$nilaiPDensitas){
				echo "m<sub>11</sub>("; print_r($kdPdensitas); echo ") = "; print_r($nilaiPDensitas); echo "<br>";
				}
echo "</td></tr>";
		} //## end --menghitung nilai densitas (m) baru
echo "</table>";
		//--- perangkingan
		unset($densitas_baru["&theta;"]);
		arsort($densitas_baru);
		//print_r ($densitas_baru);
		
	?>
    <p style="font-weight:bold; text-align:center; background:#1D93B3; margin-top: 30px; "><strong>Hasil Diagnosis Penyakit Kulit Anjing</strong></p> -->



<?php	
$arrPenyakit=array(); 
$queryPasien=mysqli_query($koneksi,"SELECT * FROM tbpasien ORDER BY idpasien DESC"); $dataPasien=mysqli_fetch_array($queryPasien);
$queryP=mysqli_query($koneksi,"SELECT * FROM tb_penyakit"); while($dataP=mysqli_fetch_array($queryP)){ $arrPenyakit["$dataP[kdpenyakit]"]=$dataP['nama_penyakit']; }	
		echo "<p style='font-weight:bold; border:none;margin-top: 20px; font-size: 15pt;'>Dari hasil perhitungan yang terakhir tersebut kemudian diurutkan nilainya dari yang terbesar ke yang terkecil sebagai berikut :</p>";
		//print_r($densitas_baru);echo "<hr>"; 
		$dataSama=array();
		$dataSama=array_intersect_key($arrPenyakit,$densitas_baru);
		//print_r($dataSama); echo "<hr>";
		foreach($dataSama as $k=>$a){ 
			foreach($densitas_baru as $kdpenyakit=>$ranking){
			//echo "m<sub>$m</sub>("; print_r($kdpenyakit); echo ") = "; print_r($ranking); echo "<br>";
			//echo "m<sub>$m</sub>( $kdpenyakit | "; print_r($arrPenyakit["$kdpenyakit"]); echo ") = "; 
			//echo " dengan nilai kepercayaan sebesar ".round($densitas_baru[$kdpenyakit]*100,2)."%<br>";
			if($k==$kdpenyakit){ 
			//mengambil solusi penyakit
			$strS=mysqli_query($koneksi,"SELECT * FROM tb_penyakit WHERE kdpenyakit='$k' ");
			$dataS=mysqli_fetch_array($strS); 
				echo "<strong>m<sub>$m</sub>( $kdpenyakit | "; print_r($arrPenyakit["$kdpenyakit"]); echo ") = "; 
				echo " dengan nilai kepercayaan sebesar :  ".round($densitas_baru[$kdpenyakit]*100,2)."%<br></strong>";
				echo "Solusi Penanganan : <p style='margin-top: 10px; padding-left: 5px; padding-right: 5px; font-size: 12pt; max-height:300px; overflow:auto; border:3px solid #1D93B3; color: #3C3D37; text-align: justify; letter-spacing: 1px;'>".$dataS['solusi']."</p><hr>";
				$persen=round($densitas_baru[$kdpenyakit]*100,2);
				//menyimpan data pasien
				$idPasien=$dataPasien['idpasien'];
				$querySimpanP=mysqli_query($koneksi,"INSERT INTO tb_hasil (idpasien,kdpenyakit,persentase,tanggal) VALUES ('$idPasien','$k','$persen', NOW() ) ");
			 }
			}
		}
       
        
        
        //--- menampilkan hasil akhir
        $codes=array_keys($densitas_baru); 
        $final_codes=explode(',',$codes[0]);
        $sql="SELECT GROUP_CONCAT(nama_penyakit)  
        FROM tb_penyakit  
        WHERE kdpenyakit IN('".implode("','",$final_codes)."')"; 
        $result=$db->query($sql); 
        $row=$result->fetch_row(); 
        echo "Terdeteksi penyakit <b>{$row[0]}</b> dengan derajat kepercayaan ".round($densitas_baru[$codes[0]]*100,2)."%";
        echo "<p style='text-align:center; font-weight:bold; border:none;'>Persentase Kesimpulan</p>";
        echo "<p style='text-align:justify; border:none;'>0%-50%   : Sedikit Kemungkinan atau Kemungkinan Kecil</p>";
        echo "<p style='text-align:justify; border:none;'>51%-79%  : Pasti</p>";
        echo "<p style='text-align:justify; border:none;'>80%-90%  : Kemungkinan Besar</p>";
        echo "<p style='text-align:justify; border:none;'>91%-100% : Kemungkinan Besar</p>";
 
    }
  }
?></td>
  </tr>
  <tr  >
    <td>&nbsp;</td>
  </tr>
</table>
<div class="form-group text-center">
    <a href="cetak.php" class="btn btn-success btn-cetak">Cetak Hasil</a>
</div>

			</center>
		</div>
		<!-- akhir jumbotron -->

		<div class="col-sm-6 col-md-3">
	  
		</div>

		<br><br><br>
        <br><br><br>
		 <!-- Tombol Cetak -->
		
	</div>
	<br/>
	
	
	<div class="clearfix"></div>
		
	 <!-- footer  -->
	 <footer class="bg-primary text-white text-center py-4" style="background-color: #1D93B3;">
        <div class="container">
            <img class="paw-icon" src="assets/Paw.png" alt="Paw Icon">
            <p>&copy; 2024 Sistem Pakar Diagnosis Dini Penyakit Kulit Anjing Dengan Metode Dempster Shafer</p>
            <p>Developed by Putri Prema Paramitha | putriprema14@gmail.com</p>
        </div>
    </footer>
	
	<script>
        function resetForm() {
            // Jika ada form input yang perlu direset, tambahkan logika di sini
            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = false;
            });
        }
		
    </script>

</body>
</html>