<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="<?= BASE_URL ?>plugins/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">POSGRADO</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= BASE_URL ?>plugins/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $_SESSION["usuario"] ?? "" ?></a>
      </div>
    </div>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


        <li class="nav-item">
          <a href="<?= BASE_URL ?>principal" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Inicio
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>


        <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple page
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->

        <li class="nav-item ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Personas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= BASE_URL ?>persona/crear" class="nav-link ">
                <i class="fas fa-plus nav-icon"></i>
                <p>Crear</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= BASE_URL ?>persona" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>Listar</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-box"></i>
            <p>
              Articulos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= BASE_URL ?>articulo/crear" class="nav-link ">
                <i class="fas fa-plus nav-icon"></i>
                <p>Crear</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= BASE_URL ?>articulo/listar" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>Listar</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-box"></i>
            <p>
              Categorias
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= BASE_URL ?>categoria/crear" class="nav-link ">
                <i class="fas fa-plus nav-icon"></i>
                <p>Crear</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= BASE_URL ?>categoria" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>Listar</p>
              </a>
            </li>
          </ul>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>