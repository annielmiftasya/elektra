<?php
  if(isset($_GET['data'])) {
    $id_admin = $_GET['data'];
    $_SESSION['id_baru'] = $id_admin;
    //get data mahasiswa
    $sql_i = "SELECT `nama`, `email`, `username` ,`password`, `level` 
    FROM `admin` WHERE `id_admin` = '$id_admin'";

    $query_i = mysqli_query($koneksi, $sql_i);
    while($data_i = mysqli_fetch_row($query_i)) {
      $nama = $data_i[0];
      $email = $data_i[1];
      $username = $data_i[2];
      $password = $data_i[3];
      $level = $data_i[4];
    }
  }
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data User</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=profil">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=user">Data User</a></li>
              <li class="breadcrumb-item active">Edit Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info" >
      <div class="card-header"style="background-color:#B0C4DE">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data User</h3>
        <div class="card-tools">
          <a href="index.php?include=user" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="col-sm-10">
      <?php if(!empty($_GET['notif'])) {?>
        <?php if($_GET['notif']=="editKosong") {?>
          <div class="alert alert-danger" role="alert">
          Maaf Data User Wajib Diisi</div>
        <?php }?>
      <?php }?>
      </div>
      <!-- form start -->
      <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="index.php?include=konfirmasi_edit_user">
      <div class="card-body">
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label"><span class="text-info"><i class="fas fa-user-circle"></i> <u>Data User</u></span></label>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>">
              <input type="hidden" value="<?php echo $id_admin ?>" name="id_admin" id="id_admin">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="password" id="password" value="<?php echo $password; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="level" class="col-sm-3 col-form-label">Level</label>
            <div class="col-sm-7">
            <select class="form-control" id="level" name="level">
            <?php 
              $sql_l = "SELECT DISTINCT `level` FROM `admin`";
              $query_l = mysqli_query($koneksi, $sql_l);
              while($data_l = mysqli_fetch_row($query_l)){
              $level_u = $data_l[0];
              ?>
              <option><?php echo $level_u; ?></option>
              <?php } ?>
              </select>
            </div>
          </div>

          </div>
        </div>

      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>