<?php
if(isset($_GET['data'])){
	$kode_barang = $_GET['data'];
	$_SESSION['kode_barang']=$kode_barang;
	//get data barang
	$sql_m = "select `nama`, `kode_merk`, `foto`, `deskripsi`  
	from `barang` where `kode_barang` = '$kode_barang'";
	$query_m = mysqli_query($koneksi,$sql_m);
	while($data_m = mysqli_fetch_row($query_m)){
		$nama= $data_m[0];
		$kd_jur = $data_m[1];
		$foto = $data_m[2];
		$deskripsi = $data_m[3];
	}
	//get kategori
	$sql_h = "select `kode_kategori` from `kategori_barang` 
        where `kode_barang`='$kode_barang'";
	$query_h = mysqli_query($koneksi,$sql_h);
	$array_kategori = array();
	while($data_h = mysqli_fetch_row($query_h)){
		$kategori= $data_h[0];
		$array_kategori[] = $kategori;
	} 
}
?>  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Barang</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=profil">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=barang">Data Barang</a></li>
              <li class="breadcrumb-item active">Edit Data Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header" style="background-color:#B0C4DE">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Barang</h3>
        <div class="card-tools">
          <a href="index.php?include=barang" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        <div class="col-sm-10">
        <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
        <?php if($_GET['notif']=="editkosong"){?>
        <div class="alert alert-danger" role="alert">Maaf data 
        <?php echo $_GET['jenis'];?> wajib di isi</div>
        <?php }?>
        <?php }?>
        </div>
      <form class="form-horizontal" method="post" 
        enctype="multipart/form-data" action="index.php?include=konfirmasi_edit_barang">
        <div class="card-body">
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label">
            <span class="text-info"><i class="fas fa-user-circle"></i><u>
            Data Barang</u></span></label>
          </div>
          <div class="form-group row">
            <label for="kode_barang" class="col-sm-3 col-form-label">Kode Barang</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="kode_barang" 
            id="kode_barang" value="<?php echo $kode_barang;?>" readonly="readonly">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama Barang</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="nama" 
              id="nama" value="<?php echo $nama;?>">
              </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="deskripsi" 
              id="deskripsi" value="<?php echo $deskripsi;?>">
              </div>
          </div>
          <div class="form-group row">
            <label for="merk" 
            class="col-sm-3 col-form-label">Merk</label>
            <div class="col-sm-7">
            <select class="form-control" id="merk" name="merk">
            <option value="0">- Pilih Merk -</option>
            <?php
            $sql_j = "select `kode_merk`, `merk` from `merk` 
            order by `kode_merk`";
            $query_j = mysqli_query($koneksi,$sql_j);
            while($data_j = mysqli_fetch_row($query_j)){
            $kode_merk = $data_j[0];
            $merk = $data_j[1];
            ?>
            <option value="<?php echo $kode_merk;?>"
            <?php if($kode_merk==$kd_jur){?> selected="selected" 
            <?php }?>>
            <?php echo $merk;?><?php }?>
            </select>
            </div>
          </div>
          <div class="form-group row">
              <label for="foto" class="col-sm-3 col-form-label">Foto</label>
              <div class="col-sm-7">
              <div class="custom-file">
              <input type="file" class="custom-file-input" 
              name="foto" id="customFile">
              <label class="custom-file-label" for="customFile">
              Choose file</label>
              </div>  
              </div>
            </div>
            <div class="form-group row">
              <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
              <div class="col-sm-7">
              <?php 
              $sql_h = "select `kode_kategori`, `kategori` from `kategori` 
              order by `kode_kategori`";
              $query_h = mysqli_query($koneksi,$sql_h);
              $jum_kategori = mysqli_num_rows($query_h);
              while($data_h = mysqli_fetch_row($query_h)){
              $kode_kategori = $data_h[0];
              $kategori = $data_h[1];
            ?>
            <input type="radio"  name="kategori[]"
            value="<?php echo $kode_kategori; ?>"
            <?php if(in_array($kode_kategori, $array_kategori)){?>checked="checked" 
            <?php }?>/> 
            <?php echo $kategori; ?></br>
            <?php }?>
            </div>  
            </div>
            </div>
          </div>
        </div>
        
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
          <button type="submit" class="btn btn-info float-right">
          <i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
        </form>

    </div>
    <!-- /.card -->

    </section>