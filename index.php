	
<!DOCTYPE html>
<html>
	<head>
		<title>Perpustakaan Matematika FMIPA Unpad </title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>

		<?php 
			include 'dbcon.php';
		?>

		<div id="canvas">

			<div id="header">
				<table style="width:100%">
				  <tr>
				    <th style="width: 2px"><img src="gambar/logounpad.png" width="120"></th>
				    <th style="width: 1px"><img src="gambar/logoastlab.png" width="95"></th> 
				    <th><a href="index.php" style="color: white; font-weight: bold;text-decoration: none;
					-webkit-text-stroke:2px black;">Perpustakaan Matematika Unpad</a></th>
				  </tr>
				</table>
			</div>

			<div id="menu">
				<ul>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="pencarian.php">Cari Buku</a></li>
					<li><a href="daftar_buku.php">Daftar Buku</a></li>
					<li><a href="tentang.php">Tentang</a></li>
				</ul>
			</div>
			<div id="isi_beranda">
				<ul>
					<a href="pencarian.php?cari=Matematika&submit=Cari" style="border-radius: 60%;margin-left: 15%">Matematika</a>
					<a href="pencarian.php?cari=Statistika&submit=Cari" style="border-radius: 60%">Statistika</a>
					<a href="pencarian.php?cari=Komputer&submit=Cari" style="border-radius: 60%">Komputer</a>
					<br><br><br><br>
					<a href="pencarian.php?cari=Umum&submit=Cari" style="border-radius: 60%;margin-left: 27.5%">Umum</a>
					<a href="pencarian.php?cari=Skripsi&submit=Cari" style="border-radius: 60%">Skripsi</a>
				</ul>
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


