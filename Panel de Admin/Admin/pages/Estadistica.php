<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Super Admin | Estadisticas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <link rel="shortcut icon" type="image/x-icon" href="../images/favicon_ebook.png"/>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="../index.php" class="d-block">Administrador</a>
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
          <li class="nav-header">Administrar</li>

          <li class="nav-item">
            <a href="calendar.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>Calendario</p>
            </a>
          </li>

          <li class="nav-item">
            <a href=".productos.html" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Productos</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Estadistica.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Estádisticas</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="productos.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Base de Datos</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="productos.php" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Inbox</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon_ebook.png"/>
  </head>
  <body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../images/admin.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="../index.php" class="d-block">Super Administrador</a>
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
            <li class="nav-header">Administrar</li>

            <li class="nav-item">
              <a href="calendar.php" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>Calendario</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="Estadistica.php" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>Estadísticas</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="BaseDatos.php" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>Base de Datos</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="./mailbox/mailbox.html" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>Inbox</p>
              </a>
            </li>

          </ul>
        </nav>

      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">eBook Shop / Estadística</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../../../eBook Shop/index.html" target="blank">eBook Shop Client</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Online Visitantes</h3>
                    <a href="javascript:void(0);">Ver Reporte</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">820</span>
                      <span>Visitantes de todos los tiempos</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                      <span class="text-muted">Desde la última semana</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->

                  <div class="position-relative mb-4">
                    <canvas id="visitors-chart" height="200"></canvas>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Esta semana
                  </span>

                    <span>
                    <i class="fas fa-square text-gray"></i> Última semana
                  </span>
                  </div>
                </div>
              </div>
              <!-- /.card -->

              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Productos</h3>
                  <div class="card-tools">
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-bars"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                    <tr>
                      <th>Producto</th>
                      <th>Precio</th>
                      <th>Ventas</th>
                      <th>Más</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>

                        Harry Potter y la Piedra Filosofal
                      </td>
                      <td>$45 MXN</td>
                      <td>
                        <small class="text-success mr-1">
                          <i class="fas fa-arrow-up"></i>
                          12%
                        </small>
                        1,000 Vendidos
                      </td>
                      <td>
                        <a href="#" class="text-muted">
                          <i class="fas fa-search"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        La Teoría del Todo
                      </td>
                      <td>$25 MXN</td>
                      <td>
                        <small class="text-warning mr-1">
                          <i class="fas fa-arrow-down"></i>
                          0.5%
                        </small>
                        123 Vendidos
                      </td>
                      <td>
                        <a href="#" class="text-muted">
                          <i class="fas fa-search"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        El Principito
                      </td>
                      <td>$40 MXN</td>
                      <td>
                        <small class="text-danger mr-1">
                          <i class="fas fa-arrow-down"></i>
                          3%
                        </small>
                        198 Vendidos
                      </td>
                      <td>
                        <a href="#" class="text-muted">
                          <i class="fas fa-search"></i>
                        </a>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Ventas</h3>
                    <a href="javascript:void(0);">Ver Reporte</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">$18,230.00</span>
                      <span>Ventas de todos los tiempos</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 33.1%
                    </span>
                      <span class="text-muted">Desde el último mes</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->

                  <div class="position-relative mb-4">
                    <canvas id="sales-chart" height="200"></canvas>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Este año
                  </span>

                    <span>
                    <i class="fas fa-square text-gray"></i> Último año
                  </span>
                  </div>
                </div>
              </div>
              <!-- /.card -->

              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Descripción General de la Tienda</h3>
                  <div class="card-tools">
                    <a href="#" class="btn btn-sm btn-tool">
                      <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-tool">
                      <i class="fas fa-bars"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-success text-xl">
                      <i class="ion ion-ios-refresh-empty"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-success"></i> 12%
                    </span>
                      <span class="text-muted">Tasa de Vistas</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->
                  <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-warning text-xl">
                      <i class="ion ion-ios-cart-outline"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                    </span>
                      <span class="text-muted">Tasa de Ventas</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->
                  <div class="d-flex justify-content-between align-items-center mb-0">
                    <p class="text-danger text-xl">
                      <i class="ion ion-ios-people-outline"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-down text-danger"></i> 1%
                    </span>
                      <span class="text-muted">Tasa de nuevos usuarios</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- /.control-sidebar -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020 Team 6.</strong>
      All rights reserved.
    </footer>
  </div>
  </div>
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard3.js"></script>
</body>
</html>
