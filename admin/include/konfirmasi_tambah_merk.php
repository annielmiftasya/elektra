<?php 
$merk = $_POST['merk'];
if(empty($merk)){
	header("Location:index.php?include=tambah_merk&notif=tambahkosong");
}else{
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$nama_file = $merk.".jpg";
		$direktori = 'foto/'.$nama_file;
		if(move_uploaded_file($lokasi_file,$direktori)){
			$sql = "insert into `merk` (`merk`,`foto`) 
			values ('$merk','$nama_file')";
			mysqli_query($koneksi,$sql);
		}
		else{
			$sql = "insert into `merk` (`merk`) 
			values ('$merk')";
			mysqli_query($koneksi,$sql);
		}
		header("Location:index.php?include=merk&notif=tambahberhasil");	

}
?>
