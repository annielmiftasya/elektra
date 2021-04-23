<div class="row">
  <div class="col-8 mt-3">
  <img src="include/itu.jpg" style="width:809px; border-radius:20px; margin-left:70px;">
  </div>
  <div class="col-4">
<body class="hold-transition login-page "style="background-color:#AED6F1;" >
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="card" style="height:560px; border-radius:20px;">
    <div class="card-body login-card-body" style="border-radius:20px;">
    <br>
      <h3 class="login-box-msg mt-5"><a href="index.php" class="text-primary"><b style="color:orange;">Admin</b> Elektra</a></h3>
      
      <?php if(!empty($_GET['gagal'])){?>
      <?php if($_GET['gagal']=="userKosong"){?>
          <span class="text-danger">
           Maaf Username Tidak Boleh Kosong
          </span>
        <?php } else if($_GET['gagal']=="passKosong"){?>
          <span class="text-danger">
          Maaf Password Tidak Boleh Kosong
         </span>
        <?php } else {?>
          <span class="text-danger">
          Maaf Username dan Password Anda Salah
        </span>
        <?php 
      }?>
        <?php 
      }?>

    <form action="index.php?include=konfirmasi_login" method="post" class="mt-4" >
        <div class="input-group mb-3">
          <input type="text" class="form-control"
          placeholder="Username" name="username" >
          <div class="input-group-append" >
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3" >
          <input type="password" class="form-control" 
          placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text ">
              <span class="fas fa-lock "></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" value="Login"
            class="btn btn-primary btn-block mb-4 mt-4" style="border-radius:10px; width:160px;">Sign In</button>
          </div>
          
          <div class="col-3">
          </div>
    </div>
          <div class="row mt-1">
            <div class="col-4"></div>
            <div class="col-4"><p class="mt-5">Or Login With</p></div>
            <div class="col-4"></div>
          <!-- /.col -->
          </div>
          <div class="row mt-2">
            <div class="col-3"></div>
            <div class="col-2 text-center">
            <div class="rounded-circle">
            <h2><span class="fab fa-google "style="color:red;"></span></h2>
            </div>
            </div>
            <div class="col-2 text-center">
              <div class="rounded-circle">
              <h2><span class="fab fa-facebook text-big" style="color:blue;"> </span></h2>
            </div>
            </div>
            <div class="col-2 text-center">
            <div class="rounded-circle">  
            <h2><span class="fab fa-instagram text-big" style="color:purple;"> </span></h2>
            </div>
            </div>
            <div class="col-3"></div>

          <!-- /.col -->
          </div>
        </div>
        </div>
      <!-- <span class="text-danger">Maaf Username Tidak Boleh Kosong</span>
      <span class="text-danger">Maaf Password Tidak Boleh Kosong</span>
      <span class="text-danger">Maaf Username dan Password Anda Salah</span> -->
      </>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>
<!-- jQuery -->
<?php include("includes/script.php") ?>
 
</body>