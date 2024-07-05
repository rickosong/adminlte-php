
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['nama'] ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- user section -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Data User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <!-- user items -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=data_user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampil User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=input_user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cetak Data User</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- kategori section -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Data Kategori
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <!-- kategori items -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=data_kategori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampil Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=input_kategori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cetak Data Kategori</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="index.php?page=logout" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>logout</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>