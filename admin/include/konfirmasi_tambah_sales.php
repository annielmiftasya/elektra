<?php 
$kode_sales = $_POST['kode_sales'];
$nama = $_POST['nama'];
$sales_merk = $_POST['sales_merk'];
$kode_jenis = $_POST['jenis'];
 
$_SESSION['kode_sales']=$kode_sales;
$_SESSION['nama']=$nama;
$_SESSION['sales_merk']=$sales_merk;
$_SESSION['jenis']=$kode_jenis;

if(empty($kode_sales)){
header("Location:index.php?include=tambah_sales&notif=tambahkosong&jenis=kode_sales");
}else if(empty($nama)){
header("Location:index.php?include=tambah_sales&notif=tambahkosong&jenis=nama");
}else if(empty($sales_merk)){
  header("Location:index.php?include=tambah_sales&notif=tambahkosong&jenis=sales_merk");
}else if(empty($kode_jenis)){
header("Location:index.php?include=tambah_barang&
notif=tambahkosong&data=merk");
}else{
$sql = "insert into `sales` (`kode_sales`, `nama`, `sales_merk`, `kode_jenis`) 
values ('$kode_sales', '$nama', '$sales_merk', '$kode_jenis')";
mysqli_query($koneksi,$sql);


if(isset($_POST['jenis'])){
   foreach($_POST['jenis'] as $kode_jenis){
     $sql_i = "insert into `jenis` (`kode_sales`, `kode_jenis`) 
     values ('$kode_sales, '$kode_jenis')";
     mysqli_query($koneksi,$sql_i);
   }
}


unset($_SESSION['kode_sales']);
unset($_SESSION['nama']);
unset($_SESSION['sales_merk']);
unset($_SESSION['jenis']);
header("Location:index.php?include=sales&notif=tambahberhasil");
}
?>
