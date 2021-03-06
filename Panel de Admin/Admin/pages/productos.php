<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Productos</title>

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
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
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
            <a href="productos.php" class="nav-link">
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
            <a href="http://localhost/phpmyadmin/db_designer.php?db=ebookshop" target="_blank" class="nav-link">
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
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">eBook Shop</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../../eBook Shop/index.html" target="blank">eBook Shop Client</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </section>

    <!-- Main content -->
    <section class="content">
     <button class="btn btn-primary" onclick="AddForm()">Agregar Producto</button>
     <button class="btn btn-danger">Elimar Producto</button>
     <br>
     <div id="formulario" style="align-content: center; border: cornflowerblue; padding-left: 11cm;"></div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/fullcalendar/main.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  function AddForm(){
    var division= document.getElementById("formulario");
    var form =document.createElement("div");
    form.innerHTML="<label>Nombre del producto</label> <br><input type='text'></input> <br> <label>Descripcion del producto</label> <br> <textarea></textarea> <br> <label>Precio</label> <br> <input type='text'></input> <br> <label>Insertar Imagen</label> <br>     <input type='file' name='archivosubido'> <br><br> <button type='button' class='btn btn-success'>Guardar</button>";
    division.appendChild(form);
  }
</script>
</body>
</html>
