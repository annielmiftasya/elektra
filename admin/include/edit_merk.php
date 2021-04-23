<?php
if(isset($_GET['data'])){
	$kode_merk = $_GET['data'];
	$_SESSION['kode_merk']=$kode_merk;
  
  //get data merk
	$sql_d = "select `merk` from `merk` where `kode_merk` = '$kode_merk'";
$query_d = mysqli_query($koneksi,$sql_d);
while($data_d = mysqli_fetch_row($query_d)){
     $merk= $data_d[0];
}
}
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Merk</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=profil">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=merk">Merk</a></li>
              <li class="breadcrumb-item active">Edit Merk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header" style="background-color:#B0C4DE">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Merk</h3>
        <div class="card-tools">
          <a href="index.php?include=merk" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <div class="col-sm-10">
        <?php if(!empty($_GET['notif'])){?>
          <?php if($_GET['notif']=="editkosong"){?>
              <div class="alert alert-danger" role="alert">
              Maaf data merk wajib di isi</div>
          <?php }?>
        <?php }?>
        </div>
      <form class="form-horizontal" action="index.php?include=konfirmasi_edit_merk" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group row">
            <label for="merk" 
             class="col-sm-3 col-form-label">merk</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" 
              id="merk" name="merk" value="<?php echo $merk;?>">
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