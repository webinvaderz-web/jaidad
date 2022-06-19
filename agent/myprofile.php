<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once('./layout/nav.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
        <?php require_once('./layout/branding.php'); ?>

            <!-- Sidebar -->
            <?php require_once('./layout/sidebar.php'); ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">

                    <div class="row mb-12">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">My Profile</li>
                            </ol>
                        </div>

                    </div>

                    <div class="row mb-12">
                        <div class="col-sm-12">
                            <h1>My Profile </h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h3 class="card-title">Add New Property</h3>
                                    
                                </div> -->
                                <!-- /.card-header -->
                                <form action="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="">First Name</label>
                                                <input type="text" class="form-control" id="" placeholder="Enter Your First Name" name="">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="">Last Name</label>
                                                <input type="text" class="form-control" id="" placeholder="Enter Your Last Name" name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Display Name</label>
                                                <input type="text" class="form-control" id="" placeholder="Enter Your Last Name" name="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" id="" placeholder="Enter Your Email" name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Mobile Number</label>
                                                <input type="text" class="form-control" id="" placeholder="" name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Office Number</label>
                                                <input type="text" class="form-control" id="" placeholder="" name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Fax Number</label>
                                                <input type="text" class="form-control" id="" placeholder="" name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Property Title">Biographical Information</label>
                                                <textarea class="form-control" id="textAreaExample6" rows="4"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Property Title">Address</label>
                                                <textarea class="form-control" id="textAreaExample6" rows="4"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Agency
                                                </label>
                                                <select id="" class="form-control">
                                                    <option selected>None</option>
                                                    <option>A Agency</option>
                                                    <option>Mega Agency</option>
                                                    <option>Beta Agency</option>
                                                    <option>Copmany</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Website <Span><i class="fa fa-user icon"></i></Span></label>                                               
                                                <input type="text" class="form-control" id="" placeholder="https:// " name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Facebook URL <Span><i class="fa fa-user icon"></i></Span></label>                                               
                                                <input type="text" class="form-control" id="" placeholder="https:// " name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Twitter URL <Span><i class="fa fa-user icon"></i></Span></label>                                               
                                                <input type="text" class="form-control" id="" placeholder="https:// " name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">LinkedIn URL <Span><i class="fa fa-user icon"></i></Span></label>                                               
                                                <input type="text" class="form-control" id="" placeholder="https:// " name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Instagram URL <Span><i class="fa fa-user icon"></i></Span></label>                                               
                                                <input type="text" class="form-control" id="" placeholder="https:// " name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Pinterest URL <Span><i class="fa fa-user icon"></i></Span></label>                                               
                                                <input type="text" class="form-control" id="" placeholder="https:// " name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">YouTube URL <Span><i class="fa fa-user icon"></i></Span></label>                                               
                                                <input type="text" class="form-control" id="" placeholder="https:// " name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Password</label>
                                                <input type="password" class="form-control" id="" placeholder="" name="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Confirm Password</label>
                                                <input type="password" class="form-control" id="" placeholder="" name="">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
 

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
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="./plugins/jszip/jszip.min.js"></script>
    <script src="./plugins/pdfmake/pdfmake.min.js"></script>
    <script src="./plugins/pdfmake/vfs_fonts.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Page specific script -->
    <script>
        var triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'))
        triggerTabList.forEach(function(triggerEl) {
            var tabTrigger = new bootstrap.Tab(triggerEl)

            triggerEl.addEventListener('click', function(event) {
                event.preventDefault()
                tabTrigger.show()
            })
        })
    </script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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