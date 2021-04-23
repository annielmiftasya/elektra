<?php 
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	 if($_GET['aksi']=='hapus'){
      $kode_barang = $_GET['data'];
      //get foto
      $sql_f = "SELECT `foto` FROM `barang` WHERE `kode_barang`='$kode_barang'";
      $query_f = mysqli_query($koneksi,$sql_f);
      $jumlah_f = mysqli_num_rows($query_f);
    if($jumlah_f>0){
      while($data_f = mysqli_fetch_row($query_f)){
        $foto = $data_f[0];
        //menghapus foto dalam folder foto
        unlink("foto/$foto");
      }
    }
    //hapus kategori
    $sql_dh = "delete from `kategori_barang` where `kode_barang` = '$kode_barang'";
    mysqli_query($koneksi,$sql_dh);
    //hapus data barang
    $sql_dm = "delete from `barang` where `kode_barang` = '$kode_barang'";
    mysqli_query($koneksi,$sql_dm);
  }
}
?>
<?php
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$kode_barang = $_GET['data'];
		//hapus barang
		$sql_dh = "delete from `barang` 
		where `kode_barang` = '$kode_barang'";
    mysqli_query($koneksi,$sql_dh);  
  }
}
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Data barang</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=profil">Home</a></li>
              <li class="breadcrumb-item active">Data barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header" style="background-color:#B0C4DE">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Data barang</h3>
                <div class="card-tools">
                  <a href="index.php?include=tambah_barang" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah barang</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-12">
                <form method="post" action="index.php?include=barang"> 
                  <div class="row">
                    <div class="col-md-4 bottom-10">
                        <input type="text" class="form-control" 
                        id="kata_kunci" name="katakunci">
                    </div>
                    <div class="col-md-5 bottom-10">
                        <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>  Search</button>
                  </div>
                  </div><!-- .row -->
                    </form>
                </div>
                <br><br>
                <div class="col-sm-12">
                  <?php if(!empty($_GET['notif'])){?>
                    <?php if($_GET['notif']=="tambahberhasil"){?>
                        <div class="alert alert-success" role="alert">
                        Data Berhasil Ditambahkan</div>
                    <?php } else if($_GET['notif']=="editberhasil"){?>
                      <div class="alert alert-success" role="alert">
                      Data Berhasil Diubah</div>
                    <?php }?>
                <?php }?>
                </div>
                <table class="table table-bordered text-center">
                    <thead>
                    <tr class="bg-dark">
                    <th width="5%">No</th>
                    <th width="20%">Kode Barang</th>
                    <th width="40%">Nama</th>
                    <th width="20%">Kode Merk</th>
                    <th width="15%"> <center>Aksi</center> </th>
                  </tr>    
                    <tbody>              
                    <?php
                    $batas = 2;
                    if(!isset($_GET['halaman'])){
                         $posisi = 0;
                         $halaman = 1;
                    }else{
                         $halaman = $_GET['halaman'];
                         $posisi = ($halaman-1) * $batas;
                    }
                    

                    //menampilkan data barang                    
                    $sql_b = "select `m`.`kode_barang`, `m`.`nama`, `j`.`merk` 
                            from `barang` `m`
                            inner join `merk` `j` 
                            on `m`.`kode_merk` = `j`.`kode_merk` ";
                    if (isset($_POST["katakunci"])){
                      $katakunci_b = $_POST["katakunci"];
                      $_SESSION['katakunci'] = $katakunci_b;
                      $sql_b .= " where `kode_barang` LIKE '%$katakunci_b%' 
                                  OR `nama` LIKE '%$katakunci_b%'";
                    } 
                    $sql_b .= " order by `kode_barang` limit $posisi, $batas ";

                    $query_b = mysqli_query($koneksi,$sql_b);
                    $no = $posisi + 1;
                    while($data_b = mysqli_fetch_row($query_b)){
                      $kode_barang = $data_b[0];
                      $nama = $data_b[1];
                      $merk = $data_b[2];
                      ?>
                      <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $kode_barang;?></td>
                          <td><?php echo $nama;?></td>
                          <td><?php echo $merk;?></td>
                          <td align ="center">
                          <a href="index.php?include=edit_barang&data=<?php echo $kode_barang;?>" 
                          class="btn btn-xs btn-info" title="Edit">
                          <i class="fas fa-edit"></i></a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data 
                          <?php echo $kode_barang.' - '.$nama; ?>?'))
                          window.location.href = 'index.php?include=barang&aksi=hapus&data=<?php echo $kode_barang;?>'" 
                          class="btn btn-xs btn-warning">
                          <i class="fas fa-trash" title="Hapus"></i></a>
                          <a href="index.php?include=detail_barang&data=<?php echo $kode_barang;?>" 
                          class="btn btn-xs btn-info" title="Detail">
                          <i class="fas fa-eye"></i></a>
                          </td>
                      </tr>
                    <?php 
                    $no++; 
                    }?>
                    <?php
                  //hitung jumlah semua data 
                  $sql_b = "select `m`.`kode_barang`, `m`.`nama`, `j`.`merk` from `barang` `m`
                  inner join `merk` `j` on `m`.`kode_merk` = `j`.`kode_merk` "; 
                    if (isset($_POST["katakunci"])){
                          $katakunci_b = $_POST["katakunci"];
                          $sql_b .= " where `kode_barang` LIKE '%$katakunci_b%'";
                    } 
                    $sql_b .= " order by `kode_barang`";
                    $query_jum = mysqli_query($koneksi,$sql_b);
                    $jum_data = mysqli_num_rows($query_jum);
                    $jum_halaman = ceil($jum_data/$batas);
                    ?>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
              <?php 
              if($jum_halaman==0){
              //tidak ada halaman
              }else if($jum_halaman==1){
                echo "<li class='page-item'><a class='page-link'>1</a></li>";
              }else{
                $sebelum = $halaman-1;
                $setelah = $halaman+1;                  
              if($halaman!=1){
                  echo "<li class='page-item'><a class='page-link'
                  href='index.php?include=barang&halaman=1'>First</a></li>";
                  echo "<li class='page-item'><a class='page-link' 
                  href='index.php?include=barang&halaman=$sebelum'>«</a></li>";
              }
              for($i=1; $i<=$jum_halaman; $i++){
                if($i!=$halaman){
                    echo "<li class='page-item'><a class='page-link' 
                    href='index.php?include=barang&halaman=$i'>$i</a></li>";
                  }else{
                    echo "<li class='page-item'>
                    <a class='page-link'>$i</a></li>";
                  }
              }
              if($halaman!=$jum_halaman){
                  echo "<li class='page-item'><a class='page-link'  
                  href='index.php?include=barang&halaman=$setelah'>»</a></li>";
                  echo "<li class='page-item'><a class='page-link' 
                  href='index.php?include=barang&halaman=$jum_halaman'>
                  Last</a></li>";
              }
              }?>
              </ul>

              </div>
            </div>
            <!-- /.card -->

    </section>