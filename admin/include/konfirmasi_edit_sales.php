<?php 
	if(isset($_SESSION['kode_sales'])){
		$kode_sales = $_SESSION['kode_sales'];
		$nama = $_POST['nama'];
		$sales_merk = $_POST['sales_merk'];
		$kode_jenis= $_POST['jenis'];
		
		$_SESSION['nama']=$nama;
		$_SESSION['sales_merk']=$sales_merk;
		$_SESSION['jenis']=$kode_jenis;	
	if(empty($kode_sales)){
		header("Location:index.php?include=edit_sales&data=".$kode_sales."&notif=editkosong&jenis=kode_sales");
	}else if(empty($nama)){
		header("Location:index.php?include=edit_sales&data=".$kode_sales."&notif=editkosong&jenis=nama");
	}else if(empty($sales_merk)){
		header("Location:index.php?include=edit_sales&data=".$kode_sales."&notif=editkosong&jenis=sales_merk");
	}else if(empty($kode_jenis)){
		header("Location:index.php?include=edit_sales&data=".$kode_sales."&notif=editkosong&jenis=jenis");
	}else{
		
			$sql = "update `sales` set `nama`='$nama',`sales_merk`='$sales_merk',`kode_jenis`='$kode_jenis' where `kode_sales` = '$kode_sales'";
			mysqli_query($koneksi,$sql);
				
		unset($_SESSION['kode_sales']);
		unset($_SESSION['nama']);
		unset($_SESSION['sales_merk']);
		unset($_SESSION['kode_jenis']);
		header("Location:index.php?include=sales&notif=editberhasil");
	   }
	}
?>