<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="refresh"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ofertas</title>

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
          <li class="nav-header">Administrar Base de Datos</li>
          <li class="nav-item">
            <a href="autores.php" class="nav-link">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="nav-icon bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
              <p>Autor</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Editorial.php" class="nav-link">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="nav-icon bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
              </svg>
              <p>Editorial</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Genero.php" class="nav-link">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="nav-icon bi bi-ui-radios-grid" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3.5 15a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm9-9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zM16 3.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm-9 9a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm5.5 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zm-9-11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 2a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg>
              <p>Genero</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Libros.php" class="nav-link">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="nav-icon bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
              </svg>
              <p>Libros</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="LibrosStock.php" class="nav-link">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="nav-icon bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
            </svg>
              <p>Libros Disponibles</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="MetodoPago.php" class="nav-link">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="nav-icon bi bi-ui-radios-grid" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3.5 15a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm9-9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zM16 3.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm-9 9a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm5.5 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zm-9-11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 2a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg>
              <p>Método de pago</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Ofertas.php" class="nav-link">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="nav-icon bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
            </svg>
              <p>Ofertas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Recomendaciones.php" class="nav-link">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="nav-icon bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
            </svg>
              <p>Recomendaciones</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Usuarios.php" class="nav-link">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="nav-icon bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
              <p>Usuarios Administrador</p>
            </a>
          </li>

          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-header">Administracion general</li>
              <li class="nav-item">
                <a href="calendar.html" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>Calendario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Estadistica.html" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>Estadísticas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mailbox/mailbox.html" class="nav-link">
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
            <h1 class="m-0">Ofertas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../eBook Shop/index.html">eBook Shop Client</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </section>

    <!-- Form principal -->
    <section class="content">
        <div id="form1" class="shadow-lg p-3 mb-5 bg-white rounded" style="width:50%; margin-left:250px;">
        <form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="emailHelp">
    <small id="sna" class="form-text text-muted">Ingresa el titulo del libro</small>
  </div>
  <div class="form-group">
    <label for="fecha">Fecha de Inicio</label>
    <input type="date" class="form-control" name="fechai" aria-describedby="emailHelp">
    <small id="sn" class="form-text text-muted">Ingresa la fecha de inicio de la oferta</small>
  </div>
  <div class="form-group">
    <label for="fechafin">Fecha de Termino</label>
    <input type="date" class="form-control" name="fechaf" aria-describedby="emailHelp">
    <small id="sn" class="form-text text-muted">Ingresa la fecha de fin de la oferta</small>
  </div>
  <div class="form-group">
    <label for="precio">Precio Nuevo</label>
    <input type="number" class="form-control" name="precion" aria-describedby="emailHelp">
    <small id="sn" class="form-text text-muted">Ingresa el nuevo precio</small>
  </div>
  <input type="submit" name="b1" onClick="cargar()" class="btn btn-primary btn-lg btn-block" value="Guardar">
</form>

    <!-- Tabla de la consulta -->
        </div>
        <br><br>
        <table class="table table-dark">
            <tr>
                <td>Id</td>
                <td>Titulo</td>    
                <td>Fecha de Inicio</td>
                <td>Fecha de Fin</td>
                <td>Precio Viejo</td>
                <td>Precio Nuevo</td>
            </tr>

        <?php
