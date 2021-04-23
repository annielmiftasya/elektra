<?php 

if((isset($_GET['aksi']))&&(isset($_GET['data']))){
  if($_GET['aksi']=='hapus'){
    $id_admin = $_GET['data'];
    //hapus hobi
    $sql_dh = "DELETE FROM `admin` 
    WHERE `id_admin` = '$id_admin'";
    mysqli_query($koneksi, $sql_dh);
  }
}
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Data User</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=profil">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div>
        </div>
      </div>
	 
	  <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
	
	 <div class="row ml-3 "data-aos="fade-down">
	  <div class="col-8">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="include/1.png" class="d-block w-100">
			  <div class="carousel-caption d-none d-md-block">
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="include/2.png" class="d-block w-100">
			  <div class="carousel-caption d-none d-md-block">
				</div>
			</div>
			<div class="carousel-item">
			  <img src="include/3.png" class="d-block w-100">
			  <div class="carousel-caption d-none d-md-block">
				</div>
			</div>
		  </div>
	  </div>
      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-3">
	   <div class="card text-dark mb-3" style="max-width:18rem; height:185px; width:300px; background-color:#83DCE1">
        <div class="card-body mt-4">
          <div class="row">
            <div class="col-8" style="color:white; font-size:30px">
          <h5 class="card-title">Admin Elektra</h5>
          <?php
          // mengambil data barang
          $data_barang = mysqli_query($koneksi,"SELECT * FROM admin WHERE level LIKE 'admin'");
          // menghitung data barang
          $jumlah_barang = mysqli_num_rows($data_barang);
          ?><br>
          <h3><b><?php echo $jumlah_barang; ?></b></h3>
        </div>
        <div class="col-4">
          <img src="include/admin.jpg" style="width:100px; margin-left:-30px;" >
        </div>
        </div>
        </div>
      </div>
      <div class="card text-dark mb-3" style="max-width:18rem; height:185px; width:300px; background-color:#43ABA8">
        <div class="card-body mt-4">
        <div class="row">
            <div class="col-8" style="color:white; font-size:30px">
          <h5 class="card-title">Superadmin</h5>
          <?php
          // mengambil data kategori
          $data_kategori = mysqli_query($koneksi,"SELECT * FROM admin WHERE level LIKE 'superadmin'");
          // menghitung data kategori
          $jumlah_kategori = mysqli_num_rows($data_kategori);
          ?><br>
          <h3><b><?php echo $jumlah_kategori; ?></b></h3>
        </div>
        <div class="col-4">
          <img src="include/superadmin.png" style="width:150px; margin-left:-70px;">
        </div>
        </div>
        </div>
      </div>
      </div>
	  </div>
	  <br>
            <div class="card" style="margin-left:25px">
              <div class="card-header" style="background-color:#B0C4DE">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Data User</h3>
                <div class="tools" style="width:500px;margin-left:620px">
                  <a href="index.php?include=tambah_user" class="btn btn-sm btn-info float-left" style="height:39px"><i class="fas fa-plus"></i> Tambah User</a>
				  <form method="POST" action="index.php?include=user">
					<div class="row">
					<div class="col-md-5 bottom-7" >
						  <input type="text" class="form-control" id="kata_kunci" name="katakunci">
					</div>
					  <div class="col-md-5" >
						<button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button>
					  </div>
					  
					</div><!-- .row -->
				  </form>
                </div>
				<div class="col-md-12">
				  
			   </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
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
                
                    <thead>
                       <table class="table table-bordered text-center">              
                      <tr class="bg-dark">
                        <th width="5%">No</th>
                        <th width="25%">Nama</th>
                        <th width="20%">Email</th>
                        <th width="20%">Username</th>
                        <th width="20%">Level</th>
                        <th width="10%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $batas = 2;
                    if(!isset($_GET['halaman'])) {
                      $posisi = 0;
                      $halaman = 1;
                    }else {
                      $halaman = $_GET['halaman'];
                      $posisi = ($halaman - 1) * $batas;
                    } 
                    //tampil mahasiswa
                    $sql_u = "SELECT `nama`, `email`, `username`, `level`, `id_admin` 
                    from `admin`";
                    if (isset($_POST['katakunci'])){
                      $katakunci_user = $_POST["katakunci"];
                      $_SESSION['katakunci_user'] = $katakunci_user;
                      $sql_u .= " where `email` LIKE '%$katakunci_user%' 
                                    OR `nama` LIKE '%$katakunci_user%'";
                    }
                    $sql_u .= "order by `id_admin` limit $posisi, $batas"; 
                    $query_u = mysqli_query($koneksi, $sql_u);
                    $no = $posisi + 1;
                    while($data_u = mysqli_fetch_row($query_u)) {
                      $nama = $data_u[0];
                      $email = $data_u[1];
                      $username = $data_u[2];
                      $level = $data_u[3];
                      $id_admin = $data_u[4];
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $level; ?></td>
                        <td align="center">
                          <a href="index.php?include=edit_user&data=<?php echo $id_admin;?>" 
                          class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $id_admin.' - '.$nama; ?>?'))
                          window.location.href = 'index.php?include=user&aksi=hapus&data=<?php echo $id_admin; ?>'" 
                          class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>
                        </td>
                      </tr>
                      <?php
                      $no++;
                      } ?>                   
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
			  
              <div class="card-footer clearfix">
              <?php 
              $sql_jum = "SELECT `nama`, `email`, `username`, `level`, `id_admin` 
              from `admin`";
              if(isset($_SESSION['katakunci_user'])) {
                $katakunci_user = $_SESSION['katakunci_user'];
                $sql_jum .= " where `email` LIKE '%$katakunci_user%' 
                OR `nama` LIKE '%$katakunci_user%'";
              }
              $sql_jum .= " ORDER BY `id_admin`";
              $query_jum = mysqli_query($koneksi, $sql_jum);
              $jum_data = mysqli_num_rows($query_jum);
              $jum_halaman = ceil($jum_data/$batas);
              ?>
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
                      href='index.php?include=user&halaman=1'>First</a></li>";
                      echo "<li class='page-item'><a class='page-link' 
                      href='index.php?include=user&halaman=$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                    if($i!=$halaman){
                        echo "<li class='page-item'><a class='page-link' 
                        href='index.php?include=user&halaman=$i'>$i</a></li>";
                      }else{
                      echo "<li class='page-item'>
                        <a class='page-link'>$i</a></li>";
                      }
                  }
                  if($halaman!=$jum_halaman){
                      echo "<li class='page-item'><a class='page-link'  
                      href='index.php?include=user&halaman=$setelah'>
                      »</a></li>";
                      echo "<li class='page-item'><a class='page-link' 
                      href='index.php?include=user&halaman=$jum_halaman'>
                      Last</a></li>";
                  }
              }?>
                </ul>
              </div>
			  
            </div>
			
            <!-- /.card -->

    </section>