<?php 
$kategori = $_POST['kategori'];
if(empty($kategori)){
	header("Location:index.php?include=tambah_kategori&notif=tambahkosong");
}else{
	$lokasi_file = $_FILES['foto']['tmp_name'];
		$nama_file = $kategori.".jpg";
		$direktori = 'foto/'.$nama_file;
		if(move_uploaded_file($lokasi_file,$direktori)){
	$sql = "insert into `kategori` (`kategori`,`foto`) 
	values ('$kategori','$nama_file')";
	mysqli_query($koneksi,$sql);
		}
	header("Location:index.php?include=kategori&notif=tambahberhasil");	
}
?>
