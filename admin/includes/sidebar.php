<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-light bg-cyan  elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
       class="brand-image img-circle elevation-3"
       style="opacity: .8">
      <span class="brand-text font-weight-dark">Admin Elektra</span>
    </a>
 
  <!-- Sidebar -->
  <div class="sidebar">
 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" 
        data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href=" index.php?include=profil " class="nav-link">
              <i class="nav-icon fas fa-chart-area"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=barang" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Data Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=merk" class="nav-link">
              <i class="nav-icon fas fa-flag"></i>
              <p>
                Data Merk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=kategori" class="nav-link">
              <i class="nav-icon fas fa-plug  "></i>
              <p>
                Data Kategori Elektronik 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=sales" class="nav-link">
              <i class="nav-icon fas fa-male  "></i>
              <p>
                Data Sales 
              </p>
            </a>
          </li>
          <?php 
  	      if (isset($_SESSION['level'])){
              if ($_SESSION['level']=="superadmin"){?>
              <li class="nav-item">
                <a href="index.php?include=user" class="nav-link">
                  <i class="nav-icon fas fa-user-cog"></i>
                  <p>
                    Pengaturan User
                  </p>
                </a>
              </li>
              <?php }?>
          <?php }?>
          <li class="nav-item">
            <a href="index.php?include=sign_out" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
