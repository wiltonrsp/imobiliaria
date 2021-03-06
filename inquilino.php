<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Domicilios
                
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Inquilinos
                
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Pagamentos
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-left"></i>
              <p>
                Sair
                
              </p>
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
            <h1 class="m-0">Inquilinos</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success" data-toggle="modal" data-target="#exampleModal">
              <div class="inner">
                <h3>Cadastro    </h3>

                 <br>
              </div>
              <div class="icon">
                <i class="ion ion-plus  "></i>
              </div>
            </div>
          </div>

 
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabela da rela????o de inquilinos cadastrados</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">                 
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>RG</th>
                      <th>Telefone</th>
                      <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require 'conexao.php';

                    $sql = "SELECT id,nome, cpf, rg, telefone, email FROM inquilinos";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['cpf'] . "</td>";
                        echo "<td>" . $row['rg'] . "</td>";
                        echo "<td>" . $row['telefone'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        ?>
                        <td ><a href="#" class="btn btn-warning" style="color:white" data-toggle="modal" data-target="#editainquilino<?=$row['id']?>"><i class="fas fa-edit" ></i></a> <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#visualizarnquilino<?=$row['id']?>"><i class="fas fa-eye" style="color:white"></i></a> <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#excluirinquilino<?=$row['id']?>"><i class="fas fa-trash"></i></a></td>
                        
                        
                          <div class="modal fade" id="editainquilino<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Editar Inquilino</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="editarinquilino.php" method="POST">
                                        Nome Completo:
                                          <input class="form-control" type="text" name="nome" value="<?=$row['nome']?>">
                                          <br>
                                          CPF:
                                          <input class="form-control" type="number" name="cpf" value="<?=$row['cpf']?>">
                                          <br>
                                          RG:
                                          <input class="form-control" type="text" name="rg" value="<?=$row['rg']?>">
                                          <br>
                                          Telefone:
                                          <input class="form-control" type="number" name="telefone"value="<?=$row['telefone']?>">
                                          <br>
                                          Email:
                                          <input class="form-control" type="email" name="email"value="<?=$row['email']?>">
                                          <br>
                                          <input class="form-control" type="hidden" name="id"value="<?=$row['id']?>" >
                                          <br>
                                          <center>
                                          <button type="submit" class="btn btn-success">Editar</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                          </center>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="modal fade" id="visualizarnquilino<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Visualizar Inquilino</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                           Nome Completo:
                                          <input class="form-control" type="text" name="nome" value="<?=$row['nome']?>" disabled>
                                          <br>
                                          CPF:
                                          <input class="form-control" type="number" name="cpf" value="<?=$row['cpf']?>" disabled>
                                          <br>
                                          RG:
                                          <input class="form-control" type="text" name="rg" value="<?=$row['rg']?>" disabled>
                                          <br>
                                          Telefone:
                                          <input class="form-control" type="number" name="telefone"value="<?=$row['telefone']?>" disabled>
                                          <br>
                                          Email:
                                          <input class="form-control" type="email" name="email"value="<?=$row['email']?>" disabled>
                                          <br>
                                          <input class="form-control" type="hidden" name="id"value="<?=$row['id']?>" disabled>
                                          <br>
                                          <center><button type="button" class="btn btn-primary" data-dismiss="modal">Voltar</button></center>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="modal fade" id="excluirinquilino<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Excluir Inquilino</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="excluirinquilino.php" method="POST">
                                           <center><p>Deseja Realmente Excluir o Inquilino: <br> <b><?=$row['nome']?></b> </p></center>
                                         
                                          <input class="form-control" type="hidden" name="id"value="<?=$row['id']?>" >
                                          <br>
                                          <center>
                                          <button type="submit" class="btn btn-success">Excluir</button>  
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button></center>
                                       </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </tr>
                    <?php
                      }
                    } else {
                      echo "0 results";
                    }
                    $conn->close();
                  ?> 
                    </tbody>
                  </table>
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
              
            </div>
            <!-- /.col -->
          </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021. </strong>
    TODOS OS SEUS DIREITOS RESERVADOS.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!--Modal cadastro-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro do Inquilino</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="cadastroinquilino.php" method="POST">
            Nome Completo:
            <input class="form-control" type='text' name="nome">
            <br>
            CPF:
            <input class="form-control" type='number' name="cpf">
            <br>
            RG:
            <input class="form-control" type='text' name="rg">
            <br>
            Telefone:
            <input class="form-control" type='number' name="telefone">
            <br>
            Email:
            <input class="form-control" type='email' name="email">
            <br>
            <center>
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </center>
        </form>
      </div>
    </div>
  </div>
</div>  
</div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script>
    $(function () {

      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>
</html>
