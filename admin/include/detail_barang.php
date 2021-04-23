  <?php 
  if(isset($_GET['data'])){
    $kode_barang = $_GET['data'];
    //get data barang
    $sql_m = "select `m`.`nama`, `j`.`merk`, `m`.`foto`, `m`.`deskripsi` 
    from `barang` `m` inner join `merk` `j` 
    on `m`.`kode_merk` = `j`.`kode_merk` 
   where `m`.`kode_barang` = '$kode_barang'";
   $query_m = mysqli_query($koneksi,$sql_m);
   while($data_m = mysqli_fetch_row($query_m)){
     $nama= $data_m[0];
     $merk = $data_m[1];
     $foto = $data_m[2];
     $deskripsi = $data_m[3];
    } 
 }
 ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data Produk</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=profil">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=barang">Data Barang</a></li>
              <li class="breadcrumb-item active">Detail Data Produk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header" style="background-color:#B0C4DE">
                <div class="card-tools">
                  <a href="index.php?include=barang" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table class="table table-bordered">
  <tbody>  
     <tr class="bg-dark">
       <td colspan="2"><i class="fas fa-user-circle"></i> <strong>
       Profil Produk<strong></td>
     </tr>               
     <tr>
       <td width="20%"><strong>Kode Barang<strong></td>
       <td width="80%"><?php echo $kode_barang;?></td>
  </tr>                 
  <tr>
     <td width="20%"><strong>Nama<strong></td>
     <td width="80%"><?php echo $nama;?></td>
  </tr>                 
  <tr>
     <td width="20%"><strong>Merk<strong></td>
     <td width="80%"><?php echo $merk;?></td>
  </tr> 
  <tr>
     <td><strong>Foto Produk<strong></td>
     <td><img src="foto/<?php echo $foto;?>" 
     class="img-fluid" width="200px;"></td>
  </tr>
  <tr>
     <td><strong>Deskripsi<strong></td>
     <td><?php echo $deskripsi;?></td>
  </tr>
  <tr>
     <td><strong>Kategori<strong></td>
     <td>
         <ul>
         <?php
         //get Kategori
         $sql_h = "select `k`.`kategori` from `kategori_barang` `hm`
                   inner join `kategori` `k` 
                   on `k`.`kode_kategori` = `hm`.`kode_kategori` 
                   where `hm`.`kode_barang`='$kode_barang'";
                   $query_h = mysqli_query($koneksi,$sql_h);
                   while($data_h = mysqli_fetch_row($query_h)){
                   $kategori= $data_h[0];
                   ?>
                     <li><?php echo $kategori;?></li>
                   <?php }?>
               </ul>
            </td>
        </tr>
     </tbody>
 </table>

              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>