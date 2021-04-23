<?php 
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

if(empty($nama)){
	header("Location:index.php?include=tambah_user&notif=tambahkosong&jenis=nama");
}else if(empty($username)){
	header("Location:index.php?include=tambah_user&notif=tambahkosong&jenis=username");
}if(empty($password)){
	header("Location:index.php?include=tambah_user&notif=tambahkosong&jenis=password");
}if(empty($level)){
	header("Location:index.php?include=tambah_user&notif=tambahkosong&jenis=level");
}if(empty($email)){
	header("Location:index.php?include=tambah_user&notif=tambahkosong&jenis=email");
}else{
	$sql = "insert into `admin` (`nama`,`email`,`username`,`password`,`level`) 
	values ('$nama','$email','$username','$password','$level')";
	mysqli_query($koneksi,$sql);
	header("Location:index.php?include=user&notif=tambahberhasil");
 }
?>
