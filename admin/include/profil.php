<?php
    if(isset($_SESSION['id_admin'])){
    $id_admin = $_SESSION['id_admin'];
    //get profil
    $sql = "select `nama`, `email`, `level` from `admin`
    where `id_admin`='$id_admin'";
    //echo $sql;
    $query = mysqli_query($koneksi, $sql);
    while($data = mysqli_fetch_row($query)){
      $nama = $data[0];
      $email = $data[1];
      $level = $data[2];
    }
?>
  <style>
    .work:hover {
    box-shadow: 0px 2px 10px rgba(21, 67, 96);
    height: auto;
    border-radius: auto;
}
  </style>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-chart-area ml-2"></i> Dashboard</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="row ml-3 "data-aos="fade-down">
      <div class="col-3">
      <div class="card text-dark bg-white mb-3" style="max-width: 18rem; height:110px;">
        <div class="card-body">
          <div class="row">
            <div class="col-8">
          <h5 class="card-title">Data Barang</h5>
          <?php
          // mengambil data barang
          $data_barang = mysqli_query($koneksi,"SELECT * FROM barang");
          // menghitung data barang
          $jumlah_barang = mysqli_num_rows($data_barang);
          ?><br>
          <h3><b><?php echo $jumlah_barang; ?></b></h3>
        </div>
        <div class="col-4">
          <img src="include/satu.jpg" style="width:100px; margin-left:-30px;" >
        </div>
        </div>
        </div>
      </div>
      </div>
      <div class="col-3">
      <div class="card text-dark bg-white mb-3" style="max-width: 18rem;  height:110px;">
        <div class="card-body">
        <div class="row">
            <div class="col-8">
          <h5 class="card-title">Kategori Elektronik</h5>
          <?php
          // mengambil data kategori
          $data_kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
          // menghitung data kategori
          $jumlah_kategori = mysqli_num_rows($data_kategori);
          ?><br>
          <h3><b><?php echo $jumlah_kategori; ?></b></h3>
        </div>
        <div class="col-4">
          <img src="include/empat.jpg" style="width:120px; margin-left:-35px;">
        </div>
        </div>
        </div>
      </div>
      </div>
      <div class="col-3">
      <div class="card text-dark bg-white mb-3" style="max-width: 18rem;  height:110px;">
        <div class="card-body">
        <div class="row">
            <div class="col-8">
          <h5 class="card-title">Data Merk</h5>
          <?php
          // mengambil data merk
          $data_merk = mysqli_query($koneksi,"SELECT * FROM merk");
          // menghitung data merk
          $jumlah_merk = mysqli_num_rows($data_merk);
          ?><br>
          <h3><b><?php echo $jumlah_merk; ?></b></h3>
        </div>
        <div class="col-4">
          <img src="include/tiga.jpg" style="width:140px; margin-left:-60px;">
        </div>
        </div>
        </div>
      </div>
      </div>
      <div class="col-3">
      <div class="card text-dark bg-white mb-3" style="max-width: 18rem;  height:110px;">
        <div class="card-body">
        <div class="row ">
            <div class="col-8">
          <h5 class="card-title">Jumlah User</h5>
          <?php
          // mengambil data user
          $data_admin = mysqli_query($koneksi,"SELECT * FROM admin");
          // menghitung data user
          $jumlah_admin = mysqli_num_rows($data_admin);
          ?><br>
          <h3><b><?php echo $jumlah_admin; ?></b></h3>
        </div>
        <div class="col-4">
          <img src="include/dua.jpg" style="width:80px; margin-left:-25px;">
        </div>
        </div>
        </div>
      </div>
      </div>
    <div class="row mt-3" data-aos="fade-right">
      <div class="col-3" style="margin-left:20px;">
    <section class="content">
            <div class="card work">
              <div class="card-header text-center">
                <img src="include/profil.jpg" style="width:180px;" class="mt-2">
                <!-- <p style="position: absolute; margin-left:5px; margin-top:-75px; font-family: 'Montserrat', sans-serif; font-style: inherit; font-size:25px; color:orange;"><b><?php echo $nama;?></b></p>
                <p style="position: absolute; margin-left:5px; margin-top:-35px; font-family: 'Montserrat', sans-serif; font-style: inherit; color:white; background-color:orange;"> <?php echo $level;?> </p> -->
                <div class="card-tools">
                </div>
              </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="col-sm-12">
              <?php if(!empty($_GET['notif'])){
                  if($_GET['notif']=="editberhasil"){?>
                      <div class="alert alert-success" role="alert">
                      Data Berhasil Diubah</div>
                  <?php }?>
              <?php }?>
          </div>
          
            
                  <table class="table ">
                      <tbody>  
                          <tr>
                            <td colspan="2"><i class="fas fa-user-circle"></i>
                            <strong>Profil<strong></td>
                          </tr>                 
                          <tr>
                            <td width="30%"><strong>Nama<strong></td>
                            <td width="70%"><?php echo $nama;?></td>
                        </tr>                
                        <tr>
                            <td width="30%"><strong>Email<strong></td>
                            <td width="7 0%"><?php echo $email;?></td>
                          </tr>
                      </tbody>
                  </table> <br>  
                  <a href="index.php?include=edit_profil" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit Profil</a>

              </div>
            <!-- /.card-body -->
              <div class="card-footer clearfix" style="height:3px;">&nbsp;</div>
              <!-- /.card -->
            </div>
                  </div>
            <div class="col-3 ml-3">
                    <!-- card anggota -->
                    <div class="card work mb-3" style="width: 340px; ">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="include/ada.jpg" class="card-img"  >
                        </div>
                        <div class="col-md-8">
                          <div class="card-body ml-2">
                            <h5 class="card-title text-primary">Penanggung Jawab 1</h5>
                            <p class="card-text">Arhansyah Atthariq Putra Priandika</p>
                            <p class="card-text"><small class="text-muted">NIM : 193140914111019</small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card work mb-3" style="width: 340px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="include/ir.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Penanggung Jawab 2</h5>
                            <p class="card-text">Irfandy Athaqillah Naaif</p>
                            <p class="card-text"><small class="text-muted">NIM : 193140914111032</small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card work mb-3" style="width: 340px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="include/tasya.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Penanggung Jawab 3</h5>
                            <p class="card-text">Magdalisa Anniel Miftasya</p>
                            <p class="card-text"><small class="text-muted">NIM : 193140914111036</small></p>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="col-5 ml-5">
            <div class="card work ml-3" style="width: 33rem; height: 34rem;">
            <div class="card-header">
              <p class="card-title " style="font-size:15px; color:#BEBEBE;"><b>Jumlah Barang</b></p><br>
              <h1 class="text-warning">Grafik Stock Barang</h1>
                  </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-1"></div>
              <div class="col-10">
                <p>Smartphone</p>
                <div class="progress mt-2">
                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
                  </div> <br>
                  <p>Tablet</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">70%</div>
                  </div> <br>
                  <p>Laptop</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">80%</div>
                  </div><br>
                  <p>Kamera</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">80%</div>
                  </div><br>
                  <p>TV</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-dark progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">60%</div>
                  </div> 
            </div>
          </div>
                  </div>
          </div>
          </div>  
            </div>
            </div>
            </div>
            
    </section>
<?php }?>