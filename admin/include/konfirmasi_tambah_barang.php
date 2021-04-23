<?php 
$kode_barang = $_POST['kode_barang'];
$nama = $_POST['nama'];
$kode_merk = $_POST['merk'];
$kode_kategori = $_POST['kategori']; 
$deskripsi = $_POST['deskripsi']; 

$_SESSION['kode_barang']=$kode_barang;
$_SESSION['nama']=$nama;
$_SESSION['merk']=$kode_merk;
$_SESSION['kategori']=$kode_kategori;
$_SESSION['deskripsi']=$deskripsi;
if(empty($kode_barang)){
header("Location:index.php?include=tambah_barang&notif=tambahkosong&jenis=kode_barang");
}else if(empty($nama)){
header("Location:index.php?include=tambah_barang&notif=tambahkosong&jenis=nama");
}else if(empty($kode_merk)){
header("Location:index.php?include=tambah_barang&notif=tambahkosong&data=merk");
}else if(empty($kode_kategori)){
header("Location:index.php?include=tambah_barang&notif=tambahkosong&data=kategori");
}else if(empty($deskripsi)){
  header("Location:index.php?include=tambah_barang&notif=tambahkosong&data=deskripsi");
}else{
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $kode_barang.".jpg";
$direktori = 'foto/'.$nama_file;
if(move_uploaded_file($lokasi_file,$direktori)){
$sql = "insert into `barang` 
(`kode_barang`, `nama`, `kode_merk`, `foto`, `deskripsi`) 
values ('$kode_barang', '$nama', '$kode_merk', '$nama_file', '$deskripsi')";
mysqli_query($koneksi,$sql);
}else{
$sql = "insert into `barang` (`kode_barang`, `nama`, `kode_merk`) 
values ('$kode_barang', '$nama', '$kode_merk')";
mysqli_query($koneksi,$sql);
}
if(isset($_POST['kategori'])){
   foreach($_POST['kategori'] as $kode_kategori){
     $sql_i = "insert into `kategori_barang` (`kode_barang`, `kode_kategori`) 
     values ('$kode_barang', '$kode_kategori')";
     mysqli_query($koneksi,$sql_i);
   }
}
unset($_SESSION['kode_barang']);
unset($_SESSION['nama']);
unset($_SESSION['merk']);
unset($_SESSION['kategori']);
header("Location:index.php?include=barang&notif=tambahberhasil");
}
?>