$con=mysqli_connect("localhost","root","","ebookshop");
$obtener="SELECT * FROM ofertas";
$ejecuta=mysqli_query($con,$obtener);
while($fila=$ejecuta->fetch_assoc())
{
?>
<tr>
<?php 
?>
    <td><?php echo $fila['id_libro'] ?> </td>
    <td><?php echo $fila['titulo'] ?> </td>
    <td><?php 
    $date = date_create($fila['FechaInicio']);
    echo date_format($date, 'Y-m-d H:i:s');
    ?> </td>
    <td><?php 
    $date1 = date_create($fila['FechaFinal']);
    echo date_format($date1, 'Y-m-d H:i:s');
     ?> </td>
    <td><?php echo $fila['PrecioViejo'] ?></td>
    <td><?php echo $fila['PrecioNuevo'] ?></td>
    <td> <div class="container">
    <?php echo '<button type="button" class="btn btn-info btn-m" data-toggle="modal" data-target="#Modal_' . $fila['id_libro'] . '" id=' . $fila['id_libro'] . '" >Editar</button>' ?>
             <!--<?php /*echo *///'<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modal" id=' . $row['id'] . '" >Editar</button>' ?>-->
             <div class="modal fade" id="Modal_<?= $fila['id_libro']; ?>" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                            <div class="modal-body">
                                <fieldset style="width:400px">
                                    <form method="post">
                                        <table class="table table-dark">
                                        <tr>
                                                <td><label for="Ida">ID:</label></td>
                                                <td><input type="text" name="ida" id="ida" value='<?php echo  $fila['id_libro'] ;?>'   readonly="readonly"></td>
                                            </tr>
                                           <tr>
                                              <td><label for="titulo">Titulo</label></td>
                                              <td><input type="text" class="form-control" name="titulo"value='<?php echo  $fila['titulo'] ;?>'  readonly="readonly" id="titulo" aria-describedby="emailHelp"></td>
                                           </tr>
                                           <tr>
                                            <td><label for="fecha">Fecha de Inicio</label></td>
                                            <td><input type="date" class="form-control" name="fechai" value="<?php 
    $date = date_create($fila['FechaInicio']);
    echo date_format($date, 'Y-m-d H:i:s');
    ?>" aria-describedby="emailHelp"></td>
                                           </tr>
                                           <tr>
                                              <td><label for="fechafin">Fecha de Termino</label></td>
                                              <td><input type="date" class="form-control" name="fechaf" value="<?php 
    $date = date_create($fila['FechaFinal']);
    echo date_format($date, 'Y-m-d H:i:s');
    ?>" aria-describedby="emailHelp"></td>
                                           </tr>
                                           <tr>
                                              <td><label for="precio">Precio Nuevo</label></td>
                                              <td><input type="number" class="form-control" value="<?php echo $fila['PrecioNuevo']; ?>" name="precion" aria-describedby="emailHelp"></td>
                                           </tr>
                                            <tr>
                                                <td>
                                                <input type="submit" name="actualiza" value="Actualizar" class="btn btn-primary"></input>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </fieldset>
                            </div>
                            <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </td>
    <td>
        <form method="post" id="form_eliminar_<?php  echo $fila['id_libro']?>">
        <input type="hidden" name="eliminar" value="<?php echo $fila['id_libro'];?>" />
    <input type="submit" value="Eliminar" class="btn btn-danger btn-m"/>
        </form>
</td>
</tr>
<?php
}
if(isset($_POST['eliminar'])){ //Eliminar Autor
    $ideli=$_POST['eliminar'];
    $con=mysqli_connect("localhost","root","","ebookshop");
    $sql2="DELETE FROM ofertas WHERE id_libro='$ideli'";
    if(mysqli_query($con,$sql2)){
    echo "";
    echo "<div class='alert alert-warning' role='alert'>
        Eliminado
      </div>";     
    $con->close();
    echo "<meta http-equiv=refresh content=0;URL=Ofertas.php>";
    }
}
if(isset($_POST["actualiza"])){ //Actualizar Actor
  $con=mysqli_connect("localhost","root","","ebookshop");
  $titulo=$_POST['titulo'];
  $fecha=$_POST['fechai'];
  $fechaf=$_POST['fechaf'];
  $precionuevo=$_POST['precion'];
  $idupdate=$_POST['ida'];
  if(!empty($fecha) && !empty($fechaf) && !empty($precionuevo)){
    $sql="UPDATE ofertas SET FechaInicio='$fecha', FechaFinal='$fechaf', PrecioNuevo='$precionuevo' WHERE id_libro='$idupdate'";
    if(mysqli_query($con,$sql)){
      echo "<div class='alert alert-success' role='alert'>
      Agregado Correctamente
    </div>";
      unset($_POST);
      $con->close();
      echo "<meta http-equiv=refresh content=0;URL=Ofertas.php>";
  }
  else{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  }
  else{
    if(empty($fecha) && empty($fechaf)){
      $sql="UPDATE ofertas SET PrecioNuevo='$precionuevo' WHERE id_libro='$idupdate'";
      if(mysqli_query($con,$sql)){
        echo "<div class='alert alert-success' role='alert'>
        Agregado Correctamente
      </div>";
        unset($_POST);
        $con->close();
        echo "<meta http-equiv=refresh content=0;URL=Ofertas.php>";
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    if(empty($fecha)){
      $sql="UPDATE ofertas SET FechaFinal='$fechaf',PrecioNuevo='$precionuevo' WHERE id_libro='$idupdate'";
      if(mysqli_query($con,$sql)){
        echo "<div class='alert alert-success' role='alert'>
        Agregado Correctamente
      </div>";
        unset($_POST);
        $con->close();
        echo "<meta http-equiv=refresh content=0;URL=Ofertas.php>";
    }
    }
    if(empty($fechaf)){
      $sql="UPDATE ofertas SET FechaInicio='$fecha',FechaFinal='$fechaf',PrecioNuevo='$precionuevo' WHERE id_libro='$idupdate'";
      if(mysqli_query($con,$sql)){
        echo "<div class='alert alert-success' role='alert'>
        Agregado Correctamente
      </div>";
        unset($_POST);
        $con->close();
        echo "<meta http-equiv=refresh content=0;URL=Ofertas.php>";
    }
    }
  } 
 }

?>
</table>
<?php
$contador=0;
$con=mysqli_connect("localhost","root","","ebookshop");
$sql="SELECT * FROM libros";
$ejecuta=mysqli_query($con,$sql);
foreach($ejecuta as $nose){
$contador++;
}
$id=$contador+1;

if(isset($_POST["b1"]) && !empty($_POST["b1"])) { //Agregar Autor
  $titulo=$_POST['titulo'];
  $fecha=$_POST['fechai'];
  $fechaf=$_POST['fechaf'];
  $precionuevo=$_POST['precion'];
//validar si existe el titulo
$sqlautor="SELECT *FROM libros WHERE Titulo='$titulo'";
$ejecuta=mysqli_query($con,$sqlautor);
$fila=mysqli_fetch_array($ejecuta);
$nametitulo=$fila['Titulo'];
$idl=$fila['id_libro'];
$preciovi=$fila['Precio'];

//valida si ya existe
$sqlv="SELECT *FROM ofertas WHERE titulo='$titulo'";
$e=mysqli_query($con,$sqlv);


    if(empty($titulo)){echo "<div class='alert alert-primary' role='alert' style='background-color:red'>Falta el titulo</div>";}
    if(empty($fecha)){echo "<div class='alert alert-primary' role='alert' style='background-color:red'>Falta fecha de inicio</div>";}
    if(empty($fechaf)){echo "<div class='alert alert-primary' role='alert' style='background-color:red'>Falta fecha final</div>";}
    if(empty($precionuevo)){echo "<div class='alert alert-primary' role='alert' style='background-color:red'>Falta el precio nuevo</div>";}
    if(empty($e)){echo "<div class='alert alert-primary' role='alert' style='background-color:red'>Ya existe el titulo en oferta</div>";}

    if(!empty($nametitulo)){
      if(!empty($titulo) && !empty($fecha) && !empty($fechaf) && !empty($precionuevo)){
        if(!empty($e)){
          $sql1="INSERT INTO ofertas (id_libro, titulo, FechaInicio, FechaFinal, PrecioViejo, PrecioNuevo) 
          VALUES ('$idl','$titulo','$fecha','$fechaf','$preciovi','$precionuevo')";
          if(mysqli_query($con,$sql1)){
              echo "<div class='alert alert-success' role='alert'>
              Agregado Correctamente
            </div>";
              unset($_POST);
              $con->close();
              echo "<meta http-equiv=refresh content=0;URL=Ofertas.php>";
          }
          else{
              echo "Error: " . $sql . "<br>" . mysqli_error($con);
          }
       }
  else{
    echo "<div class='alert alert-primary' role='alert' style='background-color:red'>Ya existe el titulo en oferta</div>";
  }
         
        } 
    }
    else{
      echo "<div class='alert alert-primary' role='alert' style='background-color:red'>No existe ese titulo</div>";

    }    
      }
?>
<script>
    function cargar(){
        window.location.href="autores.php";
    }
</script>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
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
</body>
</html>
