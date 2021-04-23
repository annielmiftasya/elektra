<head>
      <?php include("includes/head.php") ?>`
</head>
<body>
<?php include("includes/header.php") ?>
<div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1>Cari Produk ELektronik<br>Yang Kau Sukai</h1>
                     <h4>menampilkan semua produk</h4>
                    
</div>
<div class="row clearfix">
    <?php
    $sql_h = "SELECT `kode_kategori`, `kategori`, `foto` FROM `kategori`";
    $query_h = mysqli_query($koneksi,$sql_h);
            while($data_h = mysqli_fetch_row($query_h)){
                $kode_kategori = $data_h[0];
                $kategori = $data_h[1];
                $foto = $data_h[2];
    ?>
    <div class="col-lg-3 col-sm-6 col-md-3">
        <a href="">
        <div class="box-img">
            <h4><?php echo $kategori;?></h4>
            <img src="../admin/foto/<?php echo $foto;?>" alt="" style="height:200px;">
        </div>
        </a>
        </div>
        <?php } ?>
        <div class="categories_link">
            <a href="#">Berbagai Kategori Yang Ada</a>
        </div>
    </div>
      </div>
 </div>
      </div>

      <div class="cat-main-box">
         <div class="container">
            <div class="row panel-row">
               <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/xpann-icon.jpg" class="icon-small" alt="">
                        <h4>Lihat Berbagai Produk</h4>
                        <p>melihat seluruh produk yang ada
                        </p>
                     </div>
                  </div>
               </div>

        <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="images/create-icon.jpg" class="icon-small" alt="">
                    <h4>Buat List Keinginan Anda</h4>
                    <p>buat list keinginan anda sesuai daftar yang ada
                    </p>
                    </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/get-icon.jpg" class="icon-small" alt="">
                        <h4>Buat Rencana Membeli</h4>
                        <p>rencana sesuai dengan kebutuhan
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="products_exciting_box">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="exciting_box f_pd">
                     <img src="images/boy.png" class="icon-small" alt="" style="height:300px; widht:300px">
                     <h4>Explore <strong>keinginanmu</strong> dan buat dilist keinginan
                     </h4>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                  <div class="exciting_box l_pd">
                     <img src="images/women.png" class="icon-small" alt="" style="height:300px; widht:300px">
                     <h4><strong>List Produk</strong> dan segera beli</h4>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="start-free-box">
         <div class="container">
            <div class="row">
               <div class="container">
                  <div class="main-start-box">
                     <div class="free-box-a clearfix">
                        <div class="col-md-6 col-sm-6">
                           <div class="left-a-f">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="right-a-f">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" id="merk">
               <div class="main-start-box">
                  <div class="products">
         <div class="main-products">
            <h2>MERK</h2>
                  <div class="product-slidr">
                     <div class="slider">
                     <?php
                    //menampilkan data merk
                  $sql_h = "SELECT `kode_merk`, `merk`, `foto` FROM `merk`";
                     $query_h = mysqli_query($koneksi,$sql_h);
                     while($data_h = mysqli_fetch_row($query_h)){
                        $kode_merk = $data_h[0];
                        $merk = $data_h[1];
                        $foto = $data_h[2];
                        ?>
                     <div>

                     <div class="prod-box" >
                        <div class="prod-i">
                           <img src="../admin/foto/<?php echo $foto;?>" alt="#" style="height:100px">
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="text-center">
                                 <h4> <span><?php echo $merk;?></span></h4>
                              </div>
                           </div>
                           <div class="dit-btn clearfix">
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
         
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="bg_img_right"><img src="images/bg_img1.png" alt="#" /></div>
               <div class="main-start-box">
                  <div class="container">
                     <div class="supplier clearfix">
                        <div class="col-md-5 col-sm-6">
                           <div class="left-supplier">
                              <h4>Halaman Admin</h4>
                              <h2>Majukan Toko Anda <br><span>Dengan Promosikan Barang</span></h2>
                              
                              .
                              <a href="#">Create a supplier account</a>
                           </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                           <div class="right-supplier">
                              <img class="img-responsive" src="images/mockupawal.png" alt="#" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="products" id="barang">
         <div class="main-products">
            <h2>PRODUCTS</h2>
                  <div class="product-slidr">
                     <div class="slider">
                     <?php
                     //menampilkan data barang                    
                    $sql_b = "select `m`.`kode_barang`, `m`.`nama`, `j`.`merk` ,`m`.`foto`
                            from `barang` `m`
                            inner join `merk` `j` 
                            on `m`.`kode_merk` = `j`.`kode_merk` ";
                     $query_b = mysqli_query($koneksi,$sql_b);
                     while($data_b = mysqli_fetch_row($query_b)){
                        $kode_barang = $data_b[0];
                        $nama = $data_b[1];
                        $merk = $data_b[2];
                        $foto = $data_b[3];
                     ?>
                     <div>

                     <div class="prod-box" >
                        <div class="prod-i">
                           <img src="../admin/foto/<?php echo $foto;?>" alt="#" style="height:240px">
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4><?php echo $nama;?></h4>
                                 <p>Merk <span><?php echo $merk;?></span></p>
                                 </div>
                                 <a href="#" tabindex="0">kode barang <?php echo $kode_barang;?></a>
                              </div>
                           <div class="dit-btn clearfix">
                           <a href="index.php?include=detail_barang&data=<?php echo $kode_barang;?>"><i class="fa fa-eye" aria-hidden="true"></i> Detail</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
         </div>
         <?php include("includes/footer.php") ?>
		<?php include("includes/script.php")?>
      </div>
      
   </body>
</html>