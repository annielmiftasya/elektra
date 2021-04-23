<?php 
	session_start();
	include("../koneksi/koneksi.php");
	if(isset($_GET["include"])){
		$include = $_GET["include"];
		if($include=="konfirmasi_login"){
			include("include/konfirmasi_login.php");
		}else if($include=="sign_out"){
			include("include/sign_out.php");
		}else if($include=="konfirmasi_tambah_kategori"){
			include("include/konfirmasi_tambah_kategori.php");
		}else if($include=="konfirmasi_edit_kategori"){
			include("include/konfirmasi_edit_kategori.php");
		}else if($include=="konfirmasi_tambah_merk"){
			include("include/konfirmasi_tambah_merk.php");
		}else if($include=="konfirmasi_edit_merk"){
			include("include/konfirmasi_edit_merk.php");
		}else if($include=="konfirmasi_edit_profil"){
			include("include/konfirmasi_edit_profil.php");
		}else if($include=="konfirmasi_tambah_barang"){
			include("include/konfirmasi_tambah_barang.php");
		}else if($include=="konfirmasi_edit_barang"){
			include("include/konfirmasi_edit_barang.php");
		}else if($include=="konfirmasi_tambah_sales"){
			include("include/konfirmasi_tambah_sales.php");
		}else if($include=="konfirmasi_edit_sales"){
			include("include/konfirmasi_edit_sales.php");
		}else if($include=="konfirmasi_tambah_user"){
			include("include/konfirmasi_tambah_user.php");
		}else if($include=="konfirmasi_edit_user"){
			include("include/konfirmasi_edit_user.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?>
</head>
<?php
	//cek ada get include
	if(isset($_GET["include"])){
		$include = $_GET["include"];
		//cek apakah ada session id admin
		if(isset($_SESSION['id_admin'])){
		//pemanggilan ke halaman-halaman menu admin
	    ?>
			<body class="hold-transition sidebar-mini layout-fixed">
				<div class="wrapper">
					<?php include("includes/header.php") ?>
					<?php include("includes/sidebar.php") ?>
					<!-- Content Wrapper. Contains page content -->
					<div class="content-wrapper">
						<?php
						if($include=="kategori"){
							include("include/kategori.php");
						}else if($include=="tambah_kategori"){
	         				include("include/tambah_kategori.php");
						}else if($include=="edit_kategori"){
							include("include/edit_kategori.php");
						}else if($include=="merk"){
							include("include/merk.php");
						}else if($include=="tambah_merk"){
	         				include("include/tambah_merk.php");
						}else if($include=="edit_merk"){
							include("include/edit_merk.php");
						}else if($include=="edit_profil"){
							include("include/edit_profil.php");
						}else if($include=="barang"){
							include("include/barang.php");
						}else if($include=="tambah_barang"){
	         				include("include/tambah_barang.php");
						}else if($include=="edit_barang"){
							include("include/edit_barang.php");
						}else if($include=="detail_barang"){
							include("include/detail_barang.php");
						}else if($include=="sales"){
							include("include/sales.php");
						}else if($include=="tambah_sales"){
	         				include("include/tambah_sales.php");
						}else if($include=="edit_sales"){
							include("include/edit_sales.php");
						}else if($include=="user"){
							include("include/user.php");
						}else if($include=="tambah_user"){
	         				include("include/tambah_user.php");
						}else if($include=="edit_user"){
							include("include/edit_user.php");
						}else{
							include("include/profil.php");
						}?>
					<!-- /.content -->
					</div>
					<!-- /.content-wrapper -->
					<?php include("includes/footer.php") ?>
				</div>
				<!-- ./wrapper -->
				<?php include("includes/script.php") ?>
			</body>
		<?php    
	  }else{
	    //pemanggilan halaman form login
		include("include/login.php");
		}  
	}else{
	  //pemanggilan halaman form login
	  include("include/login.php");
	}
?>

</html>