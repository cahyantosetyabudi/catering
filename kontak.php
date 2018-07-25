<?php 
	include"inc/config.php";
	include"layout/header.php";	
?> 
		 
		<div class="col-md-9">
			<div class="row">
			<div class="col-md-12">
			
			<h3><font color="black">Kontak Kami</h3>
				<hr>
				<div class="col-md-8 content-menu" style="margin-top:-20px;">
				 
				 <form action="lihatkontak.php" method="post" enctype="multipart/form-data">
				 <font color="black">
						<label>Nama</label><br>
						<input type="text" class="form-control" name="nama" required><br>
						<label>Email</label><br>
						<input type="email" class="form-control" name="email" required><br>
						<label>Subjek</label><br>
						<input type="text" class="form-control" name="subjek" required><br>
						<label>Pesan</label><br>
						<textarea class="form-control" name="pesan" required></textarea><br>
						<input type="submit" name="form-input" value="Simpan" class="btn btn-success"> 
						<a href="lihatkontak.php"> Lihat Daftar Kontak</a>
					</form>
				 
				</div>   
				 
					
				
			</div>
			</div> 
		</div> 	
<?php include"layout/footer.php"; ?>