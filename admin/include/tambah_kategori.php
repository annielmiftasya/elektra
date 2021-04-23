    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Kategori Elektronik</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=profil">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=kategori">Kategori Elektronik</a></li>
              <li class="breadcrumb-item active">Tambah Kategori Elektronik</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header" style="background-color:#B0C4DE">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Kategori Elektronik</h3>
        <div class="card-tools">
          <a href="index.php?include=kategori" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <div class="col-sm-10">
        <?php if(!empty($_GET['notif'])){?>
          <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">
            Maaf data kategori wajib di isi</div>
        <?php }?>
      <?php }?>
      </div>

      <form class="form-horizontal" method="post"  enctype="multipart/form-data"
      action="index.php?include=konfirmasi_tambah_kategori">
       <div class="card-body">
          <div class="form-group row">
            <label for="kategori" 
            class="col-sm-3 col-form-label">Kategori Elektronik</label>
            <div class="col-sm-7">
              <input type="text"  name="kategori"class="form-control" id="kategori" value="">
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
            <button type="submit" class="btn btn-info 
            float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        
        <!-- /.card-footer -->
      </form>

    </div>
    <!-- /.card -->

    </section>