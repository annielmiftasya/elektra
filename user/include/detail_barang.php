<?php 
  if(isset($_GET['data'])){
    $kode_barang = $_GET['data'];
    //get data barang
    $sql_m = "select `m`.`nama`, `j`.`merk`, `m`.`foto` , `m`.`deskripsi`
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
<section class="content">
<div class="furniture-box">
         <div class="terms-title">
            <div class="container">
               <div class="row">
                  <ol class="breadcrumb">
                     <li><a href="index.php">Home</a></li>
                     <li class="active">Detail Barang</li>
                  </ol>
               </div>
            </div>
         </div>
         <div class="furniture-main">
            <h2><center>Detail Barang</center></h2>
         </div>
</div>
<div class="container">
               <div class="row"></div>
            </div>
         </div>
      </div>
      <div class="product-page-main">
         <div class="container">
            <div class="row" style="padding-left:250px;">
               <div class="col-md-9 col-sm-8" >
                  <div class="md-prod-page">
                     <div class="md-prod-page-in">
                        <div class="page-preview">
                           <div class="preview">
                           <img src="../admin/foto/<?php echo $foto;?>"style="height:490px">
                           </div>
                        </div>
                     </div>
                     <div class="description-box">
                        <div class="spe-a">
                           <h4>Specifications</h4>
                           <ul>
                              <li class="clearfix">
                                 <td>
                                 <div class="col-md-4">
                                    <h5>Kode Barang</h5>
                                 </div>
                                 </td>
                                 <td>
                                 <div class="col-md-8">
                                    <p><?php echo $kode_barang;?></p>
                                 </div>
                                 </td>
                                 
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Nama Produk</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $nama;?></p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Merk</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $merk;?></p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Deskripsi</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $deskripsi;?></p>
                                 </div>
                              </li>
                              
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Kategori</h5>
                                 </div>
                                 <div class="col-md-8">
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
                                    <p><?php echo $kategori;?></p>
                                 </div>
                                    <?php }?>

                                 </div>
                              </li>
                              
                           </ul>
                        </div>
                     </div>
                  </div>
</section>