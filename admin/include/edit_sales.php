<?php
if(isset($_GET['data'])){
	$kode_sales = $_GET['data'];
	$_SESSION['kode_sales']=$kode_sales;
	//get data barang
	$sql_m = "select `nama`, `sales_merk`, `kode_jenis` 
	from `sales` where `kode_sales` = '$kode_sales'";
	$query_m = mysqli_query($koneksi,$sql_m);
	while($data_m = mysqli_fetch_row($query_m)){
		$nama= $data_m[0];
		$sales_merk = $data_m[1];
		$kd_jenis = $data_m[2];
	}
}
?>  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Sales</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
			  <li class="breadcrumb-item"><a href="index.php?include=profil">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=sales">Data Sales</a></li>
              <li class="breadcrumb-item active">Edit Data Sales</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header" style="background-color:#B0C4DE">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Sales</h3>
        <div class="card-tools">
          <a href="index.php?include=sales" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
        enctype="multipart/form-data" action="index.php?include=konfirmasi_edit_sales">
        <div class="card-body">
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label">
            <span class="text-info"><i class="fas fa-user-circle"></i><u>
            Data Sales</u></span></label>
          </div>
          <div class="form-group row">
            <label for="kode_sales" class="col-sm-3 col-form-label">Kode Sales</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="kode_sales" 
            id="kode_sales" value="<?php echo $kode_sales;?>" readonly="readonly">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama Sales</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="nama" 
              id="nama" value="<?php echo $nama;?>">
              </div>
          </div>
		  <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Sales Merk</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="sales_merk" 
              id="sales_merk" value="<?php echo $sales_merk;?>">
              </div>
          </div>
          <div class="form-group row">
            <label for="jenis" 
            class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-7">
            <select class="form-control" id="jenis" name="jenis">
            <option value="0">- Pilih Jenis Kelamin -</option>
            <?php
            $sql_j = "select `kode_jenis`, `jenis` from `jenis` 
            order by `kode_jenis`";
            $query_j = mysqli_query($koneksi,$sql_j);
            while($data_j = mysqli_fetch_row($query_j)){
            $kode_jenis = $data_j[0];
            $jenis = $data_j[1];
            ?>
            <option value="<?php echo $kode_jenis;?>"
            <?php if($kode_jenis==$kd_jenis){?> selected="selected" 
            <?php }?>>
            <?php echo $jenis;?><?php }?>
            </select>
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