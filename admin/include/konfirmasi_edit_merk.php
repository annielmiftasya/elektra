<?php
if(isset($_SESSION['kode_merk'])){
  $kode_merk = $_SESSION['kode_merk'];
  $merk = $_POST['merk'];
 
   if(empty($merk)){
 	    header("Location:index.php?include=edit_merk&data=".$kode_merk."&notif=editkosong");
  }else{
    $lokasi_file = $_FILES['foto']['tmp_name'];
		$nama_file = $merk.".jpg";
		$direktori = 'foto/'.$nama_file;
		if(move_uploaded_file($lokasi_file,$direktori)){
	$sql = "update `merk` set `merk`='$merk',`foto`='$nama_file' 
	where `kode_merk`='$kode_merk'";
	mysqli_query($koneksi,$sql);
}
header("Location:index.php?include=merk&notif=editberhasil");
}
}
?>
