<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="canvas">
	<div id="header" style="position: fixed;top: 0;width: 100%;margin: 0 auto">
				<table>
				  <tr>
				    <th style="width: 2px"><img src="gambar/logounpad.png" width="120"></th>
				    <th style="width: 2px"><img src="gambar/logoastlab.png" width="95"></th> 
				    <th><a href="index.php" style="color: white; font-weight: bold;text-decoration: none;
					-webkit-text-stroke:2px black;">Perpustakaan Matematika Unpad</a></th>
				  </tr>
				</table>
			</div>

			<div id="menu" style="position: fixed;top: 122px;width: 100%">
				<ul>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="pencarian.php">Cari Buku</a></li>
					<li><a href="daftar_buku.php">Daftar Buku</a></li>
					<li><a href="tentang.php">Tentang</a></li>
				</ul>
			</div>
	<?php 
		include 'dbcon.php';
	?>
	<div class="container" style="margin-top: 150px ">
	<br>
			<!-- Kalimat pembuka sebelum muncul tabel -->
			<div class="alert alert-success">
				<center><h3>Koleksi Perpustakaan Matematika FMIPA Unpad </h3></center>
			</div>
	<table border="1" bgcolor="#FFFFFF" style="width: 100% ">

		<th style="width: 3%; height: 25px">No</th>
  		<th style="width: 65%; height: 25px">Judul</th>
  		<th style="width: 20%; height: 25px">Pengarang</th>
  		<th>Kode Buku</th>
  		<th>Wilayah</th>
	</tr>
		<?php 
		 if(isset($_GET['cari'])){
		  $cari = $_GET['cari'];
		  $data = mysqli_query($conn,"select * from buku where judul like '%".$cari."%'");    
		 }else{
		  $data = mysqli_query($conn,"select * from buku");  
		 }
		 $no = 1;
		 while($d = mysqli_fetch_array($data)){
		 ?>
		 <tr>
		  <td><?php echo $no++; ?></td>
  		<td style="height: 25px;"><?php echo $d['judul']; ?>
  		<td><?php echo $d['pengarang']; ?>
  		<td><?php echo $d['kode_buku']; ?>
  		<td style="text-align: center;"><?php echo $d['wilayah']; ?>
  		</td>
 		</tr>
 		<?php } ?>
 	</table>
 	</div>
 	<div id="footer">
		<ul>
			<li><h1 style="color:black">Copyright© Ani, Dody, Faiqul, Wahyu</h1></li>
			<address>
				<p>
										Jln. Raya Bandung-Sumedang Km.21	
				<br>
										Jatinangor, Kab. Sumedang 45363, Jawa Barat
				</p>
				<p>			Telp. 022 7794696 &nbsp;&nbsp;&nbsp; Email. math@unpad.ac.id</p>
				<ul> 
					<li><a href="http://math.fmipa.unpad.ac.id">math.fmipa.unpad.ac.id</a></li>
					<li><a href="http://himatika.fmipa.unpad.ac.id">&nbsp;&nbsp;&nbsp; himatika.fmipa.unpad.ac.id</a></li>
					<li><a href="http://astlabmatematika.wordpress.com"> &nbsp;&nbsp;&nbsp; astlabmatematika.wordpress.com</a></li>
				</ul>
			</address>
		</ul>
	</div>
	</div>
</body>
</html>