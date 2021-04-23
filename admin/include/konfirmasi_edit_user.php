<?php
if(isset($_SESSION['id_baru'])){
  $id_baru = $_SESSION['id_baru'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];

   if(empty($nama)){
    header("Location:index.php?include=edit_user&data=".$id_baru."&notif=editKosong");
  } else if (empty($email)) {
    header("Location:index.php?include=edit_user&data=".$id_baru."&notif=editKosong");
  } else if (empty($username)) {
    header("Location:index.php?include=edit_user&data=".$id_baru."&notif=editKosong");
  } else if (empty($password)) {
    header("Location:index.php?include=edit_user&data=".$id_baru."&notif=editKosong");
  } else{
    $sql = "UPDATE `admin` SET `nama` = '$nama', `email` = '$email', `username` = '$username', `password` = MD5('$password'), `level` = '$level' 
    WHERE `admin`.`id_admin` = $id_baru";
    mysqli_query($koneksi, $sql);

    header("Location:index.php?include=user&notif=editberhasil");
  }
}
?>