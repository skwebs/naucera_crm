<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Naucera CRM | Dashboard</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="<?= base_url("assets/static") ?>/plugins/fontawesome-free/css/all.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?= base_url("assets/static") ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="<?= base_url("assets/static") ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="<?= base_url("assets/static") ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Theme style -->

   <!-- IonIcons -->
   <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url("assets/static") ?>/dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini layout-navbar-fixed ">
   <div class="wrapper">
      <!-- Include Navbar here -->
      <?= $this->include('templates/partials/main_header_nav') ?>

      <!-- Include Main Sidebar here -->
      <?= $this->include('templates/partials/main_sidebar') ?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Employee List</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Employee List</li>
                     </ol>
                  </div><!-- /.col -->
               </div><!-- /.row -->
            </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

         <!-- Main content -->
         <section class="content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">

                     <div class="card">
                        <div class="card-header">
                           <h3 class="card-title">Employee Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>Employee Id</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Contact No.</th>
                                    <th>Email</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php for ($i = 1; $i < 100; $i++) :   ?>
                                    <tr>
                                       <td><?= $i ?></td>
                                       <td>Bijay Pareek</td>
                                       <td>Guwahati</td>
                                       <td>7002397423</td>
                                       <td>pareek123bijay@gmail.com</td>
                                    </tr>
                                 <?php endfor; ?>

                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th>Employee Id</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Contact No.</th>
                                    <th>Email</th>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                        <!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </section>
         <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- include Main Footer -->
      <?= $this->include('templates/partials/footer') ?>

   </div>
   <!-- ./wrapper -->

   <!-- REQUIRED SCRIPTS -->

   <?= $this->include("templates/partials/js-files") ?>
</body>

</html>