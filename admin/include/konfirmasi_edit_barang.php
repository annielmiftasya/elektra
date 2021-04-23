<?php 
	if(isset($_SESSION['kode_barang'])){
		$kode_barang = $_SESSION['kode_barang'];
		$nama = $_POST['nama'];
		$kode_merk = $_POST['merk'];	 
		$_SESSION['nama']=$nama;
		$_SESSION['merk']=$kode_merk;	
	if(empty($kode_barang)){
		header("Location:index.php?include=edit_barang&data=".$kode_barang."&notif=editkosong&jenis=kode_barang");
	}else if(empty($nama)){
		header("Location:index.php?include=edit_barang&data=".$kode_barang."&notif=editkosong&jenis=nama");
	}else if(empty($kode_merk)){
		header("Location:index.php?include=edit_barang&data=".$kode_barang."&notif=editkosong&jenis=merk");
	}else{
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$nama_file = $kode_barang.".jpg";
		$direktori = 'foto/'.$nama_file;
		if(move_uploaded_file($lokasi_file,$direktori)){
			$sql = "update `barang` set `nama`='$nama',`kode_merk`='$kode_merk', `foto`='$nama_file' where `kode_barang` = '$kode_barang'";
			mysqli_query($koneksi,$sql);
		}else{
			$sql = "update `barang` set `nama`='$nama',`kode_merk`='$kode_merk'where `kode_barang` = '$kode_barang'";
			mysqli_query($koneksi,$sql);
		}
		//hapus kategori
		$sql_d = "delete from `kategori_barang` where `kode_barang`='$kode_barang'";
		mysqli_query($koneksi,$sql_d);
		//tambah kategori
		if(isset($_POST['kategori'])){
		  foreach($_POST['kategori'] as $kode_kategori){
			$sql_i = "insert into `kategori_barang`(`kode_barang`, `kode_kategori`)
			values ('$kode_barang', '$kode_kategori')";
		     mysqli_query($koneksi,$sql_i);
		  }
		}
		unset($_SESSION['kode_barang']);
		unset($_SESSION['nama']);
		unset($_SESSION['merk']);
		header("Location:index.php?include=barang&notif=editberhasil");
	   }
	}
?>