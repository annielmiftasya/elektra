<?php
if(isset($_SESSION['kode_kategori'])){
  $kode_kategori = $_SESSION['kode_kategori'];
  $kategori = $_POST['kategori'];

   if(empty($kategori)){
 	    header("Location:index.php?include=edit_kategori&data=".$kode_kategori."&notif=editkosong");
  }else{
    $lokasi_file = $_FILES['foto']['tmp_name'];
		$nama_file = $kategori.".jpg";
		$direktori = 'foto/'.$nama_file;
		if(move_uploaded_file($lokasi_file,$direktori)){
	$sql = "update `kategori` set `kategori`='$kategori',`foto`='$nama_file' 
	where `kode_kategori`='$kode_kategori'";
	mysqli_query($koneksi,$sql);
}
header("Location:index.php?include=kategori&notif=editberhasil");
}
}
?>
