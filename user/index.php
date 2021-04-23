<?php 
	session_start();
	include("../koneksi/koneksi.php");
?>
<!DOCTYPE html>
<html>
   <head>
      <?php include("includes/head.php") ?>`
   </head>

   <?php
	//cek ada get include
	if(isset($_GET["include"])){
		$include = $_GET["include"];
		//cek apakah ada session id admin
   ?>
       

	 <body>
		<div>
		<div class="wrapper">
			<?php include("includes/header.php") ?>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
			<?php
				if($include=="detail_barang"){
					include("include/detail_barang.php");
				}
             ?>
					<!-- /.content -->
			</div>
					<!-- /.content-wrapper -->
			
		</div>
		</div>
		</br>
				<!-- ./wrapper -->
				
				<?php include("includes/script.php") ?>
				<?php include("includes/footer.php") ?>
			</body>
		<?php    
	}else{
	  //pemanggilan halaman form login
	  include("include/home.php");
	}
?>
</html>