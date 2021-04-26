<!DOCTYPE html>
<html>
	<head>
		<title>Pencarian Matematika FMIPA Unpad </title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div id="canvas">
		<div id="header" >
				<table style="width:100%">
				  <tr>
				    <th style="width: 2px"><img src="gambar/logounpad.png" width="120"></th>
				    <th style="width: 2px"><img src="gambar/logoastlab.png" width="95"></th> 
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

		<?php 
		include 'dbcon.php';
		?>

		<div class="container">
			<form action="pencarian.php" method="get">   
   				<p style="font-size:18px; margin-left: 439px; width: 40%">Cari Buku  <input type="text" autofocus="autofocus"name="cari" style=	"width:230px; font-size:18px;" class="textboxclass" /> 
   				<input type="submit" style="font-size:18px; margin-top:-9px;" class="btn btn-primary" name="submit" value="Cari">	
   				</p> 
  			</form> 
	
	
				<?php 
					
					 if(isset($_GET['cari'])){
							?>

							<div class="alert alert-success">
								<center><h3>Hasil Pencarian : <?php echo $_GET['cari'] ?> </h3></center>
							</div>
				
							


							<table border="1" bgcolor="#FFFFFF" style="width: 100% ">
								<tr>
									<th style="width: 3%; height: 25px">No</th>
							  		<th style="width: 60%; height: 25px">Judul</th>
							  		<th style="width: 20%; height: 25px">Pengarang</th>
							  		<th style="width: 12%; height: 25px">Kode Buku</th>
							  		<th style="width: 5%; height: 25px">Wilayah</th>
								</tr>
								<?php

								$num_rec_per_page=15;
							
						    	$cari = $_GET['cari'];
						        $statement = "buku where judul like '%".$cari."%' or pengarang like '%".$cari."%' or 	kode_buku like '%".$cari."%' or wilayah like '%".$cari."%'" ; 														//query pencarian

								
								if (isset($_GET['page'])) 
						                { 
						             $page  = $_GET['page'];   //get value of page
						             
						                 } 
						         else { 
						                  $page=1;    //if first page then set 1
						              }
								
								//pagination trick or logic              
								$start_from = ($page-1) * $num_rec_per_page; 

								$psql = "select * from {$statement}"; 
								//run query and save result 
								$rs_result=mysqli_query($conn,$psql);
								//count total number of record in result
								$total_records = mysqli_num_rows($rs_result);

								//set how many pagination will be visible totalrecord/record per page
								$total_pages = ceil($total_records / $num_rec_per_page); 

								

								$data = mysqli_query($conn,"select * from {$statement} LIMIT {$start_from}, {$num_rec_per_page}");   // hasil yang diperoleh

														

						}else{
									 	$data = mysqli_query($conn,"select * from buku where judul like'tidak'");  
							 }
								if (isset($_GET['page'])) {	 
								$no = $start_from+1;
								}
								else{
									$no=1;
								}
								 while($d = mysqli_fetch_array($data)){

									?>
									<tr>
									  	<td><?php echo $no++; ?></td>
										<td style="height: 25px"><?php echo $d['judul']; ?>
										<td><?php echo $d['pengarang']; ?>
										<td><?php echo $d['kode_buku']; ?>
										<td style="text-align: center;"><?php echo $d['wilayah']; ?>
										</td>
									</tr>
							 		<?php 
							 	}?>
								

								</table>


								<?php 
								/* Nomor halaman hasil paging */
								if(isset($_GET['cari'])){
									//code for display pagination 

								
								echo "<a href='pencarian.php?page=1&cari=".$cari."'>".'|<'."</a> "; // Goto 1st page  

								for ($i=1; $i<=$total_pages; $i++) 
								        { 
								            echo "<a href='pencarian.php?page=".$i."&cari=".$cari."'>".$i."</a> "; 
								        } 
								echo "<a href='pencarian.php?page=$total_pages&cari=".$cari."'>".'>|'."</a> "; // Goto last page

//end of pagination code
								}
								?>		
				</div>
			</div>

		<div id="footer" style="margin-top: 31%">
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